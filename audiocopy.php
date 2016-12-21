<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Освобождение</title>
	
	
	
		
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" media="all" href="css/style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- JS-->
	<script src="js/jquery-1.6.4.min.js"></script>
	<script src="js/css3-mediaqueries.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/tabs.js"></script>
	
	<!-- superfish -->
	<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
	<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
	<script  src="js/superfish-1.4.8/js/superfish.js"></script>
	<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
	<!-- ENDS superfish -->
	
	<!-- prettyPhoto -->
	<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
	<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
	<!-- ENDS prettyPhoto -->
	
	<!-- poshytip -->
	<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
	<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
	<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
	<!-- ENDS poshytip -->
		
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
		
	<!-- Flex Slider -->
	<link rel="stylesheet" href="css/flexslider.css" >
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- ENDS Flex Slider -->
	
	<!-- Less framework -->
	<link rel="stylesheet" media="all" href="css/lessframework.css"/>
	
	<!-- modernizr -->
	<script src="js/modernizr.js"></script>
		
	<!-- SKIN -->
	<link rel="stylesheet" media="all" href="css/skin.css"/>
	
	<!-- Player -->
	<script src="player/jquery.js"></script>
	<script src="player/audio.js"></script>
	
	
	
	<script>
		
		  $(function() { 
			// Setup the player to autoplay the next track
			var a = audiojs.createAll({
			  trackEnded: function() {
				var next = $('ol li.playing').next();
				if (!next.length) next = $('ol li').first();
				next.addClass('playing').siblings().removeClass('playing');
				audio.load($('a', next).attr('data-src'));
				audio.play();
			  }
			});
			
			// Load in the first track
			var audio = a[0];
				first = $('ol a').attr('data-src');
			$('ol li').first().addClass('playing');
			audio.load(first);

			// Load in a track on click
			$('ol li').click(function(e) {
			  e.preventDefault();
			  $(this).addClass('playing').siblings().removeClass('playing');
			  audio.load($('a', this).attr('data-src'));
			  audio.play();
			});
			// Keyboard shortcuts
			$(document).keydown(function(e) {
			  var unicode = e.charCode ? e.charCode : e.keyCode;
				 // right arrow
			  if (unicode == 39) {
				var next = $('li.playing').next();
				if (!next.length) next = $('ol li').first();
				next.click();
				// back arrow
			  } else if (unicode == 37) {
				var prev = $('li.playing').prev();
				if (!prev.length) prev = $('ol li').last();
				prev.click();
				// spacebar
			  } else if (unicode == 32) {
				audio.playPause();
			  }
			})
		  });
		</script>
  </head>
  <body>
  
  <header>
			<div class="wrapper clearfix">
					<div class="row">
					<div class="col-md-2">
						<div id="logo">
							<a href="/"><img  src="img/logomin.png" alt="Simpler"></a>
						</div>
					</div>
					<div class="col-md-10">
						<div id="menu" >
							<nav class="navbar navbar-default">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header ">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a class="navbar-brand text-center" href="#">Меню</a>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav navbar-right ">
											<li><a href="index.php">Главная</a></li>
											<li><a href="about.php">О нас</a></li>
											<li><a href="news.php">Новости</a></li>
											<li><a href="sponsor.php">Спонсорам</a></li>
											<li><a href="photo.php">Фото</a></li>
											<li class="current-menu-item"><a href="audio.php">Аудио</a></li>
											<li><a href="video.php">Видео</a></li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
	  
	  
	 <div id="main">	
		<div class="conteiner">
			<div class="wrapper clearfix">
					<div class="masthead clearfix">
						<h1>Аудио</h1>
					</div>
					<div class='mh-div'></div>
					
					
	        	<div class="home-block clearfix" >
	        		<div class="clearfix" >
					
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<div class="title">
									<h3>Предлагаем тебе послушать весь наш репертуар от А до Я</h3>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div id="player">
								  <div class="audiojs " classname="audiojs" id="audiojs_wrapper0"><audio preload="" src="http://kolber.github.io/audiojs/demos/mp3/01-dead-wrong-intro.mp3"></audio>          <div class="play-pause">             <p class="play"></p>             <p class="pause"></p>             <p class="loading"></p>             <p class="error"></p>           </div>           <div class="scrubber">             <div class="progress" style="width: 0px;"></div>             <div class="loaded" style="width: 280px;"></div>           </div>           <div class="time">             <em class="played">00:00</em>/<strong class="duration">03:57</strong>           </div>           <div class="error-message"></div></div>
								  <ol>
									<li class="playing"><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/01-dead-wrong-intro.mp3">мертвы неправильно интро</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/02-juicy-r.mp3">сочно-р</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/03-its-all-about-the-crystalizabeths.mp3">все дело в crystalizabeths</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/04-islands-is-the-limit.mp3">островов это предел</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/05-one-more-chance-for-a-heart-to-skip-a-beat.mp3">еще один шанс, чтобы сердце замирало</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">суицидальные фантазии</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/07-everyday-shelter.mp3">каждый день приют</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/08-basic-hypnosis.mp3">основная гипноз</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/09-infinite-victory.mp3">бесконечные победы</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/10-the-curious-incident-of-big-poppa-in-the-nighttime.mp3">любопытный инцидент Биг паппа в ночное время</a></li>
									<li><a href="http://kolber.github.io/audiojs/demos/test6.html#" data-src="http://kolber.github.io/audiojs/demos/mp3/11-mo-stars-mo-problems.mp3">МО Из МО проблемы</a></li>
								  </ol>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
									<div class="title">
										<h4>Интересные факты</h4>
									</div>
									<div class="panel-group" id="accordion">
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											  Песня 1
											</a>
										  </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
										  <div class="panel-body">
											Интересный факт 1
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											  Песня 2
											</a>
										  </h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
										  <div class="panel-body">
											Интресный факт 2
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Песня 3
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Интересный факт 3
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Песня 4
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Интересный факт 4
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Песня 5
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Интересный факт 5
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Песня 6
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Интересный факт 6
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Песня 7
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Интересный факт 7
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Песня 8
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Интересный факт 8
										  </div>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="title">
										<h3>Понравилось? Тогда приходи к нам на концерт!</h3>
										<h4><a href="#">Подробнее</a></h4>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer>	
			
			<div class="wrapper clearfix">
				
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left">Все права защищены</div>
					<div class="right">
						<ul id="social-bar">
							<li><a href=""  title="Become a fan" class="poshytip"><img src="img/social/facebook.png"  alt="Facebook" /></a></li>
							<li><a href="" title="Follow my tweets" class="poshytip"><img src="img/social/twitter.png"  alt="twitter" /></a></li>
							<li><a href=""  title="Add to the circle" class="poshytip"><img src="img/social/plus.png" alt="Google plus" /></a></li>
						</ul>
					</div>
				</div>	
				<!-- ENDS bottom -->		

			</div>
		</footer>
		
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>
			
			<script src="http://code.jquery.com/jquery.min.js"></script>
			<script src="js/moment.js"></script>
			<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>

</body>
</html>