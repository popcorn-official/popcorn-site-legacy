<?php
$domain       = "http://get-popcorn.com/";
$link_win     = $domain."releases/build/Popcorn-Time-0.2.8-Win32.zip";
$link_mac     = $domain."releases/build/Popcorn-Time-0.2.8-Mac.tar.gz";
$link_linux32 = $domain."releases/build/Popcorn-Time-0.2.8-Linux-32.tar.gz";
$link_linux64 = $domain."releases/build/Popcorn-Time-0.2.8-Linux-64.tar.gz";
$link_version = "2.8";
$link_fb      = "https://facebook.com/getpopcorntime";
$link_tt      = "https://twitter.com/popcorntimetv";
$link_gh      = "http://github.com/popcorn-official";

if(array_key_exists('lang', $_GET))		$lang_get	= checklang($_GET["lang"]);
if(array_key_exists('lang', $_COOKIE))	$lang_ck	= checklang($_COOKIE["lang"], true);

if(isset($lang_get) && $lang_get)
   $lang = $_GET["lang"];
elseif(isset($lang_ck) && $lang_ck)
   $lang = $_COOKIE["lang"];
else
   $lang = "en";

include('lang/' . $lang . '.php');

function checklang($langtemp, $cookie = false) {
    if (isset($langtemp) && preg_match("/^[a-z-]{2,5}$/i", $langtemp)) {
        if (file_exists('lang/' . $langtemp . '.php')) {
            if(!$cookie) setcookie("lang", $langtemp, time()+2592000);

            return true;
        }
    }

	return false;
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="canonical" href="<?php echo $domain ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $domain?>css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--
                                                        .,;+###+;:.
                                                  .##;`             .'@:
                                              `@+                        +#
                                            #'                             `@`
                                         `@`                                 `@
                        ``:::.`         @.                                     +.
                    `#+`        ;@    `#                                        '.
                  `@              `@ :;                                          @
                 @`                 @;                                            +
                @                   ;                                             @
               @                                                                  @
               @                                                                 `+
               @                                                                 @
                @`                `..                             ..`           #.
                 `@;            '+#@. ';                      `:++@' .#        @.
                 `+#;.``       ;;#@@  ,@.                     `;+@@, `@@     `;;#+`
               .@              ::'######                       :;######+           @`
              :,                ,;;'''+`                       `;;'''+:             .+
              @                             `+'++++++++'++`                          ;,
              ##   ``` `                    ''''''''''''''+                           @
               @#, ```````                  '''''''''''''':                          .@
                :#@# ``.```                  ''''''''''''+                         '#@
                :,.;@@```.`````               ;'''''''''                        :@@@`
                @``@  +'+.@'```````               ```                           '#@
                ',`.   ..+  ,@@`@.```                ``    `::   '@@@#  #@@@# @;   @`
                 @`.   ,..  ;.,' ,`##``@@@.  '@@@. @'..;# @'''+:@     '#;;;;;@      @
                 @..,  ...   ...  @.`#,   `#@;;;;'#      @;;;;;'       ;;;;;;       @
                 ':..   ..   ,.:   ..       ;;;;;;`      ';;;;;'      ,;;;;;;       @
                  @..   ,..  ,.:   ..       ;;;;;;.      ';;;;;;      :;;;;;'      ;,
                  @,..  ,.:  `..   ...      ;;;;;;.      ';;;;;,      ';;;;;;      @
                  ':.,   ,.   ..   .,.      ';;;;;.      ';;;;;.      ';;;;;.      @
                   @.,   ..   ,.   :.:      ';;;;;.      ';;;;;       ;;;;;;       @
                   @,,.  :,.  :,.  ,.:      ';;;;;.      ;;;;;;       ;;;;;'      ;.
                   ;;,;  :,:  :,:  ,,:      ';;;;;.      ;;;;;;      `;;;;;'      @
                    @,,   ,:  `,:  .,:      ';;;;;.      ;;;;;'      :;;;;;:      @
                    @:,`  ,,   ,,   ,,      ';;;;;.      ;;;;;'      ';';;;`      #
                    :;:;  ;,`  ,,   ,,      ;;;;;;.      ;;;;;'      ';;;;;      '`
                     @,,  ,,:  ;,   ,,      :;;';;.      ;;;;;'      ';;';'      @
                     @::   :;  :,.  :,      :;;;;;.      ;;;;;:      ;';;;'      @
                     ,;::  ::  ,:;  ;,      :;;;;'.     `;;';',      ;;';',      +
                      @::  ;:   :;  :,`     .;;;;;.     ,;;';;.     :;;;''`     '
                      @::  .:,  ::  :,.     `;';;;.     :';;;;      ;;'';'      @
                      .#:,  :;  ;:  ,:,     `;';;;.     :;;'';      '';';'      @
                        `#; ;:  ::   :;      ;;';;.     ;';'''      ''';''     `'
                           `@'  ,:,  :;      ''';;.     ;'''''      ;'''',     +
                              .@,::  :;      ;''''.     ';;'''      ;';;;    `.@
                                 :@. ;:      ;''';.     ';;;'',:'#@@#+';,`
                                    :@;     `'++#@@##';,.`
                                       ;,.`                                                          -->

	<link rel="shortcut icon" href="<?php echo $domain ?>favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo $domain ?>favicon.ico" type="image/x-icon" />

	<title>Popcorn Time - <?php echo $langsite['TITLE_DESC'] ?></title>
	<meta name="description" content="<?php echo $langsite['SITE_DESC'] ?>" />
	<link rel="image_src" href="<?php echo $domain?>images/header-ui.jpg" />

	<meta property="og:title" content="Popcorn Time" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo $domain ?>images/header-ui.jpg" />
	<meta property="og:url" content="<?php echo $domain ?>" />
	<meta property="og:site_name" content="Popcorn Time" />
</head>
<body class="beta">
	<section id="header">

		<nav class="fixed-width fadeInDown wow">
			<a href="/" id="logo">Popcorn Time</a>
			<ul class="align-right">
				<!--<li class="social"><a href="<?php echo $link_fb ?>" target="_blank" class="icon-facebook"></a></li>-->
				<li class="social"><a href="<?php echo $link_tt ?>" target="_blank" class="icon-twitter"></a></li>
				<li class="social"><a href="<?php echo $link_gh ?>" target="_blank" class="icon-github"></a></li>
			</ul>

			<ul class="align-left">
				<li class="text"><a href="faq.html">FAQ</a></li>
				<li class="text"><a href="tos.html">TOS</a></li>
			</ul>
		</nav>

		<div class="text fadeInDown wow">
			<h1><?php echo $langsite['HEADER'] ?></h1>
			<p><?php echo $langsite['SUBHEADER'] ?></p>
		</div>

		<ul id="links">
			<li class="download dl-mac">
				<a href="<?php echo $link_mac?>" class="btn-main icon-mac" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a><br />
				<small><?php echo $langsite['DL_DESC_MAC'] ?></small>
			</li>
			<li class="download dl-win">
				<a href="<?php echo $link_win?>" class="btn-main icon-win" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a><br />
				<small><?php echo $langsite['DL_DESC_WIN']?></small>
			</li>
			<li class="download dl-lin-32">
				<a href="<?php echo $link_linux32?>" class="btn-main icon-linux" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a><br />
				<small><?php echo $langsite['DL_DESC_LIN32'] ?></small>
			</li>
			<li class="download dl-lin-64">
				<a href="<?php echo $link_linux64?>" class="btn-main icon-linux" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a><br />
				<small><?php echo $langsite['DL_DESC_LIN64'] ?></small>
			</li>
		</ul>
		<img src="<?php echo $domain?>images/header-ui.jpg" class="ui-screenshot fadeInUp wow" alt="Popcorn Time UI" />
	</section>

	<div class="container">
		<div class="warning fadeIn wow">
			<h5 class="icon-info"><?php echo $langsite['DISCLAIMER_TITLE'] ?></h5>
			<p><?php echo $langsite['DISCLAIMER_DESC'] ?></p>
		</div>
		<section id="features" class="fixed-width">
			<div class="clear-fix">
				<article class="fadeInLeft wow">
					<img src="<?php echo $domain?>images/icon-best.gif" alt=""/>
					<h5><?php echo $langsite['FEAT_MOVIES'] ?></h5>
					<p><?php echo $langsite['FEAT_MOVIES_DESC'] ?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="<?php echo $domain?>images/icon-watch.gif" alt=""/>
					<h5><?php echo $langsite['FEAT_NORESTRICTION'] ?></h5>
					<p><?php echo $langsite['FEAT_NORESTRICTION_DESC'] ?></p>
				</article>

				<article class="fadeInLeft wow">
					<img src="<?php echo $domain?>images/icon-search.gif" alt=""/>
					<h5><?php echo $langsite['FEAT_CATALOGUE'] ?></h5>
					<p><?php echo $langsite['FEAT_CATALOGUE_DESC'] ?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="<?php echo $domain?>images/icon-subs.gif" alt=""/>
					<h5><?php echo $langsite['FEAT_QUALITY'] ?></h5>
					<p><?php echo $langsite['FEAT_QUALITY_DESC'] ?></p>
				</article>
			</div>

			<div class="width-50 align-center action fadeInUp wow">
				<img src="<?php echo $domain?>images/pochoclin.gif" alt="Pochoclin" class="align-center pochoclin"/>
				<hr />
				<h2><?php echo $langsite['FEAT_BEST'] ?></h2>
				<div class="dl-mac">
					<a href="<?php echo $link_mac?>" class="btn-main icon-mac" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a>
					<small><?php echo $langsite['DL_DESC_MAC'] ?></small>
				</div>
				<div class="dl-win">
					<a href="<?php echo $link_win?>" class="btn-main icon-win" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a>
					<small><?php echo $langsite['DL_DESC_WIN'] ?></small>
				</div>
				<div class="dl-lin-32">
					<a href="<?php echo $link_linux32?>" class="btn-main icon-linux" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version)?></a>
					<small><?php echo $langsite['DL_DESC_LIN32'] ?></small>
				</div>
				<div class="dl-lin-64">
					<a href="<?php echo $link_linux64?>" class="btn-main icon-linux" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a>
					<small><?php echo $langsite['DL_DESC_LIN64'] ?></small>
				</div>
			</div>
		</section>

		<section id="how">
			<div class="fixed-width fadeInLeft wow">
				<h2><?php echo $langsite['HOW_TITLE'] ?></h2>
				<h4><?php echo $langsite['HOW_DESC'] ?></h4>
				<ul class="steps">
					<li class="icon-eye"><?php echo $langsite['HOW_1'] ?></li>
					<li class="icon-hd"><?php echo $langsite['HOW_2'] ?></li>
					<li class="icon-play"><?php echo $langsite['HOW_3'] ?></li>
				</ul>
			</div>
			<img src="<?php echo $domain?>images/how-ui.png" class="ui-screenshot fadeInRight wow" alt="Popcorn Time UI">
		</section>

		<section id="get-app">
			<div class="text fadeIn wow">
				<h2><?php echo $langsite['GET_TITLE'] ?></h2>
				<p><?php echo $langsite['GET_DESC'] ?></p>
			</div>
			<ul class="platforms">
				<li class="mac icon-laptop fadeInUp wow" data-wow-delay=".2s">
					<a href="<?php echo $link_mac?>" class="btn-main icon-mac" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'] ,$link_version) ?></a>
					<small><?php echo $langsite['DL_DESC_MAC'] ?></small>
				</li>
				<li class="win icon-screen fadeInUp wow" data-wow-delay=".4s">
					<a href="<?php echo $link_win?>" class="btn-main icon-win" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a>
					<small><?php echo $langsite['DL_DESC_WIN'] ?></small>
				</li>
				<li class="lin-32 icon-window fadeInUp wow" data-wow-delay=".6s">
					<a href="<?php echo $link_linux32?>" class="btn-main icon-linux" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a>
					<small><?php echo $langsite['DL_DESC_LIN32'] ?></small>
				</li>
				<li class="lin-64 icon-window fadeInUp wow" data-wow-delay=".8s">
					<a href="<?php echo $link_linux64?>" class="btn-main icon-linux" target="_blank"><?php echo sprintf($langsite['BTN_DOWNLOAD'], $link_version) ?></a>
					<small><?php echo $langsite['DL_DESC_LIN64'] ?></small>
				</li>
			</ul>
		</section>

		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="/" class="logo">Popcorn time</a>
				<ul>
					<!--<li class="social"><a href="<?php echo $link_fb?>" target="_blank" class="icon-facebook"> </a></li>-->
					<li class="social"><a href="<?php echo $link_tt ?>" target="_blank" class="icon-twitter"> </a></li>
					<li class="github"><a href="<?php echo $link_gh ?>" target="_blank" class="icon-github">Github</a></li>
                </ul>
			</nav>
			<footer>
				<hr>
				<i class="film"></i>
				<p><?php echo $langsite['FOOTER'] ?><br /> <small><a href="<?php echo $domain ?>tos.html">Terms of Service</a> — <a href="<?php echo $domain ?>faq.html">FAQ</a></small></p>
			</footer>
		</section>
	</div>
	<script type="text/javascript" src="<?php echo $domain?>js/wow.js"></script>
	<script type="text/javascript" src="<?php echo $domain?>js/site.js"></script>
</body>
</html>