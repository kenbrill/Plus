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


require_once 'modules/ModuleBuilder/MB/ModuleBuilder.php';
require_once 'modules/ModuleBuilder/parsers/ParserFactory.php';
require_once 'modules/ExpressionEngine/formulaHelper.php';

class PdfManagerController extends SugarController
{

    public function action_getFields()
    {
        $this->view = 'getFields';
    }

}
