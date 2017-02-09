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

 // $Id: MyPipelineBySalesStageDashlet.meta.php 16280 2006-08-22 19:47:48Z awu $

global $app_strings, $current_language;

$dashletMeta['OutcomeByMonthDashlet'] = array('title'       => 'LBL_TITLE',  
                                                    'description' => 'LBL_TITLE', 
                                                    'icon'		  => 'icon_Charts_Vertical_32.gif',                                                     
                                                    'module'        => 'Opportunities', 
                                                    'category'    => 'Charts');
?>