<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once 'include/Dashlets/DashletGeneric.php';

use Sugarcrm\Sugarcrm\ProcessManager;

class pmse_ProjectDashlet extends DashletGeneric { 

    /**
     * @deprecated Use __construct() instead
     */
    public function pmse_ProjectDashlet($id, $def = null)
    {
        self::__construct($id, $def);
    }

    public function __construct($id, $def = null)
    {
		global $current_user, $app_strings;
		require('modules/pmse_Project/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'pmse_Project');

        $this->searchFields = $dashletData['pmse_ProjectDashlet']['searchFields'];
        $this->columns = $dashletData['pmse_ProjectDashlet']['columns'];

        $this->seedBean = ProcessManager\Factory::getPMSEObject('pmse_Project');
    }
}
