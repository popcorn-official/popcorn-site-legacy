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

	<title>Popcorn Time - <?=$langsite["TITLE_FAQ"]?></title>
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
<body id="page-faq" class="beta">
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
	</section>

	<div class="container fadeIn wow">
		<section id="faq" class="fixed-width">
			<p class="warning"><?=$langfaq["WARNING_1"]?> <a href="<?=$domain?>"><?=$langfaq["WARNING_2"]?></a><br/>
			<?=$langfaq["WARNING_3"]?> <a href="<?=$domain?>">get-popcorn.com</a> <?=$langfaq["WARNING_4"]?></p>

			<article id="what">
				<h1><?=$langfaq["TITLE"]?></h1>
				<p><?=$langfaq["DESC_1"]?></p>
				<p><?=$langfaq["DESC_2"]?></p>
			</article>

			<article id="legal">
				<h2><?=$langfaq["LEGAL_Q"]?></h2>
				<p><?=$langfaq["LEGAL_A"]?></p>
			</article>

			<article id="seeding">
				<h2><?=$langfaq["SEED_Q"]?></h2>
				<p><?=$langfaq["SEED_A"]?></p>
			</article>

			<article id="storage">
				<h2><?=$langfaq["STORAGE_Q"]?></h2>
				<p><?=$langfaq["STORAGE_A"]?></p>
			</article>

			<article id="update">
				<h2><?=$langfaq["UPDATE_Q"]?></h2>
				<p><?=$langfaq["UPDATE_A"]?></p>
			</article>

			<article id="movies">
				<h2><?=$langfaq["MOVIES_Q"]?></h2>
				<p><?=$langfaq["MOVIES_A"]?></p>
			</article>

			<article id="languages">
				<h2><?=$langfaq["LANG_Q"]?></h2>
				<p><?=$langfaq["LANG_A"]?></p>
			</article>

			<article id="cant-launch">
				<h2><?=$langfaq["LAUNCH_Q"]?></h2>
				<p class="icon-mac"><strong><?=$langfaq["LAUNCH_Q1"]?></strong><br /><?=$langfaq["LAUNCH_A1"]?></p>
				<p class="icon-mac"><strong><?=$langfaq["LAUNCH_Q2"]?></strong><br />
					<?=$langfaq["LAUNCH_A2"]?>
					<ul class="step-code">
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/MacOS/node-webkit</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/crash_inspector</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/node-webkit\ Helper.app/Contents/MacOS/node-webkit\ Helper</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/node-webkit\ Helper\ EH.app/Contents/MacOS/node-webkit\ Helper\ EH</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/node-webkit\ Helper\ NP.app/Contents/MacOS/node-webkit\ Helper\ NP</span></li>
					</ul>
				</p>
			</article>

			<article id="stuck">
				<h2><?=$langfaq["STUCK_Q"]?></h2>
				<p><?=$langfaq["STUCK_A"]?></p>
			</article>

			<article id="select-subtitles">
				<h2><?=$langfaq["SUBS_Q"]?></h2>
				<p><?=$langfaq["SUBS_A"]?></p>
			</article>

			<article id="new-apps">
				<h2><?=$langfaq["BUILDS_Q"]?></h2>
				<p><?=$langfaq["BUILDS_A"]?></p>
			</article>
			
			<article id="devices">
				<h2><?=$langfaq["DEVICES_Q"]?></h2>
				<p><?=$langfaq["DEVICES_A"]?></p>
			</article>
			
			<article id="site">
				<h2><?=$langfaq["SITE_Q"]?></h2>
				<p><?=$langfaq["SITE_A"]?></p>
			</article>
		</section>

		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="/" class="logo">Popcorn time</a>
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
