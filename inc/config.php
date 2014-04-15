<?php

$domain       = "http://get-popcorn.com/";
$link_win     = "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Win-32.zip";
$link_mac     = "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Mac.tar.gz";
$link_linux32 = "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Linux-32.tar.gz";
$link_linux64 = "http://cdn.get-popcorn.com/build/Popcorn-Time-0.2.9-Linux-64.tar.gz";
$link_version = "2.9";
$link_fb      = "https://facebook.com/getpopcorntime";
$link_bl      = "http://blog.get-popcorn.com/";
$link_tt      = "https://twitter.com/popcorntimetv";
$link_gh      = "http://github.com/popcorn-official";

// Language manager
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

?>