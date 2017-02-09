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
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Файлът с информация за импорт беше прочетен успешно',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'Импортираният запис е част от процес и не може да бъде редактиран, защото някои полета са заключени за редактиране от процеса.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Пропуснати записи поради възникнала грешка',
    'LBL_UPDATE_SUCCESSFULLY' => 'Записите създадени или актуализирани успешно',
    'LBL_SUCCESSFULLY_IMPORTED' => 'успешно създадени запис(а)',
    'LBL_STEP_4_TITLE' => 'Стъпка {0}: Импортиране на файл',
    'LBL_STEP_5_TITLE' => 'Стъпка {0}: Резултати от импортирането',
    'LBL_CUSTOM_ENCLOSURE' => 'Полета, разграничени със символ:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Грешка при публикуване на критериите. Налични са публикувани критерии с аналогично название.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Грешка при премахване на критериите, публикувани от друг потребител. Разполагате с критерии с аналогично название.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Импортирането не е настроено за даден тип модул',
    'LBL_IMPORT_TYPE' => 'Действие за изпълнение',
    'LBL_IMPORT_BUTTON' => 'Създаване на записи',
    'LBL_UPDATE_BUTTON' => 'Създаване и актуализиране на записи',
    'LBL_CREATE_BUTTON_HELP' => 'Използвайте тази опция, за да създадете нови записи в системата. Забележка: Редовете от файла за импорт, които дублират идентификатори на съществуващи записи в системата, няма да бъдат импортирани.',
    'LBL_UPDATE_BUTTON_HELP' => 'Изполвайте тази опция, за да актуализирате съществуващи  записи в системата. Данните от файла за импортиране ще бъдат отнасяни към съществуващите записи според техните идентификатори.',
    'LBL_NO_ID' => 'Задължително ID',
    'LBL_PRE_CHECK_SKIPPED' => 'Предварителната проверка е пропусната',
    'LBL_NOLOCALE_NEEDED' => 'Не е необходимо конвертиране на регионални настройки',
    'LBL_FIELD_NAME' => 'Име на полето',
    'LBL_VALUE' => 'Стойност',
    'LBL_ROW_NUMBER' => 'Номер на ред',
    'LBL_NONE' => 'няма',
    'LBL_REQUIRED_VALUE' => 'Липсва задължителна стойност',
    'LBL_ERROR_SYNC_USERS' => 'Невалидна стойност за синхронизиране с Outlook:',
    'LBL_ID_EXISTS_ALREADY' => 'ID вече съществува в тази таблица',
    'LBL_ASSIGNED_USER' => 'В случай че потребителят не съществува, използвайте текущия потребител',
    'LBL_SHOW_HIDDEN' => 'Показване на полета с проблем при импортирането',
    'LBL_UPDATE_RECORDS' => 'Актуализация на съществуващи записи (Не подлежи на отмяна)',
    'LBL_TEST'=> 'Тестване на импортирането (без запазване и промяна на данни)',
    'LBL_TRUNCATE_TABLE' => 'Изчистване на таблицата преди импортиране (изтриване на всички записи)',
    'LBL_RELATED_ACCOUNTS' => 'Да не се създават свързани записи',
    'LBL_NO_DATECHECK' => 'Без сверяване на дати (води до ускоряване на процеса, но с възможност за грешка при невалидни дати)',
    'LBL_NO_WORKFLOW' => 'Да не се извършват автоматизирани дейности по време на импортирането',
    'LBL_NO_EMAILS' => 'Да не се изпращат уведомления за присвоен запис по време на импорирането',
    'LBL_NO_PRECHECK' => 'Изходен форматен режим',
    'LBL_STRICT_CHECKS' => 'Стриктна проверка (със сверяване на адреси и телефонни номера)',
    'LBL_ERROR_SELECTING_RECORD' => 'Грешка при избиране на записи:',
    'LBL_ERROR_DELETING_RECORD' => 'Грешка при изтриване на записи:',
    'LBL_NOT_SET_UP' => 'Импортирането е невъзможно за този тип модул',
    'LBL_ARE_YOU_SURE' => 'Сигурни ли сте? Всички данни в този модул ще бъдат изтрити.',
    'LBL_NO_RECORD' => 'Не бяха намерени записи с такова ID за актуализиране',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Импортирането е невъзможно за този тип модул',
    'LBL_DEBUG_MODE' => 'Разреши режим на разработка',
    'LBL_ERROR_INVALID_ID' => 'Посоченото ID надхвърля символите валидни за полето (максимална дължина 36 символа)',
    'LBL_ERROR_INVALID_PHONE' => 'Невалиден телефонен номер',
    'LBL_ERROR_INVALID_NAME' => 'String надхвърля допустимите стойности за полето',
    'LBL_ERROR_INVALID_VARCHAR' => 'String надхвърля допустимите стойности за полето',
    'LBL_ERROR_INVALID_DATETIME' => 'Невалидна стойност за дата/час',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Невалидна стойност за дата/час',
    'LBL_ERROR_INVALID_INT' => 'Невалидна стойност за цели числа',
    'LBL_ERROR_INVALID_NUM' => 'Невалидна стойност за числа',
    'LBL_ERROR_INVALID_TIME' => 'Невалидна стойност за час',
    'LBL_ERROR_INVALID_EMAIL'=>'Невалиден адрес на електронна поща',
    'LBL_ERROR_INVALID_BOOL'=>'Невалидна стойност (следва да бъде 1 или 0)',
    'LBL_ERROR_INVALID_DATE'=>'Невалидна стойност за дата',
    'LBL_ERROR_INVALID_USER'=>'Невалидно потребителско име или ID',
    'LBL_ERROR_INVALID_TEAM' => 'Невалидно име на екип или ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Невалидно име на организация или ID',
    'LBL_ERROR_INVALID_RELATE' => 'Невалидно релационно поле',
    'LBL_ERROR_INVALID_CURRENCY' => 'Невалидна стойност на валута',
    'LBL_ERROR_INVALID_FLOAT' => 'Невалидно дробно число',
    'LBL_ERROR_NOT_IN_ENUM' => 'Стойността не е в списъка с падащо меню. Налични стойности са:',
    'LBL_ERROR_ENUM_EMPTY' => 'Value not in dropDown list. dropDown list is empty',
    'LBL_NOT_MULTIENUM' => 'Не е елемент от списък на много значения',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Импортирането е невъзможно за този тип модул',
    'LBL_IMPORT_MODULE_NO_USERS' => 'Внимание: Не са намерени дефинирани потребители за тази система.    При импортиране без добавяне на нов потребител, всички записи ще бъдат присвоени към Администратор.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Грешка при публикуване на критериите. Налични са публикувани критерии с аналогично название.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Грешка при премахване на критериите, публикувани от друг потребител. Разполагате с критерии с аналогично название.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Директорията',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'не съществува или е недостъпна за запис',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Неправилно зареден файл. Възможно е настройките на &#39;upload_max_filesize&#39; във файл php.ini да са с малка стойност',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Файлът е твърде голям. Max:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'байта. Променете $sugar_config[&#39;upload_maxsize&#39;] във файл config.php',
    'LBL_MODULE_NAME' => 'Импортиране',
    'LBL_MODULE_NAME_SINGULAR' => 'Импорт',
    'LBL_TRY_AGAIN' => 'Нов импорт',
    'LBL_START_OVER' => 'Започни от начало',
    'LBL_ERROR' => 'Грешка:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Импортираният фай съдържа  {0} реда. Оптималният брой редове е {1}. По-големият брой редове може да намали скоростта на процеса на импортиране. Натиснете ОК, за да продължите с импортирането. Натиснете Откажи, за да модифицирате или качите отново файл за импорт.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Не можете да импортирате потребителя на системния администратор',
    'ERR_REPORT_LOOP' => 'Намерено е зацикляне в йерархичната структура. Потребителят не може да докладва сам на себе си, както и началниците не могат да му се отчитат.',
    'ERR_MULTIPLE' => 'Няколко колони са дефинирани с еднакво име на поле.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Пропуснати задължителни полета:',
    'ERR_MISSING_MAP_NAME' => 'Липса на заглавие за критериите',
    'ERR_SELECT_FULL_NAME' => 'Не можете да избирате Пълно име, когато Име и Фамилия са вече избрани.',
    'ERR_SELECT_FILE' => 'Избиране на файл за зареждане.',
    'LBL_SELECT_FILE' => 'Избиране на файл:',
    'LBL_CUSTOM' => 'Собствен',
    'LBL_CUSTOM_CSV' => 'CSV файл с разделител запетайка, зададен от потребителя',
    'LBL_CSV' => 'CSV файл с разделител запетайка',
    'LBL_EXTERNAL_SOURCE' => 'външно приложение или услуга',
    'LBL_TAB' => 'TSV файл с разделител табулатор',
    'LBL_CUSTOM_DELIMITED' => 'Файл с разделител, зададен от потребителя',
    'LBL_CUSTOM_DELIMITER' => 'Полета, с разделител:',
    'LBL_FILE_OPTIONS' => 'Опции на файла',
    'LBL_CUSTOM_TAB' => 'CSV файл с разделител табулатор, зададен от потребителя',
    'LBL_DONT_MAP' => '-- Да не се изобразява това поле --',
    'LBL_STEP_MODULE' => 'В кой модул искате да импортирате данни?',
    'LBL_STEP_1_TITLE' => 'Стъпка 1: Избор на източник на данните',
    'LBL_CONFIRM_TITLE' => 'Стъпка {0}: Параметри на файла за импортиране',
    'LBL_CONFIRM_EXT_TITLE' => 'Стъпка {0}: Потвърди параметрите на външния източник на данни',
    'LBL_WHAT_IS' => 'Кой е източникът на данни?',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Автоматичното отнасяне на данни от Microsoft Outlook към полета от модула в системата разчита разделителят във файла за импортиране да бъде запетайка. В случай че е използван друг разделител отнасянето няма да бъде коректно.',
    'LBL_ACT' => 'Действай!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Моите съхранени критерии за импортиране:',
    'LBL_PUBLISH' => 'Публикуване',
    'LBL_DELETE' => 'Изтриване',
    'LBL_PUBLISHED_SOURCES' => 'Публикувани източници:',
    'LBL_UNPUBLISH' => 'Отмяна на публикуване',
    'LBL_NEXT' => 'Следваща стъпка >',
    'LBL_BACK' => '< Предишна стъпка',
    'LBL_STEP_2_TITLE' => 'Стъпка {0}: Избор на файл за импортиране',
    'LBL_HAS_HEADER' => 'Заглавен ред:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Бележки:',
    'LBL_NOW_CHOOSE' => 'Сега изберете този файл за импортиране:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 and 2000 могат да експортират данни в <b>Comma Separated Values</b> формат, който може да бъде използван за импортиране на данни в тази система. За експортиране на данни от Outlook, следвайте приведените по-долу стъпки:',
    'LBL_OUTLOOK_NUM_1' => 'Зареди <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Изберете меню <b>File</b>, след което опцията <b>Import and Export ...</b>',
    'LBL_OUTLOOK_NUM_3' => 'Изберете <b>Export to a file</b> и натиснете Next',
    'LBL_OUTLOOK_NUM_4' => 'Изберете <b>Comma Separated Values (Windows)</b> и натиснете <b>Next</b>.<br>  Бележка: Възможно е да бъдете уведомени за необходимостта от инсталация на компоненти на експортиране',
    'LBL_OUTLOOK_NUM_5' => 'Изберете папка <b>Контакти</b> и натиснете <b>Next</b>. Можете да избирате различни папки, ако Вашите контакти са разположени в повече от една',
    'LBL_OUTLOOK_NUM_6' => 'Изберете име на файла и натиснете <b>Next</b>',
    'LBL_OUTLOOK_NUM_7' => 'Натиснете <b>Финализиране</b>',
    'LBL_IMPORT_SF_TITLE' => 'Система Salesforce.com може да експортира данни в <b>Comma Separated Values</b> формат, който може да бъде използван за импортиране на данни в тази система. За експортиране на данни от Salesforce.com, следвайте приведените по-долу стъпки:',
    'LBL_SF_NUM_1' => 'Стартирайте браузъра си и отидете на http://www.salesforce.com, след което влезте с адреса си и парола в системата',
    'LBL_SF_NUM_2' => 'Натиснете <b>Справки</b> в менюто горе',
    'LBL_SF_NUM_3' => '<b>За експортиране на Accounts:</b> използвайте връзката <b>Active Accounts</b> <br><b>За експортиране на контакти:</b> натиснете върху <b>Mailing List</b>',
    'LBL_SF_NUM_4' => 'On <b>Стъпка 1: Използвайте предпочитания от вас тип доклад</b>, изберете <b>Tabular Report</b>натиснете <b>Next</b>',
    'LBL_SF_NUM_5' => 'On <b>Стъпка 2: Изберете колонките на доклада</b>, изберете колонките, които искате да експортирате и натиснете <b>Next</b>',
    'LBL_SF_NUM_6' => 'On <b>Стъпка 3: Изберете информацията за обобщаване</b>, натиснете <b>Next</b>',
    'LBL_SF_NUM_7' => 'On <b>Стъпка 4: Подредете колонките на доклада</b>, натиснете <b>Next</b>',
    'LBL_SF_NUM_8' => 'On <b>Стъпка 5: Изберете Вашите критерии за доклада</b>, под <b>Start Date</b>, изберете дата, достатъчно назад във времето, така че да обхване всички Ваши Accounts. Можете също така да експортирате подмножеството на Вашите Accounts като използвате разширени критерии. След приключване натиснете <b>Run Report</b>',
    'LBL_SF_NUM_9' => 'Ще бъде генериран доклад, с последващо изписване на страницата <b>Report Generation Status: Complete.</b> След това натиснете <b>Export to Excel</b>',
    'LBL_SF_NUM_10' => 'В <b>Export Report:</b>, за <b>Export File Format:</b>, изберете <b>Comma Delimited .csv</b>. Натиснете <b>Export</b>.',
    'LBL_SF_NUM_11' => 'Появилият се диалогов прозорец ще Ви позволи да съхраните експортния файл на вашия компютър.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! can export data in the <b>Comma Separated Values</b> format, which can be used to import data into the system. To export your data from Act!, следвайте приведените по-долу стъпки:',
    'LBL_ACT_NUM_1' => 'Зареди <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Изберете <b>File</b> menu, the <b>Data Exchange</b> menu option, then the <b>Export...</b> menu option',
    'LBL_ACT_NUM_3' => 'Изберете видът на файл <b>Text-Delimited</b>',
    'LBL_ACT_NUM_4' => 'Изберете име на файл и път за експортиране на данните и натиснете <b>Next</b>',
    'LBL_ACT_NUM_5' => 'Изберете <b>Contacts records only</b>',
    'LBL_ACT_NUM_6' => 'Натиснете бутон <b>Опции...</b>',
    'LBL_ACT_NUM_7' => 'Изберете <b>Запетайка</b> за разделител на полета',
    'LBL_ACT_NUM_8' => 'Check the <b>Yes, export field names</b> checkbox и натиснете <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Натиснете <b>Продължи</b>',
    'LBL_ACT_NUM_10' => 'Изберете <b>Всички записи</b> и натиснете <b>Финализирай</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Много приложения могат да Ви дадат възможност за експортиране на данни във формат <b>Comma Delimited text file (.csv)</b>. За голяма част от приложенията важат следните общи стъпки:',
    'LBL_CUSTOM_NUM_1' => 'Стартиране на приложението и зареждане на файла с данни',
    'LBL_CUSTOM_NUM_2' => 'Избиране на опции <b>Запазване като...</b> или <b>Експортиране...</b>',
    'LBL_CUSTOM_NUM_3' => 'Запазване на файла в <b>CSV</b> или <b>Comma Separated Values</b> формат',
    'LBL_IMPORT_TAB_TITLE' => 'Много приложения могат да Ви дадат възможност за експортиране на данни във формат <b>Tab Delimited text file (.tsv или .tab)</b>. За голяма част от приложенията важат следните общи стъпки:',
    'LBL_TAB_NUM_1' => 'Стартиране на приложението и зареждане на файла с данни',
    'LBL_TAB_NUM_2' => 'Избиране на опции <b>Запазване като...</b> или <b>Експортиране...</b>',
    'LBL_TAB_NUM_3' => 'Запазване на файла в <b>TSV</b> или <b>Tab Separated Values</b> формат',
    'LBL_STEP_3_TITLE' => 'Стъпка {0}: Отнасяне на данните към полета на модула',
    'LBL_STEP_DUP_TITLE' => 'Стъпка {0}: Проверка за дублирани записи',
    'LBL_SELECT_FIELDS_TO_MAP' => 'От списъка долу изберете тези полета от файла, които да се импортират в системата. След приключване натиснете <b>Импортирай</b>:',
    'LBL_DATABASE_FIELD' => 'Поле на модула',
    'LBL_HEADER_ROW' => 'Заглавен ред',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Маркиракте в случай че първият ред в импортирания файл съдържа наименования на отделните колони.',
    'LBL_ROW' => 'Ред',
    'LBL_SAVE_AS_CUSTOM' => 'Запазете като собствени критерии за импортиране:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Заглавие на потребителските критерии за импортиране:',
    'LBL_CONTACTS_NOTE_1' => 'Трябва да са въведени или Пълно име или Фамилия.',
    'LBL_CONTACTS_NOTE_2' => 'Ако бъде въведено Пълно име, то Име и Фамилия ще бъдат игнорирани.',
    'LBL_CONTACTS_NOTE_3' => 'Ако бъде въведено Пълно име, то данните вътре ще бъдат разделени на Име и Фамилия при вкарването в базата данни.',
    'LBL_CONTACTS_NOTE_4' => 'Полетата Улица 2 и Улица 3 ще бъдат обединени с основните адресни полета при вкарването в базата данни.',
    'LBL_ACCOUNTS_NOTE_1' => 'Полетата Улица 2 и Улица 3 ще бъдат обединени с основните адресни полета при вкарването в базата данни.',
    'LBL_REQUIRED_NOTE' => 'Задължителни полета:',
    'LBL_IMPORT_NOW' => 'Импортирай',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Не може да бъде отворен импортния файл',
    'LBL_NOT_SAME_NUMBER' => 'Във Вашия файл няма същия брой полета на ред',
    'LBL_NO_LINES' => 'Не бяха открити редове във вашия импортен файл',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Този импортен файл е бил вече обработен или не съществува',
    'LBL_SUCCESS' => 'Успешна операция:',
	'LBL_FAILURE' => 'Импортът неуспешен:',
    'LBL_SUCCESSFULLY' => 'успешно импортирани записа',
    'LBL_LAST_IMPORT_UNDONE' => 'Вашето последно импортиране беше отменено',
    'LBL_NO_IMPORT_TO_UNDO' => 'Няма импортиране, което да бъде отменено.',
    'LBL_FAIL' => 'Неуспешна операция:',
    'LBL_RECORDS_SKIPPED' => 'записа бяха пропуснати поради липса на едно или няколко задължителни полета',
    'LBL_IDS_EXISTED_OR_LONGER' => 'записа бяха пропуснати, защото ID-тата или съществуват или са по-дълги от 36 знака',
    'LBL_RESULTS' => 'Резултати:',
    'LBL_CREATED_TAB' => 'Създадени записи',
    'LBL_DUPLICATE_TAB' => 'Дублирани записи',
    'LBL_ERROR_TAB' => 'Грешки',
    'LBL_IMPORT_MORE' => 'Ново импортиране',
    'LBL_FINISHED' => 'Приключено',
    'LBL_UNDO_LAST_IMPORT' => 'Отмяна на последното импортиране',
    'LBL_LAST_IMPORTED'=>'Създадено',
    'ERR_MULTIPLE_PARENTS' => 'Можете да определите само едно родителско ID',
    'LBL_DUPLICATES' => 'Намерени дублирани записи',
    'LNK_DUPLICATE_LIST' => 'Зареждане на списък с дублирани записи',
    'LNK_ERROR_LIST' => 'Изтегли списък с възникналите грешки',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Изтегли списък на редовете, които не са импортирани',
    'LBL_UNIQUE_INDEX' => 'Изберете индекс за сравнение при дублиране',
    'LBL_VERIFY_DUPS' => 'Проверка за дублиране на записи в маркираните индекси',
    'LBL_INDEX_USED' => 'Проверявани полета:',
    'LBL_INDEX_NOT_USED' => 'Налични полета:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Зареждането е неуспешно.  Проверете файловите права за достъп в кеш-паметта за инсталацията на Sugar.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Уникален ID номер',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Име или ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Телефонен номер',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Име на екипа или ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Произволен текст',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Произволен текст',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Произволен текст',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Час',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Дата',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Дата/Час',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Потребителско име или ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; или &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Списък',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Електронна поща',
    'LBL_IMPORT_FIELDDEF_INT' => 'Цифра (No Decimal)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Цифра (No Decimal)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Цифра (No Decimal)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Цифра (Decimal Allowed)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Цифра (Decimal Allowed)',
    'LBL_DATE_FORMAT' => 'Формат на датата:',
    'LBL_TIME_FORMAT' => 'Формат на часа:',
    'LBL_TIMEZONE' => 'Времева зона:',
    'LBL_ADD_ROW' => 'Добавяне на поле',
    'LBL_REMOVE_ROW' => 'Изтриване на поле',
    'LBL_DEFAULT_VALUE' => 'Стойност по подразбиране',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Покажи параметрите на файла за импортиране',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Скрий параметрите на файла за импортиране',
    'LBL_SHOW_NOTES' => 'Покажи бележките',
    'LBL_HIDE_NOTES' => 'Скрий бележките',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Покажи колоните за преглед',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Скрий колоните за преглед',
    'LBL_SAVE_MAPPING_AS' => 'За да запазите текущите настройки за импортиране въведете име:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Кавичка (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Кавички (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'няма',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Алтернативен телефон:',
    'LBL_IMPORT_COMPLETE' => 'Край',
    'LBL_IMPORT_COMPLETED' => 'Импортът е завършен',
    'LBL_IMPORT_ERROR' => 'Открити грешки при импортиране',
    'LBL_IMPORT_RECORDS' => 'Импортиране на записи',
    'LBL_IMPORT_RECORDS_OF' => 'от',
    'LBL_IMPORT_RECORDS_TO' => '-',
    'LBL_CURRENCY' => 'Валута',
    'LBL_SYSTEM_SIG_DIGITS' => 'Знаци след десетичнатяа запетая',
    'LBL_NUMBER_GROUPING_SEP' => 'Разделител за хилядите',
    'LBL_DECIMAL_SEP' => 'Десетичен знак',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Формат на имена',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Пример',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"о" Обръщение, "и" Име, "ф" Фамилия</i>',
    'LBL_CHARSET' => 'Знаков набор',
    'LBL_MY_SAVED_HELP' => 'Съхранените критерии за импортиране включват по-рано използвани правила за импортиране на данни, както и набор от полета на модула, в които се записват данните от импортирания файл.<br><br>Натиснете <b>Отмяна на публикуване</b> за отмяна на достъп до критериите от потребителите.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Използвайте тази опция, за да приложите към настоящия импорт на съхранени предварително настройки за импортиране, в това число параметри на файла за импортиране, отнасяне на данните към полета в системата и проверки за дублирани записи.<br><br>Натиснете <b>Публикувай</b>, за да направите дефинираното отнасяне на данни към полета в системата достъпно за други потребители.<br>Натиснете <b>Скрий</b>, за да скриете дефинираното отнасяне на данни към полета в системата от други потребители.<br>Натиснете <b>Изтрий</b>, за да изтриете дефинираното отнасяне на данни към полета в системата.',
    'LBL_MY_PUBLISHED_HELP' => 'Публикуваните критерии за импортиране включват по-рано използвани правила за импортиране на данни, както и набор от полета на модула, в които се записват данните от импортирания файл.',
    'LBL_ENCLOSURE_HELP' => '<p> <b>Ограничаващият символ</b> се използва за разграничаване на съдържанието на полетата, включително и на символи, използвани за разделители.<br><br>Пример: При използван символ за разделител запетайка (,) и за разграничител кавички ("),<br><b>"Своге, Софийска област"</b> се импортира в едно поле и се визуализира като <b>Своге, Софийска област</b>.<br>При липса на разграничители, или при използване на различни символи за такива,<br><b>"Своге, Софийска област"</b> се импортира в две прилежащи полета като <b>"Своге</b> и <b>Софийска област"</b>.<br><br>Внимание: Възможно е импортирания файл да не съдържа символи за разграничители.<br> За създадените в Excel файлове, с разделители запетайка или табулатор, разграничаващият символ по подразбиране е кавички.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Изберете тази опция, за да изберете и заредите табличен файл, който съдържа данните, които искате да импортирате. Примери: файл с разширение .csv или файл, експортиран от Microsoft Outlook.',
    'LBL_DELIMITER_TAB_HELP' => 'Изберете тази опция, в случай че разделителя за полетата в импортирания файл е <b>табулатор</b>, или разширението на файла е .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Изберете тази опция, в случай че разделителя за полетата в импортирания файл не е нито запетайка, нито табулатор, и въведете знака в прилежащото поле.',
    'LBL_DATABASE_FIELD_HELP' => 'Изберете полета от списъка с всички налични полета за този модул.',
    'LBL_HEADER_ROW_HELP' => 'В първия ред на импортирания файл се съдържат заглавия на полетата.',
    'LBL_DEFAULT_VALUE_HELP' => 'Определете стойност по подразбиране за полета в създадения или актуализирания запис, в случай че полетата в импортирания файл не съдържат данни.',
    'LBL_ROW_HELP' => 'Това са данни от първия незаглавен ред на импортирания файл.',
    'LBL_SAVE_MAPPING_HELP' => 'Въведете заглавие за съхраняване на критериите за импортиране, включително набора на полетата и индексите, използвани за двойната проверка. Съхранените критерии ще могат да бъдат избрани при следващи импортирания.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Задайте параметри на файла с цел безпроблемното му импортиране.<br>  Зададените параметри няма да влязат в конфликт с потребителските Ви настройки. Т.е. при създаване<br> или актуализиране на вече съществуващи записи ще се отчитат настройките зададени в раздел Персонални настройки.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Изберете полета в импортирания файл за проверка при дублиране на записи. При дублиране на данни в маркираните полета с полетата на вече съществуващ файл, няма да бъдат създадени нови записи за редове, съдържащи дублирани данни. Редовете, включващи полета с дублирани данни ще бъдат представени в отчет за резултатите от импортирането',
    'LBL_IMPORT_STARTED' => 'Импортирането започнато:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Настройки на импортирания файл',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Този запис не може да бъде актуализиран поради казус с правата за достъп',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Сигурни ли сте, че искате да изтриете дефинираното съоветсввие между полетата?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Файлът за импортиране е създаден чрез експорт от някоя от следните системи.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Изберете евентуален източник на импортираните данни, за да бъдат автоматично приложени правила за отнасяне на данните от файла за импортиране с полетата на модула в системата (следваща стъпка).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Използвайте тази опция, за да импортирате данни от външно приложение или услуга като Gmail например.',
    'LBL_EXAMPLE_FILE' => 'Изтегли шаблон на файла за импорт',
    'LBL_CONFIRM_IMPORT' => 'Избрали сте да актуализирате записи по време на процеса на импортиране. Направени промени в съществуващи записи не могат да бъдат отменени в последствие. Новите записи създадени в процеса на импортиране могат да бъдат изтрити, в случай че пожелаете това. Натиснете Откажи, за да изберете опцията за създаване само на нови записи или ОК, за да продължите.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Предупреждение: Вече сте задали отнасяне на данните от файла за импортиране към полетата на модула. Желаете ли да продължите?',
    'LBL_EXTERNAL_FIELD' => 'Външно поле',
    'LBL_SAMPLE_URL_HELP' => 'Изтеглете примерен файл за импортиране, който съдържа заглавен ред с описание на отделните полета в модула. Файлът може да се използва като шаблон, по който да създадете нов файл с данните, които желаете да бъдат импортирани.',
    'LBL_AUTO_DETECT_ERROR' => 'Не може да бъде определен използваният разделител във файла за импортиране. Моля потвърдете зададените настройки в Параметри на файла за импортиране.',
    'LBL_MIME_TYPE_ERROR_1' => 'Избраният файл не съдържа текст, отделен с конкретен разделител. Моля провере типа на файла. Препоръчваме използването на раделител запетайка (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'За да продължите с импорта на избрания файл натиснете ОК. Натиснете Нов импорт, за да изберете нов файл.',
    'LBL_FIELD_DELIMETED_HELP' => 'Разделителят на полета съдържа знака, използван за разделяне на колоните във файла.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Изберете файл, данните в който са отделени с конкретен разделител като запетайка или табулатор. Препоръчват се файлове с разширение .csv',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Адаптерът на източника не може да бъде изведен, моля опитайте отново по-късно.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Външният канал не може да бъде изведен, моля опитайте отново по-късно.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Няма права за писане в директорията за кеширане на импортирана информация.',
    'LBL_ADD_FIELD_HELP' => 'Използвайте опцията, за да добавите стойност на поле във всички записи в системата - новосъздадени или актуализирани. Изберете поле, след което въведете стойност или изберете такава от колоната Стойност по подразбиране.',
    'LBL_MISSING_HEADER_ROW' => 'Не е идентифицират заглавен ред',
    'LBL_CANCEL' => 'Отмени',
    'LBL_SELECT_DS_INSTRUCTION' => 'Готови ли сте да започнете процеса на импортиране? Изберете от къде желаете да импортирате данни.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Изберете съществуващ файл с данни, които желате да импортирате или изтеглете шаблон, по който да създадете нов файл.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Така изглеждат първите няколко реда от данните в съответствие с идентифицираните параметри на файла за импортиране. В случай че е идентифициран заглавен ред, той е визуализиран в най-горния ред на таблицата. Разгледайте параметрите на файла за импортиране, за да нанесете корекции. Промяната на параметри на файла ще актуализира визуализираните данни в таблицата.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Таблицата по-долу съдържа всички полета от модула, към които могат да бъдат отнесени данни от файла за импортиране. В случай че файлът за импортиране съдържа заглавен ред, колоните от файла ще бъдат автоматично отнесени към полетата в модула с кореспондиращи имена. Проверете дали отнасянето на данните е коректно и нанесете корекции, в случай че е необходимо. Колона 1 визуализира данните от файла за импортиране, за да бъде улеснена проверката. Уверете се, че всички задължителни полета в модула ще бъдат попълнени (задължителните полета са маркирани със звездичка).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'За да избегнете създаването на дублирани записи изберете полета от модула, по които да се извърши проверка в базата данни по време на процеса на импортиране. Стойностите на избраните полета в съществуващите записи ще бъдат проверени за съвпадение с импортираните данни. При откриване на съвпадение редовете от файла за импортиране, които съдържат дублираните данни ще бъдат визуализирани на следващата страница. Тогава ще имате възможност да изберете кои от тези редове да импортирате.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Вход',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Излизане',
    'LBL_DUP_HELP' => 'Това са редовете от файла, които не са импортирани защото съдържат стойности, съвпадащи със съществуващи записи в системата. Дублираните данни са визуализирани в удебелен шрифт. За да извършите ново импортиране на тези редове изтеглете списъка, коригирайте го и натиснете <b>Ново импортиране</b>',
    'LBL_DESELECT' => 'размаркирай',
    'LBL_SUMMARY' => 'Резюме',
    'LBL_OK' => 'ОК',
    'LBL_ERROR_HELP' => 'Това са редовете от файла, които не са импортирани поради възникнали грешки. За да извършите ново импортиране на тези редове изтеглете списъка, коригирайте го и натиснете <b>Ново импортиране</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'Таблицата по-долу съдържа данни от файла за импортиране и как те се отнасят към полетата на модула в системата. Проверете дали отнасянето на данните е коректно и нанесете корекции, в случай че е необходимо. Уверете се, че всички задължителни полета в модула ще бъдат попълнени (задължителните полета са маркирани със звездичка).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Ще бъде направен опит за импортиране на контакти от всички групи в Google Contacts.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Потребителските имена на новосъздадените потребители ще бъдат трите имена на Google контакта по подразбиране. Потребителските имена могат да бъдат променяни след създаването на записите на потребителя.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Щракнете върху <b>Импортирай сега</b>, за да започнете импортирането. Записи ще се създават само за въведени данни, които съдържат фамилните имена. Няма да се създават записи за данни, идентифицирани като дублиращи се на базата на имената и/или имейл адресите, съответстващи на съществуващите записи.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Тази колона показва полетата във външния източник, съдържащи данни, които ще бъдат използвани за създаване на нови записи.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Посочете стойност, която да бъде използвана за полето в създадения запис, ако полето във външния източник не съдържа данни.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'За да присвоите новите записи на потребител, различен от Вас самия, използвайте колоната за Стойност по подразбиране, за да изберете друг потребител.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'За да присвоите новите записи на екипи, различни от Вашите екипи по подразбиране, използвайте колоната за Стойност по подразбиране, за да изберете други екипи.',
    'LBL_SIGN_IN_HELP' => 'За да активирате тази услуга, моля влезте от табулатора Външни профили в рамките на Вашата страница за потребителски настройки.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Избраният модул не поддържа управление на адреси за електронна поща.",
);