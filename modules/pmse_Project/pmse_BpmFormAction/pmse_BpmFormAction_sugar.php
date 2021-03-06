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

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN pmse_BpmFormAction
 */
class pmse_BpmFormAction_sugar extends Basic {
	var $new_schema = true;
	var $module_dir = 'pmse_Project/pmse_BpmFormAction';
	var $object_name = 'pmse_BpmFormAction';
	var $table_name = 'pmse_bpm_form_action';
	var $importable = false;
    var $disable_custom_fields = true;
    var $id;
    var $name;
    var $date_entered;
    var $date_modified;
    var $modified_user_id;
    var $modified_by_name;
    var $created_by;
    var $created_by_name;
    var $description;
    var $deleted;
    var $created_by_link;
    var $modified_user_link;
    var $activities;
    var $assigned_user_id;
    var $assigned_user_name;
    var $assigned_user_link;
    var $cas_id;
    var $act_id;
    var $pro_id;
    var $user_id;
    var $frm_index;
    var $frm_last;
    var $frm_action;
    var $frm_user_id;
    var $frm_user_name;
    var $frm_date;
    var $frm_comment;


	public function __construct(){
		parent::__construct();
	}
}
