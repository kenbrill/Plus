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
	'LBL_MODULE_NAME' => 'Calendario',
	'LBL_MODULE_NAME_SINGULAR' => 'Calendario',
	'LBL_MODULE_TITLE' => 'Calendario',
	'LNK_NEW_CALL' => 'Programar Llamada',
	'LNK_NEW_MEETING' => 'Programar Reunión',
	'LNK_NEW_APPOINTMENT' => 'Crear Cita',
	'LNK_NEW_TASK' => 'Crear Tarea',
	'LNK_CALL_LIST' => 'Ver Llamadas',
	'LNK_MEETING_LIST' => 'Ver Reuniones',
	'LNK_TASK_LIST' => 'Ver Tareas',
	'LNK_VIEW_CALENDAR' => 'Hoy',
	'LNK_IMPORT_CALLS' => 'Importar Llamadas',
	'LNK_IMPORT_MEETINGS' => 'Importar Reuniones',
	'LNK_IMPORT_TASKS' => 'Importar Tareas',
	'LBL_MONTH' => 'Mes',
	'LBL_DAY' => 'Día',
	'LBL_YEAR' => 'Año',
	'LBL_WEEK' => 'Semana',
	'LBL_PREVIOUS_MONTH' => 'Mes Anterior',
	'LBL_PREVIOUS_DAY' => 'Día Anterior',
	'LBL_PREVIOUS_YEAR' => 'Año Anterior',
	'LBL_PREVIOUS_WEEK' => 'Semana Anterior',
	'LBL_NEXT_MONTH' => 'Mes Siguiente',
	'LBL_NEXT_DAY' => 'Día Siguiente',
	'LBL_NEXT_YEAR' => 'Año Siguiente',
	'LBL_NEXT_WEEK' => 'Semana Siguiente',
	'LBL_AM' => 'a.m.',
	'LBL_PM' => 'a.m.',
	'LBL_SCHEDULED' => 'Planificado',
	'LBL_BUSY' => 'Ocupado',
	'LBL_CONFLICT' => 'Conflicto',
	'LBL_USER_CALENDARS' => 'Calendarios de Usuario',
	'LBL_SHARED' => 'Compartido',
	'LBL_PREVIOUS_SHARED' => 'Anterior',
	'LBL_NEXT_SHARED' => 'Siguiente',
	'LBL_SHARED_CAL_TITLE' => 'Calendario Compartido',
	'LBL_USERS' => 'Usuario',
	'LBL_REFRESH' => 'Actualizar',
	'LBL_EDIT_USERLIST' => 'Lista de Usuarios',
	'LBL_SELECT_USERS' => 'Seleccione usuarios para la visualización de calendario',
	'LBL_FILTER_BY_TEAM' => 'Filtrado de lista de usuarios por equipo:',
	'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
	'LBL_DATE' => 'Fecha y Hora de Inicio',  
	'LBL_CREATE_MEETING' => 'Programar Reunión',
	'LBL_CREATE_CALL' => 'Registrar Llamada',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Sí',
	'LBL_NO' => 'No',
	'LBL_SETTINGS' => 'Configuración',
	'LBL_CREATE_NEW_RECORD' => 'Crear Actividad',
    'LBL_CREATE_NEW_CALL' => 'Crear llamada',
    'LBL_CREATING_NEW_ACTIVITY' => 'Está creando una nueva reunión. ¿Quiere <a href="javascript:void(0);" data-action="create-task">Crear una tarea</a> o <a href="javascript:void(0);" data-action="schedule-call">Programar una llamada</a>?',
	'LBL_LOADING' => 'Cargando ...',
	'LBL_SAVING' => 'Guardando...',
	'LBL_SENDING_INVITES' => 'Guardando y Enviando invitaciones .....',
	'LBL_CONFIRM_REMOVE' => '¿Está seguro de que desea eliminar el registro?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '¿Está seguro de que desea eliminar todos los registros recurrentes?',
	'LBL_EDIT_RECORD' => 'Editar Actividad',
    'LBL_EDIT_CALL' => 'Editar llamada',
	'LBL_ERROR_SAVING' => 'Error al guardar',
    'LBL_NO_ACCESS' => 'Usted no tiene acceso',
	'LBL_ERROR_LOADING' => 'Error al cargar',
	'LBL_GOTO_DATE' => 'Ir a Fecha',
	'NOTICE_DURATION_TIME' => 'El tiempo de duración debe ser mayor que 0',
	'LBL_STYLE_BASIC' => 'Básico',
	'LBL_STYLE_ADVANCED' => 'Avanzado',

	'LBL_INFO_TITLE' => 'Detalles Adicionales',
	'LBL_INFO_DESC' => 'Descripción',
	'LBL_INFO_START_DT' => 'Fecha de inicio',
	'LBL_INFO_DUE_DT' => 'Fecha de fin',
	'LBL_INFO_DURATION' => 'Duración:',
	'LBL_INFO_NAME' => 'Asunto',
	'LBL_INFO_RELATED_TO' => 'Relacionado con',

	'LBL_NO_USER' => 'Ningún resultado para el campo: Asignado a',
	'LBL_SUBJECT' => 'Asunto',
	'LBL_DURATION' => 'Duración:',
	'LBL_STATUS' => 'Estado',
	'LBL_DATE_TIME' => 'Fecha y hora',


	'LBL_SETTINGS_TITLE' => 'Configuración',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostrar espacios de tiempo en vistas de día y semana:',
	'LBL_SETTINGS_TIME_STARTS'=>'Hora inicio:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Hora fin:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Ver llamadas:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Ver tareas:', 

	'LBL_SAVE_BUTTON' => 'Guardar',
	'LBL_DELETE_BUTTON' => 'Eliminar',
	'LBL_APPLY_BUTTON' => 'Aplicar',
	'LBL_SEND_INVITES' => 'Guardar y Enviar Invitaciones',
	'LBL_CANCEL_BUTTON' => 'Cancelar',
	'LBL_CLOSE_BUTTON' => 'Cerrar:',

	'LBL_GENERAL_TAB' => 'Detalles',
	'LBL_PARTICIPANTS_TAB' => 'Asistentes',
	'LBL_REPEAT_TAB' => 'Repetición',	
	
	'LBL_REPEAT_TYPE' => 'Repetir',
	'LBL_REPEAT_INTERVAL' => 'Intervalo',
	'LBL_REPEAT_END' => 'Fin',	
	'LBL_REPEAT_END_AFTER' => 'Después de',
	'LBL_REPEAT_OCCURRENCES' => 'Ocurrencias',
	'LBL_REPEAT_END_BY' => 'Por',	
	'LBL_REPEAT_DOW' => 'En',	
	'LBL_REPEAT_UNTIL' => 'Repetir Hasta',
	'LBL_REPEAT_COUNT' => 'Número de ocurrencias',
	'LBL_RECURRING_LIMIT_ERROR' => 'Este $moduleTitle recurrente no se puede programar debido a que excede el máximo de $límite recurrencias permitidas.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas las recurrencias',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar todas las recurrencias',

	'LBL_DATE_END_ERROR' => 'La fecha de finalización es antes que la fecha de inicio',
	'ERR_YEAR_BETWEEN' => 'Disculpe, el calendario no puede gestionar el año que ha solicitado<br />Debe ser entre 1970 y 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: no definido en esta vista',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "El recuento del evento {0} recurrente ha superado el límite",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} no es un evento recurrente",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} no es una recurrencia principal",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} no está reconocido como módulo de evento recurrente",

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