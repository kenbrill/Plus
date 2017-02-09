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
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Инсталирани са следните актуализации:',
	'DESC_MODULES_QUEUED'						=> 'Следните актуализации са готови за инсталация:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Групата не може да бъде определена',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Отговорникът не може да бъде определен',
	'ERR_UW_CONFIG_WRITE'						=> 'Грешка при опита за актуализация на файла config.php с информация за новата версия.',
	'ERR_UW_CONFIG'								=> 'Моля направате файла config.php достъпен за редактиране и презаредете страницата.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Няма права за модифициране на директорията',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Файлът не е копиран.',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem removing package',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Файлът не може да бъде прочетен.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Файлът не може да преместен или записан в',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade Flavor:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM System Flavor:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'Фахлът ./upgradeWizard.log не може да бъде създаден или редактиран.  Моля коригирайте правата на достъп до директорията на SugarCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload set to a value higher than 1. 
<br/>Please change this in your php.ini and restart the web server.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM изисква версия на MySQL 4.1.2 или по-висока.  Открита версия:',
	'ERR_UW_OCI8_VERSION'				        => 'Инсталираната версия на Oracle не се поддържа от Sugar. Трябва да инсталирате съвместима версия на базата данни. Моля консултирайте се с написаното в Release Notes относно поддържаните версии на Oracle. Текущата версия е:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Моля, изберете файл и опитайте отново!',
	'ERR_UW_NO_FILES'							=> 'Възникна грешка. Не бяха открити файлове за проверка. An error occured, no files were found to check.',
	'ERR_UW_NO_MANIFEST'						=> 'Не бе открит файла manifest.php в зареждания zip файл. Процесът не може да продължи.',
	'ERR_UW_NO_VIEW'							=> 'Посочен е невалиден изглед.',
	'ERR_UW_NO_VIEW2'							=> 'Изгледът не е дефиниран. Моля отидете в секция Аднимистрация, за да дистъпите тази страница.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Невалиден файл.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Не може да бъде създадена директория за временно съхранение на файловете. Проверете зададените права на достъп.',
	'ERR_UW_ONLY_PATCHES'						=> 'Можете да качвате единствено актуализации в текущата страница.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Открити са грешки по време на предварителната проверка',
	'ERR_UW_UPLOAD_ERR'							=> 'Възникна грешка при зареждането на файла. Моля, опитайте отново!<br>n',
	'ERR_UW_VERSION'							=> 'Версия на системата SugarCRM:',
    'ERR_UW_WRONG_TYPE'							=> 'This page is not for running',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Размерът на зареждания файл надхвърля стойността на параметъра upload_max_filesize във файла php.ini.',
													2 => 'Размерът на зареждания файл надхвърля стойността на параметъра MAX_FILE_SIZE в HTML форма.',
													3 => 'Файлът беше зареден частично.',
													4 => 'Файлът не беше зареден.',
													5 => 'Неизвестна грешка.',
													6 => 'Папката за временни файл-ове липсва.',
													7 => 'Грешка при записване на файла на диск.',
													8 => 'Зареждането на файла беше спряно.',
),

    'ERROR_HT_NO_WRITE'                         => 'Грешка при запис във файла: %s',
    'ERROR_MANIFEST_TYPE'                       => 'Файлът manifest.php трябва да специфицира тип на пакет.',
    'ERROR_PACKAGE_TYPE'                        => 'Файлът manifest.php специфицира непознат тип на пакет: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Зарежданият файл е несъвместим с текущата версия на Sugar Suite:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Зарежданият файл е несъвместим с текущото издание (Open Source, Professional, or Enterprise) на Sugar Suite:',

    'ERROR_UW_CONFIG_DB'                        => 'Грешка при запис на променливата %s в базата (ключ %s, стойност %s).',
    'ERR_NOT_ADMIN'                             => "Неразрешен достъп до панел Администриране",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Нямате права за достъп до тази страница.',

    'LBL_BUTTON_BACK'							=> 'Предишна стъпка',
	'LBL_BUTTON_CANCEL'							=> 'Прекрати актуализацията',
	'LBL_BUTTON_DELETE'							=> 'Изтрий пакета',
	'LBL_BUTTON_DONE'							=> 'Стартирай отново',
	'LBL_BUTTON_EXIT'							=> 'Изход',
	'LBL_BUTTON_INSTALL'						=> 'Надстройка при финалния преглед',
	'LBL_BUTTON_NEXT'							=> 'Следваща стъпка',
	'LBL_BUTTON_RECHECK'						=> 'Изпълни стъпката отново',
	'LBL_BUTTON_RESTART'						=> 'Restart',

	'LBL_UPLOAD_UPGRADE'						=> 'Избор на актуализация',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Файлът за актуализация не е намерен',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Създаване на резервно копие на файловете',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Архивираните от тази актуализация файлове могат да бъдат намерени в',
	'LBL_UW_BACKUP'								=> 'Създаване на резервно копие на файловете',
	'LBL_UW_CANCEL_DESC'						=> 'Актуализацията е прекратена. Всички временни файлове и качените актуализации са изтрити.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Промени в схемата на набора от знаци',
	'LBL_UW_CHECK_ALL'							=> 'Провери всички',
	'LBL_UW_CHECKLIST'							=> 'Стъпки в процеса на актуализация',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Ресервни копия на презаписаните файлове се намират в директория:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Manually merge the following files:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Процес на актуализация: Ръчно сливане на дублирани записиFiles',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Please use whichever diff method is most familiar to you to merge these files.  Until this is complete, your SugarCRM installation will be in an uncertain state, and the upgrade is not complete.',
	'LBL_UW_COMPLETE'							=> 'Завършена',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Тази версия на Sugar съдържа ново лицензно споразумение. Желаете ли да продължите?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Всички изисквания към системата са удовлетворени',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP параметър: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Модул cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Модул IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Модул MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Параметър MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP параметър: Memory Limit',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP настройка: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Минимална версия на MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Поддържана версия на базата данни',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Файлът php.ini се намира в',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Минимална PHP версия PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP настройка: Safe Mode',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Настройки на сървъра',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Текущи настройки',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML анализ',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Поддръжка на ZIP архиви',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Файловете са копирани успешно',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Промени в схемата на потребителската таблица',

	'LBL_UW_DB_CHOICE1'							=> 'Електронният помощник изпълнява SQL заявките',
	'LBL_UW_DB_CHOICE2'							=> 'Ръчно изпълнение на SQL заявки',
	'LBL_UW_DB_INSERT_FAILED'					=> 'ВМЪКВАНЕТО е неуспешно - сравнените резултати се различават',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Права',
	'LBL_UW_DB_ISSUES'							=> 'Бази данни',
	'LBL_UW_DB_METHOD'							=> 'Метод на актуализация на базата данни',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ПРОМЕНИ ТАБЛИЦАТА [таблица] ДОБАВИ КОЛОНА [колона]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ПРОМЕНИ ТАБЛИЦАТА [таблица] ПРОМЕНИ КОЛОНАТА [колона]',
	'LBL_UW_DB_NO_CREATE'						=> 'СЪЗДАЙ ТАБЛИЦА [таблица]',
	'LBL_UW_DB_NO_DELETE'						=> 'ИЗТРИЙ ОТ [таблица]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ПРОМЕНИ ТАБЛИЦАТА [таблица] ПОСТАВИ КОЛОНА [колона]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Налични са всички необходими права',
	'LBL_UW_DB_NO_INSERT'						=> 'ВМЪКНИ В [таблица]',
	'LBL_UW_DB_NO_SELECT'						=> 'ИЗБЕРИ [x] ОТ [таблица]',
	'LBL_UW_DB_NO_UPDATE'						=> 'АКТУАЛИЗИРАЙ [таблица]',
	'LBL_UW_DB_PERMS'							=> 'Необходими права',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Инсталирани са следните актуализации:',
	'LBL_UW_END_DESC'							=> 'Системата е успешно актуализирана.',
	'LBL_UW_END_DESC2'							=> 'Ако сте избрали да изпълните ръчно някои действия като обединение на файлове или изпълнение на SQL зявки, моля направете го сега.  Системата ще бъде в нестабилно състояние, докато тези действия се изпълнят.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Актуализацията е завършена.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Натиснете бутона Стартирай отново, за да излезете от електронния помощник за актуализация.',
	'LBL_UW_END_LOGOUT'							=> 'Please log out of your account if you plan on upgrading further than this patch/upgrade level.',
	'LBL_UW_END_LOGOUT2'						=> 'Изход',
	'LBL_UW_REPAIR_INDEX'						=> 'За подобрение на производителността на базата данни, моля изпълнете скрипта <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Поправка на индекси</a>.',

	'LBL_UW_FILE_DELETED'						=> "бяха изтрити.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Група',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Достъп',
	'LBL_UW_FILE_ISSUES'						=> 'Системни файлове',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Файлът изисква ръчно различаване',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Има права за редактиране на всички файлове</b>',
	'LBL_UW_FILE_OWNER'							=> 'Собствени записи',
	'LBL_UW_FILE_PERMS'							=> 'Права',
	'LBL_UW_FILE_UPLOADED'						=> 'бяха заредени',
	'LBL_UW_FILE'								=> 'Име на файла',
	'LBL_UW_FILES_QUEUED'						=> 'Следните актуализации са готови за инсталиране:',
	'LBL_UW_FILES_REMOVED'						=> "Следните файл-ове ще бъдат изтрити от системата:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Натиснете \"Следваща стъпка\", за да заредите пакет с актуализация на системата.</b>",
	'LBL_UW_FROZEN'								=> 'Трябва да изпълните изискваните действия преди процесът на актуализации да продължи.',
	'LBL_UW_HIDE_DETAILS'						=> 'Скриване на допълнителна информация',
	'LBL_UW_IN_PROGRESS'						=> 'В процес на изпълнение',
	'LBL_UW_INCLUDING'							=> 'Включително',
	'LBL_UW_INCOMPLETE'							=> 'Непълен',
	'LBL_UW_INSTALL'							=> 'ИНСТАЛИРАНЕ на файла',
	'LBL_UW_MANUAL_MERGE'						=> 'Сливане на файлове',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Модулът е готов за деинсталиране.  Натиснете \"Потвърди\", за да продължите.<br>",
	'LBL_UW_MODULE_READY'						=> "Модулът е готов за инсталиране.  Натиснете \"Потвърди\", за да продължите.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Не са открити регистрирани актуализации на системата.',
	'LBL_UW_NONE'								=> 'няма',
	'LBL_UW_NOT_AVAILABLE'						=> 'Не е налично',
	'LBL_UW_OVERWRITE_DESC'						=> "Променените файл-ове ще бъдат презаписани - включително code customizations и шаблони. Сигурни ли сте, че искате да продължите?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Презаписване на всички файл-ове',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Ръчно обединяване - запази всички',
	'LBL_UW_OVERWRITE_FILES'					=> 'Метод на сливане',
	'LBL_UW_PATCH_READY'						=> 'Актуализацията е готова да продължи. Щракнете върху бутона "Потвърди" по-долу, за да завършите процеса на надстройване.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Бележка: Намерени са персонализирани оформления</h2><br />Следният(те) файл(ове) е(са) с нови полета или модифицирани оформления на екрана, приложени чрез Студиото. Актуализацията, която предстои да инсталирате, също съдържа промени във файла(овете). За<u>всеки файл</u>можете да:<br><ul><li><b>Подразбиране</b> Запазите вашата версия като оставите квадратчето за отметката празна. Промените на актуализацията ще бъдат игнорирани.</li>или<li>Приемете актуализираните файлове като поставите отметка в квадратчето. Вашите оформления трябва да бъдат приложени отново чрез Студио.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Да се създаде задача за ръчно сливане?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Предварителна проверка',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differentiated',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Изпращане на имейл на себе си с напомняне за ръчно обединяване?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Файловете, изброени по-долу, са променени.  Махнете отметката на тези, които изискват ръчно обединяване. <i>Отметките на всички открити промени в оформлението се махат автоматично; маркирайте с отметка онези, които трябва да бъдат презаписани.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Не се изисква ръчно сливане на файлове.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Не е необходима.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Автоматично запазени файлове:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Проверката за приложимост премина успешно. Натиснете "Следваща стъпка" за приложните избраната актуализация.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Натиснете "Следваща стъпка", за да копирате актуализираните файлове в системата.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Моля, имайте предвид,</b> че останалата част от процеса на обновяване е задължителен. Щракнете върху бутона Следващ, който ще изиска от вас да завършите процеса. Ако не желаете да продължите, щракнете върху бутона за отмяна.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Маркирай всички файлове',

	'LBL_UW_REBUILD_TITLE'						=> 'Регенериране на резултата',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Промени по схемата',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Покажи откритите настройки',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Покажи липсващите разрешения за базата данни',
	'LBL_UW_SHOW_DETAILS'						=> 'Показване на допълнителна информация',
	'LBL_UW_SHOW_DIFFS'							=> 'Покажи файловете, които изискват ръчно обединяване',
	'LBL_UW_SHOW_NW_FILES'						=> 'Покажи файловете с отказани разрешения',
	'LBL_UW_SHOW_SCHEMA'						=> 'Показване на скрипта на промените на схемата',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Показване на неизпълнените заявки',
	'LBL_UW_SHOW'								=> 'Покажи',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Пропуснати файлове',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Пропускане на презаписването на файла - избрано е ръчно обединяване.',
	'LBL_UW_SQL_RUN'							=> 'Проверете когато SQL е стартиран ръчно',
	'LBL_UW_START_DESC'							=> 'Добре дошли в електронния помощник на SugarCRM за актуализиране на програмата. Помощникът е създаден за улеснение на администраторите в процеса на инсталиране на нови версии на SugarCRM.  Моля следвайте внимателно инструкциите.',
	'LBL_UW_START_DESC2'						=> 'Препоръчва се актуализация да се извършва върху предварително направено копие на системата.  Направете архив на базата данни и системните файлове (от всички папки на SugarCRM) преди да започнете процеса на актуализиране.',
	'LBL_UW_START_DESC3'						=> 'Натиснете бутона "Следваща стъпка" за извършване на проверка на вашата система, за да се уверите, че системата е готова за актуализация. Проверката включва: файл за достъп, база данни, настройки на сървъра.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Новият Електронен помощник ще продължи процеса на надстройка. Моля, продължете надстройката.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Добре дошли в новия Електронен помощник за актуализация',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'В процес на проверка, моля, изчакайте.  Може да отнеме близо 30 секунди.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Намиране на всички съответстващи файлове за проверка.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Файлове',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Намерен',

	'LBL_UW_TITLE_CANCEL'						=> 'Прекрати актуализацията',
	'LBL_UW_TITLE_COMMIT'						=> 'Инсталация',
	'LBL_UW_TITLE_END'							=> 'Резюме на резултатите',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Проверка за приложимост',
	'LBL_UW_TITLE_START'						=> 'Начало',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Проверка на системата',
	'LBL_UW_TITLE_UPLOAD'						=> 'Зареди',
	'LBL_UW_TITLE'								=> 'Актуализиране',
	'LBL_UW_UNINSTALL'							=> 'Деинсталиране',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Приеми лиценза',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Конвертирай лиценза',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Надстроени/персонализирани модули',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Следните модули са открити като персонализирани и запазени',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Следните модули са открити като персонализирани в Студио и са надстроени',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Стартирането е започнало',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Проверка на системата',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Проверката на лиценза е в ход',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Проверка за приложимост',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Прогрес на копиране на файла',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade in progress',
    'LBL_UW_COMMIT_DESC'						=> 'Натиснете бутона Следващ, за да качите допълнителните надграждащи скриптове.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Актуализация на скриптове',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Upgrade Summary in progress',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'В процес на изпълнение     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Изминало време',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Прекратяване на актуализацията',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Актуализацията може да отнеме известно време',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Избор на актуализация',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Зареждане на избраната актуализация',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Желаете ли Sugar да изтрие схемата за версия 451, която вече не се поддържа ?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Електронният съветник отхвърля стари 451 схеми',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Ръчно отхвърляне на схеми след надстройката',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Начин за отхвърляне на стари схеми',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Покажи стара схема, която може да бъде отхвърлена',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Пропуснати заявки',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Изисква се версия на PHP интерпретатор по вискока от 5.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Инсталираната версия на PHP не се поддържа от SugarCRM.  Трябва да инсталирате версия съвместима с текущата версия на SugarCRM.  За повече информация относно поддържаните версии на PHP можете да разгледате "Compatibility Matrix in the Release Notes". Инсталираната версия на PHP е:',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Режимът Php обратна съвместимост е включен. Настройте zend.ze1_compatibility_mode на изключен, за да продължите по-нататък',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Действие',
    'LBL_ML_CANCEL'             => 'Прекрати актуализацията',
    'LBL_ML_COMMIT'=>'Потвърди',
    'LBL_ML_DESCRIPTION' => 'Описание',
    'LBL_ML_INSTALLED' => 'Инсталирано на',
    'LBL_ML_NAME' => 'Име',
    'LBL_ML_PUBLISHED' => 'Публикувано на',
    'LBL_ML_TYPE' => 'Тип',
    'LBL_ML_UNINSTALLABLE' => 'Не подлежи на деинсталация',
    'LBL_ML_VERSION' => 'Версия',
	'LBL_ML_INSTALL'=>'Инсталиране',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Потребителска активност',
	'LBL_CURRENT_PHP_VERSION' => '(Текущата инбсталирана версия е',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Препоръчва се версия на php 5.2.1 или по-висока)',
	'LBL_MODULE_NAME' => 'Електронен помощник за надстройка',
	'LBL_MODULE_NAME_SINGULAR' => 'Електронен помощник за надстройка',
	'LBL_UPLOAD_SUCCESS' => 'Обновяването на пакета е успешно качен. Натиснете бутона Следващ за извършване на окончателна проверка.',
	'LBL_UW_TITLE_LAYOUTS' => 'Потвърждаване на подредбата на екрани.',
	'LBL_LAYOUT_MODULE_TITLE' => 'Подредба на екрани',
	'LBL_LAYOUT_MERGE_DESC' => 'В резултат на актуализацията са добавени нови полета, които могат да бъдат включвани в подредбите на екрани за съществуващите модули. За да научите повече за допълнителните полета, моля прочетете "Release Notes" за версията на SugarCRM, към която извършвате актуализация.<br><br>If you do not wish to append the new fields, please uncheck the module, and your custom layouts will remain unchanged. The fields will be available in Studio after the upgrade.<br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Натиснете бутона "Следваща стъпка", за да потвърдите промените и да финализирате актуализацията.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Натиснете бутона "Следваща стъпка", за да завършите актуализацията.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Потвърждаване на подредбата на екрани.',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Потвърдете резултата от Подредбата на екрани',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Следните Подредби на екрани, са сляти успешно:',
	'LBL_SELECT_FILE' => 'Избиране на файл:',
	'LBL_LANGPACKS' => 'Езикови пакети' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Инсталиране на модули' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Надстройки на актуализацията' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Теми' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Work Flow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Актуализация' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Видим за всички',
);