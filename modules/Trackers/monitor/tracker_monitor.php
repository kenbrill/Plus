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

require_once('modules/Trackers/monitor/Monitor.php');

class tracker_monitor extends Monitor
{
    /**
     * @deprecated Use __construct() instead
     */
    public function tracker_monitor($name = '', $monitorId = '', $metadata = '', $store = '')
    {
        self::__construct($name, $monitorId, $metadata, $store);
    }

    public function __construct($name = '', $monitorId = '', $metadata = '', $store = '')
    {
        parent::__construct($name, $monitorId, $metadata, $store);
    }

    /**
     * save
     * This method retrieves the Store instances associated with monitor and calls
     * the flush method passing with the montior ($this) instance.
     * @param $flush boolean parameter indicating whether or not to flush the instance data to store or possibly cache
     */
    public function save($flush=true) {
    	//if the monitor does not have values set no need to do the work saving. 
    	if(!$this->dirty)return false;
    	
    	if(!$this->isEnabled() && (isset($this->visible) && !$this->getValue('visible'))) {
    		return false;
    	}
    	
    	if(empty($GLOBALS['tracker_' . $this->table_name])) {
    	    foreach($this->stores as $s) {
	    		$store = $this->getStore($s);
	    		$store->flush($this);
    		}
    	}
    	$this->clear();
    }

}
