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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => '要删除潜在客户必须指定记录编号。',
    'LBL_ACCOUNT_DESCRIPTION'=> '帐户说明',
    'LBL_ACCOUNT_ID'=>'帐户 ID',
    'LBL_ACCOUNT_NAME' => '客户姓名：',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活动',
    'LBL_ADD_BUSINESSCARD' => '添加名片',
    'LBL_ADDRESS_INFORMATION' => '地址信息',
    'LBL_ALT_ADDRESS_CITY' => '备用地址城市',
    'LBL_ALT_ADDRESS_COUNTRY' => '备用地址国家/地区',
    'LBL_ALT_ADDRESS_POSTALCODE' => '备用地址邮政编码',
    'LBL_ALT_ADDRESS_STATE' => '备用地址省份',
    'LBL_ALT_ADDRESS_STREET_2' => '备用地址街道2',
    'LBL_ALT_ADDRESS_STREET_3' => '备用地址街道3',
    'LBL_ALT_ADDRESS_STREET' => '备用地址街道',
    'LBL_ALTERNATE_ADDRESS' => '其他地址：',
    'LBL_ANY_ADDRESS' => '任何地址：',
    'LBL_ANY_EMAIL' => '电子邮件：',
    'LBL_ANY_PHONE' => '任何电话：',
    'LBL_ASSIGNED_TO_NAME' => '负责人姓名',
    'LBL_ASSIGNED_TO_ID' => '负责人：',
    'LBL_BACKTOLEADS' => '追溯到潜在客户',
    'LBL_BUSINESSCARD' => '转换潜在客户',
    'LBL_CITY' => '城市：',
    'LBL_CONTACT_ID' => '联系人 ID',
    'LBL_CONTACT_INFORMATION' => '概述',
    'LBL_CONTACT_NAME' => '潜在客户姓名：',
    'LBL_CONTACT_OPP_FORM_TITLE' => '潜在客户-商业机会：',
    'LBL_CONTACT_ROLE' => '角色：',
    'LBL_CONTACT' => '潜在客户：',
    'LBL_CONVERT_BUTTON_LABEL' => '转换',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => '保存和转换',
    'LBL_CONVERT_PANEL_OPTIONAL' => '（可选）',
    'LBL_CONVERT_ACCESS_DENIED' => '您缺少编辑访问权转换潜在客户所需的模块： {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => '搜索重复...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => '忽略并创建新的',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => '返回重复',
    'LBL_CONVERT_SWITCH_TO_CREATE' => '创建新的',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => '查找',
    'LBL_CONVERT_DUPLICATES_FOUND' => '找到 {{duplicateCount}} 重复记录',
    'LBL_CONVERT_CREATE_NEW' => '新 {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => '选择 {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => '正在选择 {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => '创建 {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => '正在创建 {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => '重置',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => '将相关活动复制到',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => '将相关活动移动到',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => '将相关活动移至联系人记录中',
    'LBL_CONVERTED_ACCOUNT'=>'已转换的帐户：',
    'LBL_CONVERTED_CONTACT' => '已转换的联系人：',
    'LBL_CONVERTED_OPP'=>'已转换的商业机会：',
    'LBL_CONVERTED'=> '已转换的',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => '转换潜在客户',
    'LBL_CONVERTLEAD' => '转换潜在客户',
    'LBL_CONVERTLEAD_WARNING' => '警告：您将要转换的潜在客户的状态为“已经转换”。联系人和/或客户记录已从潜在客户创建。如果您一定要转换这个潜在客户，请单击“保存”。如果您想返回到潜在客户页面而不进行转换，则单击“取消”。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => '可能的联系人：',
    'LBL_CONVERTLEAD_ERROR' => '无法转换潜在客户',
    'LBL_CONVERTLEAD_FILE_WARN' => '您成功转换了潜在客户 {{leadName}}, 但有一条或多条记录的问题上传附件',
    'LBL_CONVERTLEAD_SUCCESS' => '您成功地转换了潜在客户 {{leadName}}',
    'LBL_COUNTRY' => '国家/地区：',
    'LBL_CREATED_NEW' => '创建一个新的',
	'LBL_CREATED_ACCOUNT' => '创建新账户',
    'LBL_CREATED_CALL' => '新增一个电话',
    'LBL_CREATED_CONTACT' => '新增一个联系人',
    'LBL_CREATED_MEETING' => '新增一个会议',
    'LBL_CREATED_OPPORTUNITY' => '创建新的商业机会',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '潜在客户',
    'LBL_DEPARTMENT' => '部门：',
    'LBL_DESCRIPTION_INFORMATION' => '说明信息',
    'LBL_DESCRIPTION' => '说明:',
    'LBL_DO_NOT_CALL' => '谢绝来电：',
    'LBL_DUPLICATE' => '类似的潜在客户',
    'LBL_EMAIL_ADDRESS' => '电子邮件地址：',
    'LBL_EMAIL_OPT_OUT' => '退出电子邮件：',
    'LBL_EXISTING_ACCOUNT' => '使用现有账户',
    'LBL_EXISTING_CONTACT' => '使用现有联系人',
    'LBL_EXISTING_OPPORTUNITY' => '使用一个已经存在的商业机会',
    'LBL_FAX_PHONE' => '传真：',
    'LBL_FIRST_NAME' => '名：',
    'LBL_FULL_NAME' => '全名：',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'历史记录',
    'LBL_HOME_PHONE' => '家庭电话：',
    'LBL_IMPORT_VCARD' => '导入 vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => '从电子名片成功创建的潜在客户',
    'LBL_VCARD' => '电子名片',
    'LBL_IMPORT_VCARDTEXT' => '通过从文件系统导入电子名片来自动创建新的潜在客户。',
    'LBL_INVALID_EMAIL'=>'无效的电子邮件：',
    'LBL_INVITEE' => '直接报告人',
    'LBL_LAST_NAME' => '姓：',
    'LBL_LEAD_SOURCE_DESCRIPTION' => '潜在客户来源说明：',
    'LBL_LEAD_SOURCE' => '潜在客户来源：',
    'LBL_LIST_ACCEPT_STATUS' => '收件人状态',
    'LBL_LIST_ACCOUNT_NAME' => '账户名称',
    'LBL_LIST_CONTACT_NAME' => '潜在客户姓名',
    'LBL_LIST_CONTACT_ROLE' => '角色',
    'LBL_LIST_DATE_ENTERED' => '创建日期',
    'LBL_LIST_EMAIL_ADDRESS' => '电子邮件',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_VIEW_FORM_TITLE' => '潜在客户视图',
    'LBL_LIST_FORM_TITLE' => '潜在客户列表',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '潜在客户来源说明',
    'LBL_LIST_LEAD_SOURCE' => '潜在客户来源',
    'LBL_LIST_MY_LEADS' => '我的潜在客户',
    'LBL_LIST_NAME' => '姓名',
    'LBL_LIST_PHONE' => '办公电话',
    'LBL_LIST_REFERED_BY' => '推荐人',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LIST_TITLE' => '职称',
    'LBL_MOBILE_PHONE' => '移动电话：',
    'LBL_MODULE_NAME' => '潜在客户',
    'LBL_MODULE_NAME_SINGULAR' => '潜在客户',
    'LBL_MODULE_TITLE' => '潜在客户：首页',
    'LBL_NAME' => '姓名:',
    'LBL_NEW_FORM_TITLE' => '新的潜在客户',
    'LBL_NEW_PORTAL_PASSWORD' => '新的门户密码：',
    'LBL_OFFICE_PHONE' => '办公室电话：',
    'LBL_OPP_NAME' => '商业机会名称:',
    'LBL_OPPORTUNITY_AMOUNT' => '商业机会金额：',
    'LBL_OPPORTUNITY_ID'=>'商业机会 ID',
    'LBL_OPPORTUNITY_NAME' => '商业机会名称:',
    'LBL_OTHER_EMAIL_ADDRESS' => '其他电子邮件：',
    'LBL_OTHER_PHONE' => '其他电话：',
    'LBL_PHONE' => '电话：',
    'LBL_PORTAL_ACTIVE' => '启用门户网站：',
    'LBL_PORTAL_APP'=> '门户网站应用程序',
    'LBL_PORTAL_INFORMATION' => '门户网站信息',
    'LBL_PORTAL_NAME' => '门户网站名称：',
    'LBL_PORTAL_PASSWORD_ISSET' => '已设置门户网站密码：',
    'LBL_POSTAL_CODE' => '邮编：',
    'LBL_STREET' => '街道',
    'LBL_PRIMARY_ADDRESS_CITY' => '主要地址城市',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主要地址国家',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主要地址邮政编码',
    'LBL_PRIMARY_ADDRESS_STATE' => '主要地址省份',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'主要地址街道 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'主要地址街道 3',
    'LBL_PRIMARY_ADDRESS_STREET' => '主要地址街道',
    'LBL_PRIMARY_ADDRESS' => '主要地址：',
    'LBL_RECORD_SAVED_SUCCESS' => '您已成功创建 {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>。',
    'LBL_REFERED_BY' => '推荐人：',
    'LBL_REPORTS_TO_ID'=>'汇报对象 ID',
    'LBL_REPORTS_TO' => '汇报对象：',
    'LBL_REPORTS_FROM' => '报表来自：',
    'LBL_SALUTATION' => '称谓',
    'LBL_MODIFIED'=>'修改人',
	'LBL_MODIFIED_ID'=>'修改人 ID',
	'LBL_CREATED'=>'创建人',
	'LBL_CREATED_ID'=>'创建人 ID',
    'LBL_SEARCH_FORM_TITLE' => '潜在客户搜索',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择核选的潜在客户',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择核选的潜在客户',
    'LBL_STATE' => '省份：',
    'LBL_STATUS_DESCRIPTION' => '状态说明：',
    'LBL_STATUS' => '状态：',
    'LBL_TITLE' => '职称：',
    'LBL_UNCONVERTED'=> '未转换',
    'LNK_IMPORT_VCARD' => '从电子名片创建潜在客户',
    'LNK_LEAD_LIST' => '查看潜在客户',
    'LNK_NEW_ACCOUNT' => '新增账户',
    'LNK_NEW_APPOINTMENT' => '新增约会',
    'LNK_NEW_CONTACT' => '新增联系人',
    'LNK_NEW_LEAD' => '创建潜在客户',
    'LNK_NEW_NOTE' => '创建笔记',
    'LNK_NEW_TASK' => '创建任务',
    'LNK_NEW_CASE' => '新增案例',
    'LNK_NEW_CALL' => '记录电话',
    'LNK_NEW_MEETING' => '调度会议',
    'LNK_NEW_OPPORTUNITY' => '创建商业机会',
	'LNK_SELECT_ACCOUNTS' => '<b>或</b>选择客户',
    'LNK_SELECT_CONTACTS' => '<b>或</b>选择联系人',
    'NTC_COPY_ALTERNATE_ADDRESS' => '复制备用地址到主要地址',
    'NTC_COPY_PRIMARY_ADDRESS' => '复制主要地址到备用地址',
    'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录吗？',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '新建商业机会需要账户。\n 您可以新建账户或选择现有账户。',
    'NTC_REMOVE_CONFIRMATION' => '您确定要从这个案例移除这个潜在客户？',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '您确定要将作为直接报告的此记录移除吗?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'市场活动日志',
    'LBL_TARGET_OF_CAMPAIGNS'=>'成功的市场活动：',
    'LBL_TARGET_BUTTON_LABEL'=>'锁定目标',
    'LBL_TARGET_BUTTON_TITLE'=>'锁定目标',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => '市场活动：',
  	'LBL_LIST_ASSIGNED_TO_NAME' => '获指派的用户',
    'LBL_PROSPECT_LIST' => '潜在客户列表',
    'LBL_PROSPECT' => '目标',
    'LBL_CAMPAIGN_LEAD' => '市场活动',
	'LNK_LEAD_REPORTS' => '查看潜在客户报表',
    'LBL_BIRTHDATE' => '生日：',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'谢谢您的提交。',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'很抱歉，目前服务器不可用，请稍后再试。',
    'LBL_ASSISTANT_PHONE' => '助理电话',
    'LBL_ASSISTANT' => '助理',
    'LBL_REGISTRATION' => '注册',
    'LBL_MESSAGE' => '请在下面输入您的信息。 信息和/或帐户将为您创建等待审批。',
    'LBL_SAVED' => '感谢您的注册。 将创建您的帐户且有人很快与您联系。',
    'LBL_CLICK_TO_RETURN' => '返回门户',
    'LBL_CREATED_USER' => '已创建的用户',
    'LBL_MODIFIED_USER' => '已修改的用户',
    'LBL_CAMPAIGNS' => '市场活动',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => '市场活动',
    'LBL_CONVERT_MODULE_NAME' => '模块',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => '模块',
    'LBL_CONVERT_REQUIRED' => '必须',
    'LBL_CONVERT_SELECT' => '允许选择',
    'LBL_CONVERT_COPY' => '复制数据',
    'LBL_CONVERT_EDIT' => '编辑',
    'LBL_CONVERT_DELETE' => '删除',
    'LBL_CONVERT_ADD_MODULE' => '添加模块',
    'LBL_CONVERT_EDIT_LAYOUT' => '编辑转换布局',
    'LBL_CREATE' => '创建',
    'LBL_SELECT' => '<b>或</b>选择',
	'LBL_WEBSITE' => '网址',
	'LNK_IMPORT_LEADS' => '导入潜在客户',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => '注意：当前转换潜在客户页面包含自定义字段。当您第一次在工作室中自定义转换潜在客户页面时，将需要根据需要添加自定义字段到布局中。自定义字段将不会像以前一样自动出现在布局中。',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> '用于在其中创建新记录的模块。',
	'LBL_REQUIRED_TIP' 	=> '必须创建或选择必填模块后才能转换潜在客户。',
	'LBL_COPY_TIP'		=> '如果选中，潜在客户中的字段将会被复制到新创建的记录中具有相同名称的字段。',
	'LBL_SELECTION_TIP' => '在联系人中相关字段的模块中进行选择而不是在转换潜在客户流程中创建。',
	'LBL_EDIT_TIP'		=> '修改此模块的转换布局。',
	'LBL_DELETE_TIP'	=> '从转换布局删除此模块。',

    'LBL_ACTIVITIES_MOVE'   => '将活动移至',
    'LBL_ACTIVITIES_COPY'   => '将活动复制至',
    'LBL_ACTIVITIES_MOVE_HELP'   => "选择要移至潜在客户活动中的记录。任务、电话、会议、记录和电子邮件将被移至所选记录。",
    'LBL_ACTIVITIES_COPY_HELP'   => "选择要为其创建副本的潜在客户的活动记录。将为每个所选记录创建新任务、 电话、 会议和笔记。将与所选记录相关的电子邮件。",
    //For export labels
    'LBL_PHONE_HOME' => '电话首页',
    'LBL_PHONE_MOBILE' => '电话移动',
    'LBL_PHONE_WORK' => '电话工作',
    'LBL_PHONE_OTHER' => '其他电话',
    'LBL_PHONE_FAX' => '电话传真',
    'LBL_CAMPAIGN_ID' => '市场活动 ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '分配的用户名',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '分配的用户 ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '修改人 ID',
    'LBL_EXPORT_CREATED_BY' => '创建人 ID',
    'LBL_EXPORT_PHONE_MOBILE' => '移动电话',
    'LBL_EXPORT_EMAIL2'=>'其他电子邮件地址',
	'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => '输入日期' /*for 508 compliance fix*/,
	'LBL_LOADING' => '连载中' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => '编辑' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B 主要编号',
    'LBL_DNB_BAL_PREVIEW' => '潜在客户预览',
    'LBL_DNB_BAL_RSLT_CNT' => '潜在客户',
    'LBL_DNB_BAL_RSLT_HEADER' => 'D&B：潜在客户信息',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => '笔记',

    'LBL_HELP_CONVERT_TITLE' => '转换一个{{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} 模块包括个人前景可能感兴趣的产品或您的组织提供服务。一旦 {{module_name}} 合资格作为销售的 {{opportunities_singular_module}}，{{plural_module_name}} 可被转换为 {{contacts_module}}、 {{opportunities_module}} 和 {{accounts_module}}。有各种方法可以在 Sugar 创建 {{plural_module_name}} 通过 {{plural_module_name}} 模块，重复，导入 {{plural_module_name}} 等。一旦创建了 {{module_name}} 记录，您可以查看和编辑属于 {{module_name}} 通过 {{plural_module_name}} 记录视图的信息。',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} 模块包括个人前景可能感兴趣的产品或您的组织提供的服务。

 -通过单击一个单独的字段或编辑按钮编辑该记录的字段。
-查看或修改的子面板中的其他记录的链接，通过切换到"数据视图"左窗格的底部。
-使用和查看用户评论和记录的更改历史记录中的 {{activitystream_singular_module}} 通过切换到"活动流"左窗格的底部。
-按照或收藏使用的记录名称右侧的图标的记录。
-下拉列表右侧的编辑按钮的操作菜单中有更多操作。',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} 模块包括可能对贵公司提供的产品或服务感兴趣的单个潜在客户。一旦 {{module_name}} 有资格作为销售的 {{opportunities_singular_module}}，它可以转换为 {{contacts_singular_module}}、 {{accounts_singular_module}}、 {{opportunities_singular_module}} 或其他记录。

 创建 {{module_name}}: 
1. 按需提供字段值。 
- 标记为“必填”的字段在保存前必须先填写完整。
 - 如有需要，点击“显示更多”以显示其它字段。
2. 点击“保存”以完成新纪录，并返回至上一页。',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar 允许您转换 {{plural_module_name}}为{{contacts_module}}、{{accounts_module}}和其他模块，一旦{{module_name}}符合您的达标条件。

通过修改字段单步执行每个模块，通过单击每个”关联“按钮确定新记录的值。

如果 Sugar 检测到系统中存在与您的{{module_name}}匹配的记录，您可以通过选择”关联“按钮选择复制并确定您的选择或者单击"忽略并创建新的"后继续操作。

在您确定所需和所需的模块后，单击上方的“保存并转换”按钮完成转换。',

    //Marketo
    'LBL_MKTO_SYNC' => '同步到 Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo 潜在客户编号',
    'LBL_MKTO_LEAD_SCORE' => '潜在客户评分',

    'LBL_FILTER_LEADS_REPORTS' => '潜在客户的报表',
);
