/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
(function(app) {
    // Can be set by routing.start().
    var _routes;

    /**
     * Manages routing behavior.
     *
     * The default implementation provides `before` and `after` callbacks that are executed
     * before and after a route gets triggered.
     *
     * @class Core.Routing
     * @alias SUGAR.App.routing
     * @singleton
     */
    app.augment("routing", {

        /**
         * Checks if a user is authenticated before triggering a route.
         * @param {String} route Route name.
         * @param args(optional) Route parameters.
         * @return {Boolean} Flag indicating if the route should be triggered (`true`).
         */
        beforeRoute: function(route, args) {
            if (!this.triggerBefore("route", {route:route, args:args}))
                return false;

            // skip this check for all white-listed routes (app.config.unsecureRoutes)]
            if (_.indexOf(app.config.unsecureRoutes, route) >= 0) return true;

            // Check if a user is un-authenticated and redirect him to login
            if (!app.api.isAuthenticated()) {
                app.router.login();
                return false;
            }
            else if (!app.isSynced) {
                Backbone.history.stop();
                app.sync();
                return false;
            }
            return true;
        },

        /**
         * Gets called after a route gets triggered.
         *
         * The default implementation does nothing.
         * @param {String} route Route name.
         * @param args(optional) Route parameters.
         */
        after: function(route, args) {
            // Do nothing
        },

        /**
         * If default routes are not desired, overwrite defaults with an array
         * of custom routes with their handlers.
         *
         * @param {Array} customRoutes List of routes to replace sidecar routes
         * with. In the format:
         *
         *     { route: 'route', name: 'routename', callback: function() {} }
         */
        setRoutes: function(customRoutes) {
            app.logger.warn(
                'Core.Routing#setRoutes is deprecated since 7.8 and will be removed in 7.9. ' +
                'Please use Core.Router#addRoutes.'
            );
            _routes = customRoutes;
        },

        /**
         * Should be called when app has finished loading all the necessary files.
         * This will create an instance of Backbone router.
         */
        start: function() {
            var opts = {};

            if (_routes) {
                opts.customRoutes = _routes;
            }

            app.augment("router", new app.Router(opts), false);
            app.events.trigger("router:start", app.router);
            app.router.init();
            app.router.start();
        },

        /**
         * Internal use only - for unit testing Routers.
         *
         * Disable `Backbone.history` temporarily.
         */
        stop: function () {
            app.router.stop();
            _routes = [];
        }
    });

    //Mix in the beforeEvents
    _.extend(app.routing, app.beforeEvent);

    /**
     * Router manages the watching of the address hash and routes to the correct handler.
     *
     * **Note:** The default router has no routes, routes will need to be provided via a custom route object
     * from the `platform.js` file. Custom routes can use predefined route handlers on the default router.
     *
     * Deprecated Routes:
     *
     * - "": "index",
     * - "logout": "logout",
     * - "logout/?clear=:clear": "logout",
     * - ":module": "list",
     * - ":module/layout/:view": "layout",
     * - ":module/create": "create",
     * - ":module/:id/:action": "record",
     * - ":module/:id": "record"
     *
     * ## Events:
     * ### router:init
     * Triggered after {@link Core.Routing#start} has been initialized but before it has started.
     * Should be used to register additional custom routes:
     *
     *     app.events.on('router:init', function(router) {
     *         var routes = [
     *             {
     *                 route: 'MyModule/my_custom_route',
     *                 name: 'MyModule',
     *                 callback: MyModule
     *             }
     *         ];
     *         app.router.addRoutes(routes);
     *     });
     *
     *
     *
     * @class Core.Router
     * @alias SUGAR.App.router
     * @extends Backbone.Router
     * @singleton
     */
    app.Router = Backbone.Router.extend({

        /**
         * Sets custom routes and binds them if available.
         * @param {Object} [opts] options to initialize the router.
         * @param {Object} [opts.customRoutes] customRoutes to override the
         * default sidecar ones.
         */
        initialize: function(opts) {
            opts = opts || {};

            /**
             * The previous fragment.
             *
             * @property {string}
             * @private
             */
            this._previousFragment = '';

            /**
             * The current fragment.
             *
             * @property {string}
             * @private
             */
            this._currentFragment = '';

            if (opts.customRoutes) {
                app.logger.warn(
                    'Core.Router\'s option "customRoutes", is deprecated since 7.8 and will be removed in 7.9. ' +
                    'Please use addRoutes.'
                );
                this._initRoutes = opts.customRoutes;
            }
        },

        /**
         * Calls {@link Core.Routing#before} before invoking a route handler
         * and {@link Core.Routing#after} after the handler is invoked.
         *
         * @param {Function} handler Route callback handler.
         * @private
         */
        _routeHandler: function(handler) {
            var args = Array.prototype.slice.call(arguments, 1),
                route = handler.route;

            if (app.routing.beforeRoute(route, args)) {
                this._previousFragment = this._currentFragment;
                this._currentFragment = this.getFragment();
                handler.apply(this, args);
                app.routing.after(route, args);
            }
        },

        /**
         * Checks if module exists and displays 404 error screen if it does not
         * @param module
         * @return {boolean} `true` if module exists, `false` otherwise.
         * @private
         */
        _moduleExists: function(module) {
            if (module && _.isUndefined(app.metadata.getModule(module))) {
                app.error.handleHttpError({status: 404});
                return false;
            }
            return true;
        },

        _addDefaultRoutes: function() {
            var defaultRoutes = [
                {
                    name: 'notFound',
                    route: /^.*$/,
                    callback: function () {
                        // no matching routes (e.g.: '#//' or '#unkown/path/route)
                        app.error.handleHttpError({status: 404});
                    }
                }
            ];
            this.addRoutes(defaultRoutes);
        },

        /**
         * Registers a handler for a named route.
         *
         * This method wraps the handler into {@link Core.Router#_routeHandler}
         * method.
         *
         * @param {string} route Route expression.
         * @param {string} name Route name.
         * @param {Function} [callback] Route handler. If not supplied, will
         *   use the method name that matches the `name` param.
         */
        route: function (route, name, callback) {
            if (!name) {
                app.logger.warn('Route names will be required in 7.9.');
            } else if (!_.isEmpty(this._routes[name])) {
                app.logger.error('Route "' + name + '" is being overridden. This is highly NOT advisable.');
            }

            this._routes[name] = callback;

            if (!callback) {
                callback = this[name];
            }

            callback.route = name;
            callback = _.wrap(callback, this._routeHandler);
            Backbone.Router.prototype.route.call(this, route, name, callback);
        },

        /**
         * Gets the current backbone fragment.
         *
         * @return {string}
         */
        getFragment: function() {
            return Backbone.history.getFragment();
        },

        /**
         * Updates the URL with the given fragment.
         *
         * @param {string} fragment The fragment to navigate to.
         * @param {Object} [options] The options hash.
         * @param {boolean} [options.trigger] `true` to fire the route callback.
         * @param {boolean} [options.replace] `true` to modify the current URL
         *   without adding an entry to the window.history object.
         */
        navigate: function(fragment, options) {
            Backbone.Router.prototype.navigate.apply(this, arguments);
            if (!(options && options.trigger)) {
                this._previousFragment = this._currentFragment;
                this._currentFragment = this.getFragment();
            }
            return this;
        },

        /**
         * Gets the previous fragment.
         *
         * @return {string}
         */
        getPreviousFragment: function() {
            return this._previousFragment;
        },

        /**
         * Navigates to the previous route in history.
         *
         * This method triggers route change event.
         */
        goBack: function() {
            app.logger.debug("Navigating back...");
            window.history.back();
        },

        /**
         * Navigates the window history.
         *
         * @param {Number} steps Number of steps to navigate (can be negative).
         */
        go: function(steps) {
            window.history.go(steps);
        },

        /**
         * Initializes the router.
         */
        init: function() {
            /**
             * Routes' hashmap by name. See {@link#get} for more info.
             *
             * @type {Object}
             * @private
             */
            this._routes = {};
            this._addDefaultRoutes();
            if (this._initRoutes) {
                this.addRoutes(this._initRoutes);
            }

            if (this.customRoutes) {
                app.logger.warn(
                    'Core.Router\'s option "customRoutes", is deprecated since 7.8 and will be removed in 7.9. ' +
                    'Please use addRoutes.'
                );
                this.addRoutes(this.customRoutes);
            }

            app.events.trigger('router:init');
        },

        /**
         * Starts Backbone history which in turn starts routing the hashtag.
         *
         * See Backbone.history documentation for details.
         */
        start: function() {
            if (!Backbone.History.started) {
                Backbone.history.start();
            }
        },

        stop: function() {
            Backbone.history.stop();
        },

        /**
         * Reset router.
         * Stop Backbone.history and clean up routes.
         * Re-initialize and start routing again.
         */
        reset: function() {
            app.router.stop();
            _routes = [];
            Backbone.history.handlers = [];
            app.router.init();
            app.router.start();
        },

        /**
         * Add routes into router.
         *
         * **Note:** Currently, Backbone stops after the first matching route.
         * Therefore, the order of how custom routes are added is important.
         *
         * In general, the developer should add the more specific route first,
         * so that the intended route gets called.
         *
         * For example, the route `MyRoute/create` will call `myRouteCreate` in
         * the following code snippet:
         *
         *     var routes = [
         *         {
         *             name: 'myRouteCreate',
         *             route: 'MyRoute/create',
         *             callback: myRouteCreate
         *         },
         *         {
         *             name: 'myRoute',
         *             route: "MyRoute(/:my_custom_route)",
         *             callback: myRoute
         *         }
         *     ];
         *
         * If the order of `myRouteCreate` and `myRoute` is reversed, triggering
         * `MyRoute/create` will call `myRoute` with `:my_custom_route` set to
         * `create`, which may not be intended.
         *
         * @param {Array} routes The ordered list of routes.
         */
        addRoutes: function(routes) {
            if (!routes) return;
            var newRoutes = routes.reverse();
            _.each(newRoutes, function(route) {
                this.route(route.route, route.name, route.callback);
            }, this);
        },

        /**
         * Retrieves the callback associated with the given name.
         *
         * @param {string} name The route to get the callback function.
         * @returns {Function} The callback associated with this route name.
         */
        get: function (name) {
            return this._routes[name];
        },

        /**
         * Re-trigger the current route.
         * Used to refresh the current layout/page without doing a hard refresh.
         */
        refresh: function(){
            Backbone.history.loadUrl(Backbone.history.fragment);
        },

        /**
         * Builds a route.
         *
         * This is a convenience function.
         * If you need to override this, define a customBuildRoute function on
         * `app.utils` and return empty string if you want to fallback to this
         * definition of build route.
         *
         * @param {Core.Context|string} moduleOrContext The name of the module
         * or a context object to extract the module from.
         * @param {string} id The model's ID.
         * @param {string} [action] Action name.
         * @return {string} route The built route.
         */
        buildRoute: function(moduleOrContext, id, action) {
            var route;

            if (app.utils && _.isFunction(app.utils.customBuildRoute)) {
                route = app.utils.customBuildRoute.apply(this, arguments);
                if (!_.isEmpty(route)) {
                    return route;
                }
            }

            if (moduleOrContext) {
                // If module is a context object, then extract module from it
                route = (_.isString(moduleOrContext)) ? moduleOrContext : moduleOrContext.get("module");

                if (id) {
                    route += "/" + id;
                }

                if (action) {
                    route += "/" + action;
                }
            } else {
                route = action;
            }

            return route;
        },

        // ----------------------------------------------------
        // Route handlers
        // ----------------------------------------------------

        /**
         * Handles `index` route.
         *
         * Loads `home` layout for `Home` module or `list` route with default module defined in app.config
         */
        index: function() {
            app.logger.debug("Route changed to index");
            if (app.config.defaultModule) {
                this.navigate(app.config.defaultModule, {trigger:true});
            }
            else if (app.acl.hasAccess('read', 'Home')) {
                this.navigate('Home', {trigger:true});
            }
        },

        /**
         * Handles `list` route.
         * @param module Module name.
         */
        list: function(module) {
            if (!this._moduleExists(module)) {
                return;
            }
            app.logger.debug("Route changed to list of " + module);
            app.controller.loadView({
                module: module,
                layout: "records"
            });
        },

        /**
         * Handles arbitrary layout for a module that doesn't have a record associated with the layout.
         * @param module Module name.
         * @param layout Layout name.
         */
        layout: function(module, layout) {
            if (!this._moduleExists(module)) {
                return;
            }
            app.logger.debug("Route changed to layout: " + layout + " for " + module);
            app.controller.loadView({
                module: module,
                layout: layout
            });
        },

        /**
         * Handles `create` route.
         * @param module Module name.
         */
        create: function(module) {
            if (!this._moduleExists(module)) {
                return;
            }
            app.logger.debug("Route changed: create " + module);
            app.controller.loadView({
                module: module,
                create: true,
                layout: "edit"
            });
        },

        /**
         * Handles `login` route.
         */
        login: function() {
            app.logger.debug("Logging in");
            app.controller.loadView({
                module: "Login",
                layout: "login",
                create: true
            });

            // Need to hide the megamenu here otherwise we get a login screen
            // with a megamenu. This is done AFTER the login view loading since
            // loadView fires a _render call on login.js, which rerenders the
            // header in refreshAdditionalComponents().
            app.events.trigger('app:login');

            if(app.config.externalLogin) {
                // This will attempt reauth
                app.api.ping(null, {
                    success: function() {
                        // If we have success then show the megamenu again
                        app.events.trigger('app:login:success');
                        app.router.refresh();
                    },
                    error: function() {
                        app.alert.show('needs_login_error', {
                            level: 'error',
                            messages: app.lang.getAppString('LBL_PORTAL_INVALID_CREDS_TITLE'),
                            title: app.lang.get('LBL_PORTAL_INVALID_CREDS_TITLE')
                        });
                    }
                });
            }
        },

        /**
         * Handles `logout` route.
         */
        logout: function(clear) {
            if (!app.api.isAuthenticated()) {
                // We don't want to store the #logout fragment in the URL
                // history. This will re-direct to the root defined in the
                // Backbone router, and replace the URL.
                this.redirect('/');
                return;
            }

            clear = (clear === "1");
            app.logger.debug("Logging out: " + clear);
            app.logout({
                complete: function() {
                    app.router.navigate("#");
                    if (clear) {
                        //We have to reload to clear any sensitive data from browser tab memory.
                        window.location.reload();
                    } else {
                        if (app.config.externalLogin) {
                            app.controller.loadView({
                                module: "Login",
                                layout: "logout",
                                skipFetch: true,
                                create: true
                            });
                        } else {
                            app.router.login();
                        }
                    }
                },
                success: function(data, request) {
                    app.events.trigger("app:logout:success", data);
                }
            }, clear);
        },

        /**
         * Handles `record` route.
         * @param {string} module Module name.
         * @param {string} id Record ID. If `id` is `create`, it will load the create view.
         * @param {string} [action] Action name (`edit`, etc.). Defaults to `detail` if not specified.
         * @param {string} [layout] The layout to use for this route. Defaults to `record` if not specified.
         */
        record: function(module, id, action, layout) {
            if (!this._moduleExists(module)) {
                return;
            }
            var oldCollection = app.controller.context.get('collection'),
                oldListCollection = app.controller.context.get('listCollection'),
                opts = {
                    module: module,
                    layout: layout || "record",
                    action: (action || "detail")
                };

            if (id !== "create") {
                _.extend(opts, {modelId: id});
            } else {
                _.extend(opts, {create: true});
                opts.layout = "create";
            }

            //If we come from a list view, we get the current collection
            if (oldCollection && oldCollection.module === module && oldCollection.get(id)) {
                opts.listCollection = oldCollection;
            }

            //If we come from a detail view, we need to get the cached collection
            if (oldListCollection && oldListCollection.module === module && oldListCollection.get(id)) {
                opts.listCollection = oldListCollection;
            }

            app.controller.loadView(opts);
        },

        redirect : function(route, options){
            this.navigate(route, _.extend({trigger:true, replace:true}, options));
        }
    });
})(SUGAR.App);
