<?php
	require_once(__DIR__ . "/inc/config.php");

	if(isset($_GET['os']) && array_key_exists($_GET['os'], $releases)) {
		$download_file = $releases[$_GET['os']];
	} else {
		header("Location: " . LINK_HOME);
	}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="<?=DOMAIN?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700&subset=latin,vietnamese,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
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
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">

	<title><?=$langsite["TITLE_DL"]?> - Popcorn Time</title>
	<meta name="description" content="<?=$langsite["SITE_DESC"]?>">
	<link rel="image_src" href="/images/header-ui.jpg">

	<?php include_once(__DIR__ . '/inc/social-tags.php'); ?>
	<?php if(isset($download_file)) { ?><meta http-equiv="refresh" content="2;url=<?=$download_file;?>"><?php } ?>
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
				<li class="text"><a href="<?=LINK_TOS?>">TOS</a></li>
			</ul>
		</nav>
	</section>

	<div class="container fadeIn wow">
		<section id="downloads" class="fixed-width">
			<h1><?=$langsite["DL_THANKYOU"]?></h1>
			<p><?=$langsite["DL_STARTING_1"]?> <a href="<?=$download_file?>"><?=$langsite["DL_STARTING_2"]?></a> <?=$langsite["DL_STARTING_3"]?></p>

			<p>
				<!-- Begin MailChimp Signup Form -->
				<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
				<div id="mc_embed_signup">
					<form action="http://get-popcorn.us8.list-manage2.com/subscribe/post?u=afbd4b6f42dd2b6ddb4f34b9b&amp;id=b1d0d0a4a1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<h2><?=$langsite["MAIL_SUBSCRIBE"]?></h2>
						<div class="mc-field-group">
							<label for="mce-EMAIL"><?=$langsite["MAIL_EMAIL"]?></label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" autofocus>
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response"></div>
							<div class="response" id="mce-success-response"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;"><input type="text" name="b_afbd4b6f42dd2b6ddb4f34b9b_b1d0d0a4a1" value=""></div>
						<div class="clear"><input type="submit" value="<?=$langsite["MAIL_SUBSCRIBE_BTN"]?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
				</div>
				<script type="text/javascript" src="/js/mail.js"></script>
				<!--End mc_embed_signup-->
			</p>
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
	
	<div id="modal-overlay"></div>
	<div id="modal-popup">
		<div class="header-modal">
			Help us the spread the word.
			<a class="close">&#10006;</a>
		</div>
		<div class="modal-body">
			<p>Some people are saying we are dead, you can be sure it's not true.</p>
			<p>We are stronger than ever, with the idea to move this project to another level.</p>
			<p>A new version will be ready soon, and we need your help to promote it.</p>
			<section class="share-container">
				<div>
					<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="<?=DOMAIN?>"></a>
					<a class="addthis_button_tweet" addthis:url="<?=DOMAIN?>"></a>
				</div>
			</section>
			<a class='btn-main' href="http://discuss.get-popcorn.com/t/updated-official-preview-april-23-2014/74" target='_blank'>Click here to see a preview of 0.3</a>
		</div>
	</div>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="/js/wow.js"></script>
	<script type="text/javascript" src="/js/site.js"></script>
    <script type="text/javascript" src="/js/jquery.polyglot.language.switcher.js"></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=224983064364244";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e5fa81f74c94ef8"></script>

</body>
</html>
