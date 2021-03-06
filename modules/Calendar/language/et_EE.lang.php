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
 
$mod_strings = array (
	'LBL_MODULE_NAME' => 'Kalender',
	'LBL_MODULE_NAME_SINGULAR' => 'Kalender',
	'LBL_MODULE_TITLE' => 'Kalender',
	'LNK_NEW_CALL' => 'Plaani kõne',
	'LNK_NEW_MEETING' => 'Plaani kohtumine',
	'LNK_NEW_APPOINTMENT' => 'Loo kohtumine',
	'LNK_NEW_TASK' => 'Loo ülesanne',
	'LNK_CALL_LIST' => 'Kõned',
	'LNK_MEETING_LIST' => 'Kohtumised',
	'LNK_TASK_LIST' => 'Ülesanded',
	'LNK_VIEW_CALENDAR' => 'Täna',
	'LNK_IMPORT_CALLS' => 'Impordi kõned',
	'LNK_IMPORT_MEETINGS' => 'Impordi kohtumised',
	'LNK_IMPORT_TASKS' => 'Impordi ülesanded',
	'LBL_MONTH' => 'Kuu',
	'LBL_DAY' => 'Päev',
	'LBL_YEAR' => 'Aasta',
	'LBL_WEEK' => 'Nädal',
	'LBL_PREVIOUS_MONTH' => 'Eelmine kuu',
	'LBL_PREVIOUS_DAY' => 'Eelmine päev',
	'LBL_PREVIOUS_YEAR' => 'Eelmine aasta',
	'LBL_PREVIOUS_WEEK' => 'Eelmine nädal',
	'LBL_NEXT_MONTH' => 'Järgmine kuu',
	'LBL_NEXT_DAY' => 'Järgmine päev',
	'LBL_NEXT_YEAR' => 'Järgmine aasta',
	'LBL_NEXT_WEEK' => 'Järgmine nädal',
	'LBL_AM' => 'EL',
	'LBL_PM' => 'PL',
	'LBL_SCHEDULED' => 'Plaanitud',
	'LBL_BUSY' => 'Hõivatud',
	'LBL_CONFLICT' => 'Konflikt',
	'LBL_USER_CALENDARS' => 'Kasutaja kalendrid',
	'LBL_SHARED' => 'Jagatud',
	'LBL_PREVIOUS_SHARED' => 'Eelmine',
	'LBL_NEXT_SHARED' => 'Järgmine',
	'LBL_SHARED_CAL_TITLE' => 'Jagatud kalender',
	'LBL_USERS' => 'Kasutajad',
	'LBL_REFRESH' => 'Värskenda',
	'LBL_EDIT_USERLIST' => 'Kasutajaloend',
	'LBL_SELECT_USERS' => 'Vali kasutajad kalendris kuvamiseks',
	'LBL_FILTER_BY_TEAM' => 'Filtri kasutajaloendit meeskonna järgi:',
	'LBL_ASSIGNED_TO_NAME' => 'Määratud kasutajale',
	'LBL_DATE' => 'Alguskuupäev ja aeg',  
	'LBL_CREATE_MEETING' => 'Plaani kohtumine',
	'LBL_CREATE_CALL' => 'Logi kõne',
	'LBL_HOURS_ABBREV' => 't',
	'LBL_MINS_ABBREV' => 'min',


	'LBL_YES' => 'Jah',
	'LBL_NO' => 'Ei',
	'LBL_SETTINGS' => 'Sätted',
	'LBL_CREATE_NEW_RECORD' => 'Loo tegevus',
    'LBL_CREATE_NEW_CALL' => 'Loo kõne',
    'LBL_CREATING_NEW_ACTIVITY' => 'Loote  uut kohtumist. Kas soovisite: <a href="javascript:void(0);" data-action="create-task">luua ülesande</a> või <a href="javascript:void(0);" data-action="schedule-call">plaanida kõne?</a>',
	'LBL_LOADING' => 'Laadimine ...',
	'LBL_SAVING' => 'Salvestamine ...',
	'LBL_SENDING_INVITES' => 'Kutsete salvestamine ja saatmine ...',
	'LBL_CONFIRM_REMOVE' => 'Kas olete kindel, et soovite selle kirje eemaldada?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Kas olete kindel, et soovite kõik korduvad kirjed eemaldada?',
	'LBL_EDIT_RECORD' => 'Redigeeri tegevust',
    'LBL_EDIT_CALL' => 'Redigeeri kõnet',
	'LBL_ERROR_SAVING' => 'Tõrge salvestamisel',
    'LBL_NO_ACCESS' => 'Teil pole juurdepääsu',
	'LBL_ERROR_LOADING' => 'Tõrge laadimisel',
	'LBL_GOTO_DATE' => 'Mine kuupäeva',
	'NOTICE_DURATION_TIME' => 'Kestusaeg peab olema suurem kui 0',
	'LBL_STYLE_BASIC' => 'Algne',
	'LBL_STYLE_ADVANCED' => 'Laiendatud',

	'LBL_INFO_TITLE' => 'Täiendavad üksikasjad',
	'LBL_INFO_DESC' => 'Kirjeldus',
	'LBL_INFO_START_DT' => 'Alguskuupäev',
	'LBL_INFO_DUE_DT' => 'Tähtaeg',
	'LBL_INFO_DURATION' => 'Kestus',
	'LBL_INFO_NAME' => 'Teema',
	'LBL_INFO_RELATED_TO' => 'Seotud',

	'LBL_NO_USER' => 'Puudub vaste väljaga: määratud kasutajale',
	'LBL_SUBJECT' => 'Teema',
	'LBL_DURATION' => 'Kestus',
	'LBL_STATUS' => 'Olek',
	'LBL_DATE_TIME' => 'Kuupäev ja kellaaeg',


	'LBL_SETTINGS_TITLE' => 'Sätted',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Kuva ajapilud vaadetes Päev ja Nädal:',
	'LBL_SETTINGS_TIME_STARTS'=>'Algusaeg:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Lõpuaeg:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Kuva kõned:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Kuva ülesanded:', 

	'LBL_SAVE_BUTTON' => 'Salvesta',
	'LBL_DELETE_BUTTON' => 'Kustuta',
	'LBL_APPLY_BUTTON' => 'Rakenda',
	'LBL_SEND_INVITES' => 'Salvesta ja saada kutsed',
	'LBL_CANCEL_BUTTON' => 'Tühista',
	'LBL_CLOSE_BUTTON' => 'Sulge',

	'LBL_GENERAL_TAB' => 'Üksikasjad',
	'LBL_PARTICIPANTS_TAB' => 'Kutsutud',
	'LBL_REPEAT_TAB' => 'Korduvus',	
	
	'LBL_REPEAT_TYPE' => 'Korda',
	'LBL_REPEAT_INTERVAL' => 'Iga',
	'LBL_REPEAT_END' => 'Lõpp',	
	'LBL_REPEAT_END_AFTER' => 'Pärast',
	'LBL_REPEAT_OCCURRENCES' => 'kordumist',
	'LBL_REPEAT_END_BY' => 'Poolt',	
	'LBL_REPEAT_DOW' => 'Ajal',	
	'LBL_REPEAT_UNTIL' => 'Korda kuni',
	'LBL_REPEAT_COUNT' => 'Korduste arv',
	'LBL_RECURRING_LIMIT_ERROR' => 'Seda korduvat moodulit $moduleTitle ei saa plaanida, kuna see ületab maksimaalse lubatud $limit kordumise.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Redigeeri kõiki kordumisi',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Kustuta kõik kordumised',

	'LBL_DATE_END_ERROR' => 'Lõppkuupäev on enne alguskuupäeva',
	'ERR_YEAR_BETWEEN' => 'Vabandame, kalender ei suuda teie taotletud aastat käsitseda<br>Aasta peab olema vahemikus 1970 kuni 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: pole selle vaate puhul määratletud',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Korduvate {0} sündmuste arv on piirangu ületanud",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} pole korduv sündmus",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} pole emakordumine",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} ei tuvastata korduva sündmuse moodulina",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Pühap",
			"Esmasp",
			"Teisip",
			"Kolmap",
			"Neljap",
			"Reede",
			"Laup",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Pühapäev",
			"Esmaspäev",
			"Teisipäev",
			"Kolmapäev",
			"Neljapäev",
			"Reede",
			"Laupäev",
		),
	'dom_cal_month'=>
		array(
			"",
			"Jaan",
			"Veebr",
			"Märts",
			"Aprill",
			"Mai",
			"Juuni",
			"Juuli",
			"Aug",
			"Sept",
			"Okt",
			"Nov",
			"Dets",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"Jaanuar",
			"Veebruar",
			"Märts",
			"Aprill",
			"Mai",
			"Juuni",
			"Juuli",
			"August",
			"September",
			"Oktoober",
			"November",
			"Detsember",
		),
);
