<?php
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

use Sugarcrm\Sugarcrm\Security\InputValidation\Request;

class ViewQuicklist extends SugarView{

    /**
     * @deprecated Use __construct() instead
     */
    public function ViewQuicklist($bean = null, $view_object_map = array(), Request $request = null)
    {
        self::__construct($bean, $view_object_map, $request);
    }

    public function __construct($bean = null, $view_object_map = array(), Request $request = null)
    {
		parent::__construct($bean, $view_object_map, $request);
	}

	function display()
	{
		global $current_user;
		
	    $query_fields = array('is_read' => 0,'assigned_user_id' => $current_user->id);
	    $n = BeanFactory::getBean('Notifications');
	    $where = "is_read = '0'";
	    //$data = $n->get_list('date_entered',$where);
	   $n1 = BeanFactory::getBean('Notifications');
	   $n1->name = 'Roger';
	   $data['list'][] = $n1;
		echo $this->_formatNotificationsForQuickDisplay($data['list'], "modules/Notifications/tpls/quickView.tpl");
	}
	function _formatNotificationsForQuickDisplay($notifications, $tplFile)
    {
        global $app_strings;
        $this->ss->assign('APP', $app_strings);
        $this->ss->assign('data', $notifications);
        return $this->ss->display($tplFile);
    }
}