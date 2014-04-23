<?php
	require_once(__DIR__ . '/language.class.php');
	
	define('DOMAIN',		'http://get-popcorn.com/');
	define('VERSION',		'2.9');
	
	/* navigation */
	define('LINK_HOME',		DOMAIN);
	define('LINK_FAQ',		DOMAIN . 'faq');
	define('LINK_TOS',		DOMAIN . 'tos');
	define('LINK_DL',		DOMAIN . 'download');
	
	/* social */
	// define('LINK_FCBK',		'https://facebook.com/getpopcorntime');
	define('LINK_TWTR',		'https://twitter.com/popcorntimetv');
	define('LINK_GTHB',		'http://github.com/popcorn-official');
	define('LINK_BLOG',		'http://blog.get-popcorn.com/');

	/* download */
	$releases = array(
		"mac"		=> "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Mac.tar.gz",
		"win"		=> "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Win-32.zip",
		"linux32"	=> "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Linux-32.tar.gz",
		"linux64"	=> "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Linux-64.tar.gz"
	);
	
	/* language manager */
	define('LANG_DIR',			__DIR__ . '/lang');
	define('DEFAULT_LANGUAGE',	'en');
	define('LANG_PARAM',		'lang'); // Must be the same as polyglotLanguageSwitcher paramName option in /js/site.js

	$l = new LanguageManager(LANG_DIR, DEFAULT_LANGUAGE, LANG_PARAM);
	require_once($l->getLanguageFileName());
?>