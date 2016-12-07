<?php 
require_once 'config.php';
?>


<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
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
		
	<!-- Плеер-->
	<link href="jPlayer-2.9.2/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="jPlayer-2.9.2/lib/jquery.min.js"></script>
	<script type="text/javascript" src="jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="jPlayer-2.9.2/dist/add-on/jplayer.playlist.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			title:"Cro Magnon Man",
			mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
			oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
		},
		{
			title:"Your Face",
			mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
			oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
		},
		{
			title:"Cyber Sonnet",
			mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
			oga:"http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
		},
		{
			title:"Tempered Song",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
		},
		{
			title:"Hidden",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"
		},
		{
			title:"Lentement",
			free:true,
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg"
		},
		{
			title:"Lismore",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
		},
		{
			title:"The Separation",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg"
		},
		{
			title:"Beside Me",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-06-Beside-me.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-06-Beside-me.ogg"
		},
		{
			title:"Bubble",
			free:true,
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
		},
		{
			title:"Stirring of a Fool",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-08-Stirring-of-a-fool.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-08-Stirring-of-a-fool.ogg"
		},
		{
			title:"Partir",
			free: true,
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg"
		},
		{
			title:"Thin Ice",
			mp3:"http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3",
			oga:"http://www.jplayer.org/audio/ogg/Miaow-10-Thin-ice.ogg"
		}
	], {
		swfPath: "jPlayer-2.9.2/dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
});
//]]>
</script>
	
	</head>
	
	<body lang="ru">
	
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
		
		
		
		<!-- MAIN -->
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
										<div id="jquery_jplayer_1" class="jp-jplayer"></div>
										<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<div class="jp-gui jp-interface">
													<div class="jp-controls">
														<button class="jp-previous" role="button" tabindex="0">previous</button>
														<button class="jp-play" role="button" tabindex="0">play</button>
														<button class="jp-next" role="button" tabindex="0">next</button>
														<button class="jp-stop" role="button" tabindex="0">stop</button>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div class="jp-play-bar"></div>
														</div>
													</div>
													<div class="jp-volume-controls">
														<button class="jp-mute" role="button" tabindex="0">mute</button>
														<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
														<div class="jp-volume-bar">
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
													<div class="jp-time-holder">
														<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
														<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
													</div>
													<div class="jp-toggles">
														<button class="jp-repeat" role="button" tabindex="0">repeat</button>
														<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
													</div>
												</div>
												<div class="jp-playlist">
													<ul>
														<li>&nbsp;</li>
													</ul>
												</div>
											</div>
										</div>
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
		</div>
		<!-- ENDS MAIN -->
		
		
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





