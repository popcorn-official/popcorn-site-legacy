<?php require_once(__DIR__ . "/inc/config.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="<?=DOMAIN?>tos">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700&subset=latin,vietnamese,cyrillic' rel='stylesheet' type='text/css'>
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

	<title><?=$langsite["TITLE_TOS"]?> - Popcorn Time</title>
	<meta name="description" content="<?=$langsite["SITE_DESC"]?>">
	<link rel="image_src" href="images/header-ui.jpg">
	
	<meta property="og:title" content="Popcorn Time">
	<meta property="og:type" content="website">
	<meta property="og:image" content="images/header-ui.jpg">
	<meta property="og:url" content="<?=DOMAIN?>">
	<meta property="og:site_name" content="Popcorn Time">
</head>
<body class="beta page">
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
				<li id="langswitch">
					<form action="#" method="post">
						<select name="lang">
							<?=$l->printLanguageOptions()?>
						</select>
					</form>
				</li>
				<li class="text"><a href="<?=LINK_HOME?>">HOME</a></li>
				<li class="text"><a href="<?=LINK_FAQ?>">FAQ</a></li>
			</ul>
		</nav>
	</section>
	
	<div class="text fadeInDown wow">
		<section id="tos" class="fixed-width">
			<div class="tos-container">
				<header>
					<h1>Terms of service</h1>
				</header>
			
				<h3>Your Acceptance</h3>
				<p>By using the "POPCORN TIME" app you signify your agreement to (1) these terms and conditions (the "Terms of Service").</p>

				<h3>Privacy Policy.</h3>
				<p>You understand that by using "POPCORN TIME" you may encounter material that you may deem to be offensive, indecent, or objectionable, and that such content may or may not be identified as having explicit material. "POPCORN TIME" will have no liability to you for such material – you agree that your use of "POPCORN TIME" is at your sole risk.</p>

				<h3>DISCLAIMERS</h3>
				<p>YOU EXPRESSLY AGREE THAT YOUR USE OF "POPCORN TIME" IS AT YOUR SOLE RISK. "POPCORN TIME" AND ALL PRODUCTS ARE PROVIDED TO YOU “AS IS” WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED. "POPCORN TIME" MAKES ABSOLUTELY NO WARRANTIES WHATSOEVER, EXPRESS OR IMPLIED. TO THE FULLEST EXTENT POSSIBLE UNDER APPLICABLE LAWS, YIFY DISCLAIMS ALL WARRANTIES, EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT, OR OTHER VIOLATIONS OF RIGHTS.</p>

				<h3>LIMITATION OF LIABILITY</h3>
				<p>"POPCORN TIME" IS NOT RESPONSIBLE FOR ANY PROBLEMS OR TECHNICAL MALFUNCTION OF ANY WEBSITE, NETWORK, COMPUTER SYSTEMS, SERVERS, PROVIDERS, COMPUTER EQUIPMENT, OR SOFTWARE, OR FOR ANY FAILURE DUE TO TECHNICAL PROBLEMS OR TRAFFIC CONGESTION ON THE INTERNET OR "POPCORN TIME" OR COMBINATION THEREOF, INCLUDING ANY INJURY OR DAMAGE TO USERS OR TO ANY COMPUTER OR OTHER DEVICE ON OR THROUGH WHICH "POPCORN TIME" IS PROVIDED. UNDER NO CIRCUMSTANCES WILL "POPCORN TIME" BE LIABLE FOR ANY LOSS OR DAMAGE, INCLUDING PERSONAL INJURY OR DEATH, RESULTING FROM YOUR USE OF "POPCORN TIME".</p>

				<h3>SOURCE MATERIAL</h3>
				<p>ALL MOVIES ARE NOT HOSTED IN ANY SERVER AND ARE STREAMED USING THE P2P BIT TORRENT PROTOCOL. ALL MOVIES ARE PULLED IN FROM THE YIFY MOVIE DATABASE. BY WATCHING A MOVIE WITH THIS APPLICATION YOU MIGHT BE COMMITING COPYRIGHT VIOLATIONS DEPENDING ON YOUR COUNTRY'S LAWS. WE DO NOT TAKE ANY RESPONSABILITIES.</p>

				<h3>Ability to Accept Terms of Service</h3>
				<p>By using "POPCORN TIME" or accessing this site you affirm that you are either more than 18 years of age, or an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in these Terms of Service, and to abide by and comply with these Terms of Service. In any case, you affirm that you are over the age of 13, as the Service is not intended for children under 13. If you are under 13 years of age, then please do not use the Service. There are lots of other great web sites for you. Talk to your parents about what sites are appropriate for you.</p>
			</div>
		</section>
		
		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="<?=LINK_HOME?>" class="logo">Popcorn time</a>
				<ul>
					<?php if(defined('LINK_FCBK')) { ?><li class="social"><a href="<?=LINK_FCBK?>" target="_blank" class="icon-facebook"></a></li><?php } ?>
					<?php if(defined('LINK_BLOG')) { ?><li class="social"><a href="<?=LINK_BLOG?>" target="_blank" class="icon-ghost"></a></li><?php } ?>
					<?php if(defined('LINK_TWTR')) { ?><li class="social"><a href="<?=LINK_TWTR?>" target="_blank" class="icon-twitter"></a></li><?php } ?>
					<?php if(defined('LINK_GTHB')) { ?><li class="github"><a href="<?=LINK_GTHB?>" target="_blank" class="icon-github">Github</a></li><?php } ?>
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
