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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Dodijeli timovima',

	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Neispravna prijava ili lozinka',
	'ERR_BODY_TOO_LONG'		=> '\rTekst u tijelu predug za obuhvaćanje CIJELE poruke e-pošte. Skraćen.',
	'ERR_INI_ZLIB'			=> 'Nije moguće privremeno isključiti sažimanje Zlib. „Postavke testiranja” možda neće biti uspješne.',
	'ERR_MAILBOX_FAIL'		=> 'Nije moguće dohvatiti nijedan poštanski račun.',
	'ERR_NO_IMAP'			=> 'Nema pronađenih biblioteka IMAP. Riješite to prije nego što nastavite s dolaznom e-poštom',
	'ERR_NO_OPTS_SAVED'		=> 'S vašim računom dolazne pošte nije spremljen nijedan optimum. Pregledajte postavke',
	'ERR_TEST_MAILBOX'		=> 'Provjerite svoje postavke i pokušajte ponovno.',
    'ERR_DELETE_FOLDER' => 'Nije moguće izbrisati mapu.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Nije moguće otkazati pretplatu na mapu prije brisanja.',

	'LBL_APPLY_OPTIMUMS'	=> 'Primijeni optimume',
	'LBL_ASSIGN_TO_USER'	=> 'Dodijeli korisniku',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Mogućnosti automatskog odgovora',
	'LBL_AUTOREPLY'			=> 'Predložak za automatski odgovor',
	'LBL_AUTOREPLY_HELP'	=> 'Odaberite automatski odgovor za obavještavanje pošiljatelja e-pošte da je njihov odgovor primljen.',
	'LBL_BASIC'				=> 'Podaci o poštanskom računu',
	'LBL_CASE_MACRO'		=> 'Makronaredba slučaja',
	'LBL_CASE_MACRO_DESC'	=> 'Postavite makronaredbu koja će se raščlaniti i upotrijebiti za povezivanje uvezene e-pošte sa slučajem.',
	'LBL_CASE_MACRO_DESC2'	=> 'Postavite to na bilo koju vrijednost, no zadržite <b>„%1”</b>.',
	'LBL_CERT_DESC'			=> 'Prisilna provjera valjanosti sigurnosnog certifikata poslužitelja za poštu - nemojte upotrebljavati ako se samopotpisujete.',
	'LBL_CERT'				=> 'Provjeri valjanost certifikata',
	'LBL_CLOSE_POPUP'		=> 'Zatvori prozor',
	'LBL_CREATE_NEW_GROUP'	=> '--Stvori grupu pri spremanju--',
	'LBL_CREATE_TEMPLATE'	=> 'Stvori',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Pretplaćene mape',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Zadano: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'Zadano: ',
	'LBL_DELETE_SEEN'		=> 'Izbriši pročitane poruke e-pošte nakon uvoza',
	'LBL_EDIT_TEMPLATE'		=> 'Uredi',
	'LBL_EMAIL_OPTIONS'		=> 'Mogućnosti obrade e-pošte',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Mogućnosti obrade neisporučive e-pošte',
	'LBL_FILTER_DOMAIN_DESC'=> 'Odredite domenu na koju se neće slati automatski odgovori.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Odaberite da biste automatski stvorili zapise e-pošte u Sugaru za svu dolaznu e-poštu.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Za opciju Stvori slučaj mora se odabrati grupna mapa',
	'LBL_FILTER_DOMAIN'		=> 'Nema automatskog odgovora na ovoj domeni',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Pronalaženje optimalnih varijabli veze.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Pronađi optimalnu konfiguraciju',
	'LBL_FIND_SSL_WARN'		=> '<br>Testiranje SSL-a može dugo potrajati. Budite strpljivi.<br>',
	'LBL_FORCE_DESC'		=> 'Za poslužitelje IMAP/POP3 potrebne su posebne skretnice. Označite da biste nametnuli negativne skretnice pri povezivanju (tj. /notls)',
	'LBL_FORCE'				=> 'Nametni negativne skretnice',
	'LBL_FOUND_MAILBOXES'	=> 'Pronađene su sljedeće iskoristive mape.<br>Kliknite na jednu da biste je izabrali:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Pronađene su optimalne postavke. Pritisnite gumb u nastavku da biste ih primijenili na svoj poštanski račun.',
	'LBL_FROM_ADDR'			=> 'Adresa pošiljatelja',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Ovdje navedena adresa e-pošte možda se neće prikazivati u odjeljku adrese pošiljatelja poslane poruke e-pošte zbog ograničenja koja nameće davatelj usluge pošte. U tom će se slučaju upotrijebiti adresa e-pošte definirana na poslužitelju za odlaznu poštu.",
	'LBL_FROM_NAME_ADDR'	=> 'Ime / Adresa e-pošte pošiljat.',
	'LBL_FROM_NAME'			=> 'Ime pošiljatelja',
	'LBL_GROUP_QUEUE'		=> 'Dodijeli grupi',
    'LBL_HOME'              => 'Početna',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Upotreba poštanskog računa',
	'LBL_LIST_NAME'			=> 'Naziv:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Vrsta',
	'LBL_LIST_SERVER_URL'	=> 'Poslužitelj za poštu',
	'LBL_LIST_STATUS'		=> 'Status',
	'LBL_LOGIN'				=> 'Korisničko ime',
	'LBL_MAILBOX_DEFAULT'	=> 'UL. POŠTA',
	'LBL_MAILBOX_SSL_DESC'	=> 'Upotrijebite SSL pri povezivanju. Ako to ne radi, provjerite je li u konfiguraciji instalacije za PHP uključeno „--with-imap-ssl”.',
	'LBL_MAILBOX_SSL'		=> 'Upotrijebi SSL',
	'LBL_MAILBOX_TYPE'		=> 'Moguće radnje',
	'LBL_DISTRIBUTION_METHOD' => 'Metoda distribucije',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Predložak za automatski odgovor o novom slučaju',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Odaberite automatski odgovor da biste obavijestili pošiljatelje e-pošte o stvaranju novog slučaja. Poruka e-pošte sadrži broj slučaja u retku Predmet koji se drži postavke Makronaredba slučaja. Taj odgovor šalje se samo pri primitku prve poruke e-pošte od primatelja.',
	'LBL_MAILBOX'			=> 'Mape pod nadzorom',
	'LBL_TRASH_FOLDER'		=> 'Mapa za smeće',
	'LBL_GET_TRASH_FOLDER'	=> 'Pribavi mapu za smeće',
	'LBL_SENT_FOLDER'		=> 'Mapa za poslano',
	'LBL_GET_SENT_FOLDER'	=> 'Pribavi mapu za poslano',
	'LBL_SELECT'				=> 'Odaberi',
	'LBL_MARK_READ_DESC'	=> 'Označite poruke kao pročitane na poslužitelju za poštu pri uvozu; ne brišite.',
	'LBL_MARK_READ_NO'		=> 'E-pošta označena kao izbrisana nakon uvoza',
	'LBL_MARK_READ_YES'		=> 'E-pošta ostavljena na poslužitelju nakon uvoza',
	'LBL_MARK_READ'			=> 'Ostavi poruke na poslužitelju',
	'LBL_MAX_AUTO_REPLIES'	=> 'Broj automatskih odgovora',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Postavite maksimalni broj automatskih odgovora koji će se slati na jedinstvenu adresu e-pošte tijekom razdoblja od 24 sata.',
	'LBL_PERSONAL_MODULE_NAME' => 'Osobni poštanski račun',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Osobni poštanski račun',
	'LBL_CREATE_CASE'      => 'Stvori slučaj iz e-pošte',
	'LBL_CREATE_CASE_HELP'  => 'Odaberite za automatsko stvaranje zapisa slučaja u Sugaru iz dolaznih poruka e-pošte.',
	'LBL_MODULE_NAME'		=> 'Dolazna e-pošta',
	'LBL_MODULE_NAME_SINGULAR' => 'Dolazna e-pošta',
	'LBL_BOUNCE_MODULE_NAME' => 'Pošt. sandučić za obradu neisporučive e-pošte',
	'LBL_MODULE_TITLE'		=> 'Dolazna e-pošta',
	'LBL_NAME'				=> 'Ime',
    'LBL_NONE'              => 'Nema',
	'LBL_NO_OPTIMUMS'		=> 'Nije moguće pronaći optimume. Provjerite postavke i pokušajte ponovno.',
	'LBL_ONLY_SINCE_DESC'	=> 'Kada upotrebljavate POP3, PHP ne može filtrirati nove/nepročitane poruke. Ova zastavica omogućuje zahtjev za provjeru poruka od zadnjeg puta kada je račun provjeren. Time će se značajno poboljšati rad ako vaš poslužitelj za poštu ne podržava IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Ne. Provjerite u odnosu na sve poruke e-pošte na poslužitelju za poštu.',
	'LBL_ONLY_SINCE_YES'	=> 'Da.',
	'LBL_ONLY_SINCE'		=> 'Uvezi samo od zadnje provjere:',
	'LBL_OUTBOUND_SERVER'	=> 'Poslužitelj za odlaznu poštu',
	'LBL_PASSWORD_CHECK'	=> 'Provjera lozinke',
	'LBL_PASSWORD'			=> 'Lozinka',
	'LBL_POP3_SUCCESS'		=> 'Testno povezivanje POP3 bilo je uspješno.',
	'LBL_POPUP_FAILURE'		=> 'Testno povezivanje nije uspjelo. Pogreška je prikazana u nastavku.',
	'LBL_POPUP_SUCCESS'		=> 'Testno povezivanje uspješno. Postavke rade.',
	'LBL_POPUP_TITLE'		=> 'Postavke testiranja',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Nabavljanje popisa mapa',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Odaberi pretplaćenu/e mapu/e',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Odaberi mapu za smeće',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Odaberi mapu za poslano',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Sljedeće mape %s ne postoje ili su izbrisane s poslužitelja',
	'LBL_PORT'				=> 'Priključak poslužitelja za poštu',
	'LBL_QUEUE'				=> 'Red čekanja za poštanski račun',
	'LBL_REPLY_NAME_ADDR'	=> 'Ime/E-pošta za odgovor',
	'LBL_REPLY_TO_NAME'		=> 'Ime na koje se šalje odgovor',
	'LBL_REPLY_TO_ADDR'		=> 'Adresa na koju se šalje odgovor',
	'LBL_SAME_AS_ABOVE'		=> 'Upotreba imena/adrese pošiljatelja',
	'LBL_SAVE_RAW'			=> 'Spremi neobrađeni izvor',
	'LBL_SAVE_RAW_DESC_1'	=> 'Odaberite „Da” ako želite sačuvati neobrađeni izvor za svaku uvezenu poruku e-pošte.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Veliki prilozi mogu uzrokovati pogreške s konzervativno ili neispravno konfiguriranim bazama podataka.',
	'LBL_SERVER_OPTIONS'	=> 'Napredno postavljanje',
	'LBL_SERVER_TYPE'		=> 'Protokol poslužitelja za poštu',
	'LBL_SERVER_URL'		=> 'Adresa poslužitelja za poštu',
	'LBL_SSL_DESC'			=> 'Ako vaš poslužitelj za poštu podržava veze protokola SSL, omogućivanje ove funkcije prisilno će pokrenuti SSL veze pri uvozu e-pošte.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Odabrani tim ima pristup poštanskom računu.',
	'LBL_SSL'				=> 'Upotrijebi SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Zadana postavka sustava',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test',
	'LBL_TEST_SETTINGS'		=> 'Postavke testiranja',
	'LBL_TEST_SUCCESSFUL'	=> 'Povezivanje uspješno dovršeno.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Pričekajte trenutak...',
	'LBL_TLS_DESC'			=> 'Upotrijebite protokol Transport Layer Security pri povezivanju na poslužitelj za poštu - samo ako vaš poslužitelj za poštu podržava ovaj protokol.',
	'LBL_TLS'				=> 'Upotrijebi TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Dolazna e-pošta onemogućena',
	'LBL_WARN_IMAP'			=> 'Upozorenja:',
	'LBL_WARN_NO_IMAP'		=> 'Dolazna e-pošta <b>ne može</b> raditi bez biblioteka IMAP za c-klijente omogućenih/kompiliranih s pomoću PHP modula. Obratite se svojem administratoru da biste riješili ovaj problem.',

	'LNK_CREATE_GROUP'		=> 'Stvori novu grupu',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Poštanski račun nove grupe',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Novi račun za obradu neisporučive e-pošte',
	'LNK_LIST_MAILBOXES'	=> 'Svi poštanski računi',
	'LNK_LIST_QUEUES'		=> 'Svi redovi čekanja',
	'LNK_LIST_SCHEDULER'	=> 'Planeri',
	'LNK_LIST_TEST_IMPORT'	=> 'Uvoz testne poruke e-pošte',
	'LNK_NEW_QUEUES'		=> 'Stvori novi red čekanja',
	'LNK_SEED_QUEUES'		=> 'Stvori redove čekanja iz timova',
	'LBL_GROUPFOLDER_ID'	=> 'ID grupne mape',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Dodijeli grupnoj mapi',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Dopusti korisnicima da šalju e-poštu s pomoću imena pošiljatelja i adrese kao adrese na koju se šalje odgovor',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kad je odabrana ova mogućnost, ime i adresa e-pošte pošiljatelja povezani s ovim grupnim poštanskim računom prikazuju se kao mogućnost za polja pošiljatelja pri sastavljanju poruka e-pošte za korisnike koji imaju pristup grupnom poštanskom računu.',
    'LBL_STATUS_ACTIVE'     => 'Aktivno',
    'LBL_STATUS_INACTIVE'   => 'Neaktivno',
    'LBL_IS_PERSONAL' => 'osobno',
    'LBL_IS_GROUP' => 'grupa',
    'LBL_ENABLE_AUTO_IMPORT' => 'Automatski uvezi e-poštu',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Upozorenje: izmjenjujete postavku automatskog uvoza, što može uzrokovati gubitak podataka.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Upozorenje: automatski uvoz mora biti omogućen pri automatskom stvaranju slučajeva.',
	'LBL_EDIT_LAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
);
?>