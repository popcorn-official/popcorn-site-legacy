<?php require_once(__DIR__ . "/inc/config.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="<?=DOMAIN?>">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<title>Popcorn Time - <?=$langsite["TITLE_INDEX"]?></title>
	<meta name="description" content="<?=$langsite["SITE_DESC"]?>">
	<link rel="image_src" href="images/header-ui.jpg">
	
	<?php include_once('inc/social_tags.php'); ?>
</head>
<body class="beta">
	<section id="header">

		<nav class="fixed-width fadeInDown wow">
			<a href="<?=LINK_HOME?>" id="logo">Popcorn Time</a>
			<ul class="align-right">
				<?php if(defined('LINK_FCBK')) { ?><li class="social"><a href="<?=LINK_FCBK?>" target="_blank" class="icon-facebook"></a></li><?php } ?>
				<?php if(defined('LINK_BLOG')) { ?><li class="social"><a href="<?=LINK_BLOG?>" target="_blank" class="icon-ghost"></a></li><?php } ?>
				<?php if(defined('LINK_TWTR')) { ?><li class="social"><a href="<?=LINK_TWTR?>" target="_blank" class="icon-twitter"></a></li><?php } ?>
				<?php if(defined('LINK_GTHB')) { ?><li class="social"><a href="<?=LINK_GTHB?>" target="_blank" class="icon-github"></a></li><?php } ?>
			</ul>

			<ul class="align-left">
				<div id="langswitch">
					<form action="#" method="post">
						<select name="lang">
							<?=$l->printLanguageOptions()?>
						</select>
					</form>
				</div>
				<li class="text"><a href="<?=LINK_FAQ?>">FAQ</a></li>
				<li class="text"><a href="<?=LINK_TOS?>">TOS</a></li>
			</ul>
		</nav>

		<div class="text fadeInDown wow">
			<h1><?=$langsite["HEADER"]?></h1>
			<p><?=$langsite["SUBHEADER"]?></p>
		</div>

		<ul id="links">
			<li class="download dl-mac">
				<a href="<?=LINK_DL?>/mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_MAC"]?></small>
			</li>
			<li class="download dl-win">
				<a href="<?=LINK_DL?>/win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_WIN"]?></small>
			</li>
			<li class="download dl-lin-32">
				<a href="<?=LINK_DL?>/linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_LIN32"]?></small>
			</li>
			<li class="download dl-lin-64">
				<a href="<?=LINK_DL?>/linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_LIN64"]?></small>
			</li>
		</ul>
		<img src="images/header-ui.jpg" class="ui-screenshot fadeInUp wow" alt="Popcorn Time UI">
	</section>

	<div class="container">
		<div class="warning fadeIn wow">
			<h5 class="icon-info"><?=$langsite["DISCLAIMER_TITLE"]?></h5>
			<p><?=$langsite["DISCLAIMER_DESC"]?></p>
		</div>
		<section id="features" class="fixed-width">
			<div class="clear-fix">
				<article class="fadeInLeft wow">
					<img src="images/icon-best.gif" alt="">
					<h5><?=$langsite["FEAT_MOVIES"]?></h5>
					<p><?=$langsite["FEAT_MOVIES_DESC"]?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="images/icon-watch.gif" alt="">
					<h5><?=$langsite["FEAT_NORESTRICTION"]?></h5>
					<p><?=$langsite["FEAT_NORESTRICTION_DESC"]?></p>
				</article>

				<article class="fadeInLeft wow">
					<img src="images/icon-search.gif" alt="">
					<h5><?=$langsite["FEAT_CATALOGUE"]?></h5>
					<p><?=$langsite["FEAT_CATALOGUE_DESC"]?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="images/icon-subs.gif" alt="">
					<h5><?=$langsite["FEAT_QUALITY"]?></h5>
					<p><?=$langsite["FEAT_QUALITY_DESC"]?></p>
				</article>
			</div>

			<div class="width-70 align-center action fadeInUp wow">
				<img src="images/pochoclin.gif" alt="Pochoclin" class="align-center pochoclin">
				<hr>
				<h2><?=$langsite["FEAT_BEST"]?></h2>
				<br>
				<div class="dl-mac">
					<a href="<?=LINK_DL?>/mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_MAC"]?></small>
				</div>
				<div class="dl-win">
					<a href="<?=LINK_DL?>/win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_WIN"]?></small>
				</div>
				<div class="dl-lin-32">
					<a href="<?=LINK_DL?>/linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_LIN32"]?></small>
				</div>
				<div class="dl-lin-64">
					<a href="<?=LINK_DL?>/linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
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
			<img src="images/how-ui.jpg" class="ui-screenshot fadeInRight wow" alt="Popcorn Time UI">
		</section>

		<section id="get-app">
			<div class="text fadeIn wow">
				<h2><?=$langsite["GET_TITLE"]?></h2>
				<p><?=$langsite["GET_DESC"]?></p>
			</div>
			<ul class="platforms">
				<li class="mac icon-laptop fadeInUp wow" data-wow-delay=".2s">
					<a href="<?=LINK_DL?>/mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_MAC"]?></small>
				</li>
				<li class="win icon-screen fadeInUp wow" data-wow-delay=".4s">
					<a href="<?=LINK_DL?>/win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_WIN"]?></small>
				</li>
				<li class="lin-32 icon-window fadeInUp wow" data-wow-delay=".6s">
					<a href="<?=LINK_DL?>/linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_LIN32"]?></small>
				</li>
				<li class="lin-64 icon-window fadeInUp wow" data-wow-delay=".8s">
					<a href="<?=LINK_DL?>/linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_LIN64"]?></small>
				</li>
			</ul>
		</section>

		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="<?=LINK_HOME?>" class="logo">Popcorn time</a>
				<ul>
					<?php if(defined('LINK_FCBK')) { ?><li class="social"><a href="<?=LINK_FCBK?>" target="_blank" class="icon-facebook"></a></li><?php } ?>
					<?php if(defined('LINK_BLOG')) { ?><li class="social"><a href="<?=LINK_BLOG?>" target="_blank" class="icon-ghost"></a></li><?php } ?>
					<?php if(defined('LINK_TWTR')) { ?><li class="social"><a href="<?=LINK_TWTR?>" target="_blank" class="icon-twitter"></a></li><?php } ?>
					<?php if(defined('LINK_GTHB')) { ?><li class="social"><a href="<?=LINK_GTHB?>" target="_blank" class="icon-github"></a></li><?php } ?>
                </ul>
			</nav>
			<footer>
				<hr>
				<i class="film"></i>
				<p><?=$langsite["FOOTER"]?><br> <small><a href="<?=LINK_TOS?>">Terms of Service</a> — <a href="<?=LINK_FAQ?>">FAQ</a></small></p>
			</footer>
		</section>
	</div>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/site.js"></script>
    <script type="text/javascript" src="js/jquery.polyglot.language.switcher.js"></script>
</body>
</html>
