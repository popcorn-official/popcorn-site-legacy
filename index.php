<?php include("inc/config.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="canonical" href="<?=$domain?>" />
	<link rel="stylesheet" type="text/css" href="<?=$domain?>css/style.css" />
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

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="icon" href="favicon.ico" type="image/x-icon" />

	<title>Popcorn Time - <?=$langsite["TITLE_INDEX"]?></title>
	<meta name="description" content="<?=$langsite["SITE_DESC"]?>" />
	<link rel="image_src" href="<?=$domain?>images/header-ui.jpg" />
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
    <script src="<?=$domain?>js/jquery.polyglot.language.switcher.js" type="text/javascript"></script>

	<meta property="og:title" content="Popcorn Time" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?=$domain?>images/header-ui.jpg" />
	<meta property="og:url" content="<?=$domain?>" />
	<meta property="og:site_name" content="Popcorn Time" />
</head>
<body class="beta">
	<section id="header">

		<nav class="fixed-width fadeInDown wow">
			<a href="<?=$domain?>" id="logo">Popcorn Time</a>
			<ul class="align-right">
				<!--<li class="social"><a href="<?=$link_fb?>" target="_blank" class="icon-facebook"></a></li>-->
				<li class="social"><a href="<?=$link_bl?>" target="_blank" class="icon-ghost"></a></li>
				<li class="social"><a href="<?=$link_tt?>" target="_blank" class="icon-twitter"></a></li>
				<li class="social"><a href="<?=$link_gh?>" target="_blank" class="icon-github"></a></li>
			</ul>

			<ul class="align-left">
				<div id="langswitch">
					<form action="#" method="post">
						<select name="lang">
							<?=printlangs()?>
						</select>
					</form>
				</div>
				<li class="text"><a href="faq">FAQ</a></li>
				<li class="text"><a href="tos">TOS</a></li>
			</ul>
		</nav>

		<div class="text fadeInDown wow">
			<h1><?=$langsite["HEADER"]?></h1>
			<p><?=$langsite["SUBHEADER"]?></p>
		</div>

		<ul id="links">
			<li class="download dl-mac">
				<a href="<?=$domain?>download.php?os=mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a><br />
				<small><?=$langsite["DL_DESC_MAC"]?></small>
			</li>
			<li class="download dl-win">
				<a href="<?=$domain?>download.php?os=win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a><br />
				<small><?=$langsite["DL_DESC_WIN"]?></small>
			</li>
			<li class="download dl-lin-32">
				<a href="<?=$domain?>download.php?os=linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a><br />
				<small><?=$langsite["DL_DESC_LIN32"]?></small>
			</li>
			<li class="download dl-lin-64">
				<a href="<?=$domain?>download.php?os=linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a><br />
				<small><?=$langsite["DL_DESC_LIN64"]?></small>
			</li>
		</ul>
		<img src="<?=$domain?>images/header-ui.jpg" class="ui-screenshot fadeInUp wow" alt="Popcorn Time UI" />
	</section>

	<div class="container">
		<div class="warning fadeIn wow">
			<h5 class="icon-info"><?=$langsite["DISCLAIMER_TITLE"]?></h5>
			<p><?=$langsite["DISCLAIMER_DESC"]?></p>
		</div>
		<section id="features" class="fixed-width">
			<div class="clear-fix">
				<article class="fadeInLeft wow">
					<img src="<?=$domain?>images/icon-best.gif" alt=""/>
					<h5><?=$langsite["FEAT_MOVIES"]?></h5>
					<p><?=$langsite["FEAT_MOVIES_DESC"]?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="<?=$domain?>images/icon-watch.gif" alt=""/>
					<h5><?=$langsite["FEAT_NORESTRICTION"]?></h5>
					<p><?=$langsite["FEAT_NORESTRICTION_DESC"]?></p>
				</article>

				<article class="fadeInLeft wow">
					<img src="<?=$domain?>images/icon-search.gif" alt=""/>
					<h5><?=$langsite["FEAT_CATALOGUE"]?></h5>
					<p><?=$langsite["FEAT_CATALOGUE_DESC"]?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="<?=$domain?>images/icon-subs.gif" alt=""/>
					<h5><?=$langsite["FEAT_QUALITY"]?></h5>
					<p><?=$langsite["FEAT_QUALITY_DESC"]?></p>
				</article>
			</div>

			<div class="width-70 align-center action fadeInUp wow">
				<img src="<?=$domain?>images/pochoclin.gif" alt="Pochoclin" class="align-center pochoclin"/>
				<hr />
				<h2><?=$langsite["FEAT_BEST"]?></h2>
				<br />
				<div class="dl-mac">
					<a href="<?=$domain?>download.php?os=mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_MAC"]?></small>
				</div>
				<div class="dl-win">
					<a href="<?=$domain?>download.php?os=win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_WIN"]?></small>
				</div>
				<div class="dl-lin-32">
					<a href="<?=$domain?>download.php?os=linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_LIN32"]?></small>
				</div>
				<div class="dl-lin-64">
					<a href="<?=$domain?>download.php?os=linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_LIN64"]?></small>
				</div>
			</div>
		</section>

		<section id="how">
			<div class="fixed-width fadeInLeft wow">
				<h2><?=$langsite["HOW_TITLE"]?></h2>
				<h4><?=$langsite["HOW_DESC"]?></h4>
				<ul class="steps">
					<li class="icon-eye"><?=$langsite["HOW_1"]?></li>
					<li class="icon-hd"><?=$langsite["HOW_2"]?></li>
					<li class="icon-play"><?=$langsite["HOW_3"]?></li>
				</ul>
			</div>
			<img src="<?=$domain?>images/how-ui.png" class="ui-screenshot fadeInRight wow" alt="Popcorn Time UI">
		</section>

		<section id="get-app">
			<div class="text fadeIn wow">
				<h2><?=$langsite["GET_TITLE"]?></h2>
				<p><?=$langsite["GET_DESC"]?></p>
			</div>
			<ul class="platforms">
				<li class="mac icon-laptop fadeInUp wow" data-wow-delay=".2s">
					<a href="<?=$domain?>download.php?os=mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_MAC"]?></small>
				</li>
				<li class="win icon-screen fadeInUp wow" data-wow-delay=".4s">
					<a href="<?=$domain?>download.php?os=win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_WIN"]?></small>
				</li>
				<li class="lin-32 icon-window fadeInUp wow" data-wow-delay=".6s">
					<a href="<?=$domain?>download.php?os=linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_LIN32"]?></small>
				</li>
				<li class="lin-64 icon-window fadeInUp wow" data-wow-delay=".8s">
					<a href="<?=$domain?>download.php?os=linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"],$link_version)?></a>
					<small><?=$langsite["DL_DESC_LIN64"]?></small>
				</li>
			</ul>
		</section>

		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="<?=$domain?>" class="logo">Popcorn time</a>
				<ul>
					<!--<li class="social"><a href="<?=$link_fb?>" target="_blank" class="icon-facebook"> </a></li>-->
					<li class="social"><a href="<?=$link_tt?>" target="_blank" class="icon-twitter"> </a></li>
					<li class="github"><a href="<?=$link_gh?>" target="_blank" class="icon-github">Github</a></li>
                </ul>
			</nav>
			<footer>
				<hr>
				<i class="film"></i>
				<p><?=$langsite["FOOTER"]?><br /> <small><a href="<?=$domain?>tos">Terms of Service</a> — <a href="<?=$domain?>faq">FAQ</a></small></p>
			</footer>
		</section>
	</div>
	<script type="text/javascript" src="<?=$domain?>js/wow.js"></script>
	<script type="text/javascript" src="<?=$domain?>js/site.js"></script>
</body>
</html>