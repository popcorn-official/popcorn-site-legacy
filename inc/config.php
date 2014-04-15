<?php
	define('DOMAIN', 		'http://get-popcorn.com/');
	define('VERSION',		'2.9');
	
	/* navigation */
	define('LINK_HOME',		'/');
	define('LINK_FAQ',		'/faq');
	define('LINK_TOS',		'/tos');
	define('LINK_DL',		'/download');
	
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
	$langlist = array();
	foreach(scandir("inc/lang") as $value) {
		if(preg_match("/^([a-z-]{2,5}).php$/i", $value, $langname)){
			$langlist[]=$langname[1];
		}
	}
	$lang = "en";
	if (!empty($_GET["lang"])) {
		$newlang = $_GET["lang"];
	} else if (!empty($_COOKIE["lang"])) {
		$newlang = $_COOKIE["lang"];
	}
	if (isset($newlang) && preg_match("/^[a-z-]{2,5}$/i", $newlang) && in_array($newlang, $langlist)) {
		$lang = $newlang;
		setcookie("lang", $lang,time()+31536000);
	}
	if(!empty($_GET["lang"])) header("Location: ".strtok($_SERVER['REQUEST_URI'], '?'));
	include("inc/lang/$lang.php");

	function printlangs(){
		global $langlist,$lang;
		foreach($langlist as $langname){
			echo "<option id='$langname' value='$langname' ".($langname == $lang? 'selected':'').">&nbsp;</option>\n";
		}
	}