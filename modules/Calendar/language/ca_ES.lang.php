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
	'LBL_MODULE_NAME' => 'Calendari',
	'LBL_MODULE_NAME_SINGULAR' => 'Calendari',
	'LBL_MODULE_TITLE' => 'Calendari',
	'LNK_NEW_CALL' => 'Programa una trucada',
	'LNK_NEW_MEETING' => 'Programa una reunió',
	'LNK_NEW_APPOINTMENT' => 'Crear cita',
	'LNK_NEW_TASK' => 'Crea una tasca',
	'LNK_CALL_LIST' => 'Trucades',
	'LNK_MEETING_LIST' => 'Reunions',
	'LNK_TASK_LIST' => 'Tasques',
	'LNK_VIEW_CALENDAR' => 'Avui',
	'LNK_IMPORT_CALLS' => 'Importar Trucades',
	'LNK_IMPORT_MEETINGS' => 'Importar Reunions',
	'LNK_IMPORT_TASKS' => 'Importa tasques',
	'LBL_MONTH' => 'Mes',
	'LBL_DAY' => 'Dia',
	'LBL_YEAR' => 'Any',
	'LBL_WEEK' => 'Setmana',
	'LBL_PREVIOUS_MONTH' => 'Mes Anterior',
	'LBL_PREVIOUS_DAY' => 'Dia anterior',
	'LBL_PREVIOUS_YEAR' => 'Any Anterior',
	'LBL_PREVIOUS_WEEK' => 'Setmana anterior',
	'LBL_NEXT_MONTH' => 'Mes següent',
	'LBL_NEXT_DAY' => 'Dia següent',
	'LBL_NEXT_YEAR' => 'Any Següent',
	'LBL_NEXT_WEEK' => 'Setmana següent',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Programat',
	'LBL_BUSY' => 'Ocupat',
	'LBL_CONFLICT' => 'Conflicte',
	'LBL_USER_CALENDARS' => 'Calendaris d&#39;Usuari',
	'LBL_SHARED' => 'Compartit',
	'LBL_PREVIOUS_SHARED' => 'Anterior',
	'LBL_NEXT_SHARED' => 'Següent',
	'LBL_SHARED_CAL_TITLE' => 'Calendari Compartit',
	'LBL_USERS' => 'Usuari',
	'LBL_REFRESH' => 'Actualitzar',
	'LBL_EDIT_USERLIST' => 'Llista d&#39;Usuaris',
	'LBL_SELECT_USERS' => 'Seleccioni usuaris per a la visualització de calendari',
	'LBL_FILTER_BY_TEAM' => 'Filtrar usuaris per equip:',
	'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
	'LBL_DATE' => 'Data i hora d&#39;inici',  
	'LBL_CREATE_MEETING' => 'Programa una reunió',
	'LBL_CREATE_CALL' => 'Registrar trucada',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Sí',
	'LBL_NO' => 'No',
	'LBL_SETTINGS' => 'Configuració',
	'LBL_CREATE_NEW_RECORD' => 'Crear activitat',
    'LBL_CREATE_NEW_CALL' => 'Crear trucada',
    'LBL_CREATING_NEW_ACTIVITY' => 'Esteu creant una reunió nova. Volieu <a href="javascript:void(0);" data-action="create-task">Crear una tasca</a> o <a href="javascript:void(0);" data-action="schedule-call">Programar una trucada</a>?',
	'LBL_LOADING' => 'S&#39;està carregant...',
	'LBL_SAVING' => 'Guardant...',
	'LBL_SENDING_INVITES' => 'Guardant i Enviant invitacions .....',
	'LBL_CONFIRM_REMOVE' => 'Està segur de voler eliminar el registre?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Està segur de voler eliminar tots els registres que es repeteixen?',
	'LBL_EDIT_RECORD' => 'Edita activitat',
    'LBL_EDIT_CALL' => 'Edita trucada',
	'LBL_ERROR_SAVING' => 'Error en desar',
    'LBL_NO_ACCESS' => 'No té accés',
	'LBL_ERROR_LOADING' => 'Error en carregar',
	'LBL_GOTO_DATE' => 'Anar a data',
	'NOTICE_DURATION_TIME' => 'El temps de durada te que ser major que 0',
	'LBL_STYLE_BASIC' => 'Basic',
	'LBL_STYLE_ADVANCED' => 'Avançat',

	'LBL_INFO_TITLE' => 'Detalls addicionals',
	'LBL_INFO_DESC' => 'Descripció',
	'LBL_INFO_START_DT' => 'Data d&#39;inici',
	'LBL_INFO_DUE_DT' => 'Data i hora de venciment',
	'LBL_INFO_DURATION' => 'Duració',
	'LBL_INFO_NAME' => 'Assumpte',
	'LBL_INFO_RELATED_TO' => 'Relatiu a',

	'LBL_NO_USER' => 'Cap resultat per al camp: Assignat a',
	'LBL_SUBJECT' => 'Assumpte',
	'LBL_DURATION' => 'Duració',
	'LBL_STATUS' => 'Estat',
	'LBL_DATE_TIME' => 'Data i hora',


	'LBL_SETTINGS_TITLE' => 'Configuració',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostra espais de temps en el dia i vistes de setmana:',
	'LBL_SETTINGS_TIME_STARTS'=>'Hora d&#39;inici:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Hora de finalització:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Mostra les trucades:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Mostra tasques:', 

	'LBL_SAVE_BUTTON' => 'Desa',
	'LBL_DELETE_BUTTON' => 'Eliminar',
	'LBL_APPLY_BUTTON' => 'Aplicar',
	'LBL_SEND_INVITES' => 'Enviar Invitacions',
	'LBL_CANCEL_BUTTON' => 'Cancel·la',
	'LBL_CLOSE_BUTTON' => 'Tancar',

	'LBL_GENERAL_TAB' => 'Detalls',
	'LBL_PARTICIPANTS_TAB' => 'Convidats',
	'LBL_REPEAT_TAB' => 'Reaparició',	
	
	'LBL_REPEAT_TYPE' => 'Repetir',
	'LBL_REPEAT_INTERVAL' => 'Cada',
	'LBL_REPEAT_END' => 'Fi',	
	'LBL_REPEAT_END_AFTER' => 'Desprès',
	'LBL_REPEAT_OCCURRENCES' => 'ocurrències',
	'LBL_REPEAT_END_BY' => 'Per',	
	'LBL_REPEAT_DOW' => 'En',	
	'LBL_REPEAT_UNTIL' => 'Repetiu fins que',
	'LBL_REPEAT_COUNT' => 'Nombre d&#39;aparicions',
	'LBL_RECURRING_LIMIT_ERROR' => 'La recurrència de $moduleTitle no es pot programar pel fet que excedeix el màxim permès de recurrència $limit.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edita totes les recurrències',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar totes les recurrències',

	'LBL_DATE_END_ERROR' => 'Data de finalització és abans de la data d&#39;inici',
	'ERR_YEAR_BETWEEN' => 'Disculpi, el calendari no pot treballar l&#39;any peticionat<br>L&#39;any ha d&#39;estar entre 1970 i 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: no definit per aquesta vista.',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "El recompte d'esdeveniments recurrents {0} ha excedit el límit",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} no és un esdeveniment recurrent",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} no és una recurrència principal",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} no està reconegut con a mòdul d'esdeveniment recurrent",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Sun",
			"Mon",
			"Tue",
			"Wed",
			"Thu",
			"Fri",
			"Sat",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Sunday",
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday",
		),
	'dom_cal_month'=>
		array(
			"",
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December",
		),
);