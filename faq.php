<?php require_once(__DIR__ . '/_config.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
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

	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">

	<title>Frequently Asked Questions - Popcorn Time</title>
	<meta name="description" content="Stream movies from torrents. Skip the downloads. Launch, click, watch.">
	<link rel="image_src" href="/images/header-ui.jpg">

	<meta property="og:title" content="Popcorn Time">
	<meta property="og:type" content="website">
	<meta property="og:image" content="/images/header-ui.jpg">
	<meta property="og:url" content="<?php echo DOMAIN; ?>">
	<meta property="og:site_name" content="Popcorn Time">
</head>
<body class="beta page">
	<section id="header">
		<nav class="fixed-width fadeInDown wow">
			<a href="<?php echo LINK_HOME; ?>" id="logo">Popcorn Time</a>
			<ul class="align-right">
				<?php if(defined('LINK_FCBK')) { ?><li class="social"><a href="<?php echo LINK_FCBK; ?>" target="_blank" class="icon-facebook"></a></li><?php } ?>
				<?php if(defined('LINK_TWTR')) { ?><li class="social"><a href="<?php echo LINK_TWTR; ?>" target="_blank" class="icon-twitter"></a></li><?php } ?>
				<?php if(defined('LINK_GTHB')) { ?><li class="social"><a href="<?php echo LINK_GTHB; ?>" target="_blank" class="icon-github"></a></li><?php } ?>
			</ul>

			<ul class="align-left">
				<li class="text"><a href="<?php echo LINK_HOME; ?>">HOME</a></li>
				<li class="text"><a href="<?php echo LINK_TOS; ?>">TOS</a></li>
			</ul>
		</nav>
	</section>

	<div class="container fadeIn wow">
		<section id="faq" class="fixed-width">
			<p class="warning">To enjoy a great experience, always make sure you're running <a href="<?php echo DOMAIN; ?>" target="_blank">the latest Popcorn Time version</a>. <br>
			Our only official site is <a href="/" target="_blank">get-popcorn.com</a> (for now). Do not get the app from anywhere else, as there's a few fake sites going around.</p>

			<article id="what">
				<h1>Frequently Asked Questions</h1>
				<p>Popcorn Time! is the result of many developers and designers putting a bunch of APIs together to make the experience of watching torrent movies as simple as possible.</p>
				<p>We are an open source project. We are from all over the world. We love our movies. And boy, do we love popcorn!</p>
			</article>

			<article id="legal">
				<h2>Is this legal?</h2>
				<p>Depends on where you're located, really. Once again: we're using torrents, so if you really care, you'd better google what the legal situation regarding this protocol is where you live.</p>
			</article>

			<article id="seeding">
				<h2>Popcorn Time works using torrents, fair enough. But am I seeding while watching a movie?</h2>
				<p>Indeed, you are! You're going to be uploading bits and bytes of the movie for as long as you're watching it in Popcorn Time.</p>
			</article>

			<article id="storage">
				<h2>What happens to the movies after I'm done?</h2>
				<p>Your movies will stay buried in a secret folder somewhere in your drive until you restart your computer. Then they will be gone for good.</p>
			</article>

			<article id="update">
				<h2>Will there be a new version?</h2>
				<p>Most definitely! You're going to have to download it manually for now, but fear not! If you're on version Beta 2.x or upwards, you'll be notified within the app. Other than that, we'll let you know through Facebook and/or Twitter.</p>
			</article>

			<article id="movies">
				<h2>How come you've got the latest movies?</h2>
				<p>We search for movies uploaded by YIFY. Better ask them how they are handling this!</p>
			</article>

			<article id="languages">
				<h2>Will you be adding movies in my language?</h2>
				<p>Chances are that most (if not all) of the movies available in Popcorn Time will be in English. However, languages for subtitles and the app itself are constantly being added by our lovely contributors.</p>
			</article>

			<article id="cant-launch">
				<h2>Why can't I launch Popcorn Time?</h2>
				<p class="icon-mac"><strong>Your system may prevent unsigned apps from being run</strong><br>Go to <span class="code">System Preferences > Security > Allow Apps downloaded from > Anywhere</span> and try to launch Popcorn Time! again.</p>
				<p class="icon-mac"><strong>You may have not have enough User Priviliges</strong><br>
					Open a Terminal, and type:
					<ul class="step-code">
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/MacOS/node-webkit</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/crash_inspector</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/node-webkit\ Helper.app/Contents/MacOS/node-webkit\ Helper</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/node-webkit\ Helper\ EH.app/Contents/MacOS/node-webkit\ Helper\ EH</span></li>
						<li><span class="code">$ chmod +x /Applications/Popcorn\ Time.app/Contents/Frameworks/node-webkit\ Helper\ NP.app/Contents/MacOS/node-webkit\ Helper\ NP</span></li>
					</ul></p>
			</article>

			<article id="stuck">
				<h2>I can't get past the initial "Please wait..." screen :(</h2>
				<p>Living on Queen Elizabeth's realm and using old version (<2.8), aren't you? There's a workaround for this issue in version 2.8 and onwards, but there's no guarantee it will work. Check out the <a href='http://en.wikipedia.org/wiki/Websites_blocked_in_the_United_Kingdom'>Black list</a> for more information on website blocking in the UK.</p>
			</article>

			<article id="select-subtitles">
				<h2>Why can't I select subtitles?</h2>
				<p>You may have to wait until all of the movie data (cover, summary, length, etc...) is retrieved. Sometimes it may be something else!</p>
			</article>

			<article id="new-apps">
				<h2>Thinking about launching for Android/iOS/Chromecast/Smart TVs/Commodore 64?</h2>
				<p>Our efforts are currently focussed towards making the best desktop app for watching torrent movies. So launching versions for other devices is not in our immediate roadmap.</p>
			</article>
			
			<article id="devices">
				<h2>Does the app work on Raspberry Pi/ChomeBook/BeagleBone?</h2>
				<p>Currently the app is compiled only for Win/Linux32/Linux64/Mac but if you want to try it on ARM go for it!</p>
			</article>
			
			<article id="site">
				<h2>You're changing site/repo more often I change underwear! Where's the best place to stay up to date with the project?</h2>
				<p>Well yes, the app has had some difficult times since its inception. The best place for the latest info and updates is the IRC channel #popcorntime on freenode. </p>
			</article>
		</section>

		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="<?php echo LINK_HOME; ?>" class="logo">Popcorn time</a>
				<ul>
					<?php if(defined('LINK_FCBK')) { ?><li class="social"><a href="<?php echo LINK_FCBK; ?>" target="_blank" class="icon-facebook"></a></li><?php } ?>
					<?php if(defined('LINK_TWTR')) { ?><li class="social"><a href="<?php echo LINK_TWTR; ?>" target="_blank" class="icon-twitter"> </a></li><?php } ?>
					<?php if(defined('LINK_GTHB')) { ?><li class="github"><a href="<?php echo LINK_GTHB; ?>" target="_blank" class="icon-github">Github</a></li><?php } ?>
                </ul>
			</nav>
			<footer>
				<hr>
				<i class="film"></i>
				<p>Made with <span>&lt;3</span> by a bunch of geeks from All Around The World<br> <small><a href="<?php echo LINK_TOS; ?>">Terms of Service</a> &mdash; <a href="<?php echo LINK_FAQ; ?>">FAQ</a></small></p>
			</footer>
		</section>
	</div>
	<script type="text/javascript" src="/js/wow.js"></script>
	<script type="text/javascript" src="/js/site.js"></script>
</body>
</html>
