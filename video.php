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
//<![CDATA[
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			title:"Big Buck Bunny Trailer",
			artist:"Blender Foundation",
			free:true,
			m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
			ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
			webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
			poster:"http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
		},
		{
			title:"Finding Nemo Teaser",
			artist:"Pixar",
			m4v: "http://www.jplayer.org/video/m4v/Finding_Nemo_Teaser.m4v",
			ogv: "http://www.jplayer.org/video/ogv/Finding_Nemo_Teaser.ogv",
			webmv: "http://www.jplayer.org/video/webm/Finding_Nemo_Teaser.webm",
			poster: "http://www.jplayer.org/video/poster/Finding_Nemo_Teaser_640x352.png"
		},
		{
			title:"Incredibles Teaser",
			artist:"Pixar",
			m4v: "http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v",
			ogv: "http://www.jplayer.org/video/ogv/Incredibles_Teaser.ogv",
			webmv: "http://www.jplayer.org/video/webm/Incredibles_Teaser.webm",
			poster: "http://www.jplayer.org/video/poster/Incredibles_Teaser_640x272.png"
		}
	], {
		swfPath: "jPlayer-2.9.2/dist/jplayer",
		supplied: "webmv, ogv, m4v",
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
											<li><a href="audio.php">Аудио</a></li>
											<li class="current-menu-item"><a href="video.php">Видео</a></li>
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
					<h1>Видео</h1>
				</div>
				<div class='mh-div'></div>
				
	        	 <div class="home-block clearfix" >
	        		<div class="clearfix" >
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="title">
										<h3>Посмотри видео с концерта и найди себя! А так же просто насладись нашими выступлениями</h3>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div id="player">
										<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<div id="jquery_jplayer_1" class="jp-jplayer"></div>
												<div class="jp-gui">
													<div class="jp-video-play">
														<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
													</div>
													<div class="jp-interface">
														<div class="jp-progress">
															<div class="jp-seek-bar">
																<div class="jp-play-bar"></div>
															</div>
														</div>
														<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
														<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
														<div class="jp-controls-holder">
															<div class="jp-controls">
																<button class="jp-previous" role="button" tabindex="0">previous</button>
																<button class="jp-play" role="button" tabindex="0">play</button>
																<button class="jp-next" role="button" tabindex="0">next</button>
																<button class="jp-stop" role="button" tabindex="0">stop</button>
															</div>
															<div class="jp-volume-controls">
																<button class="jp-mute" role="button" tabindex="0">mute</button>
																<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value"></div>
																</div>
															</div>
															<div class="jp-toggles">
																<button class="jp-repeat" role="button" tabindex="0">repeat</button>
																<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
																<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
															</div>
														</div>
														<div class="jp-details">
															<div class="jp-title" aria-label="title">&nbsp;</div>
														</div>
													</div>
												</div>
												<div class="jp-playlist">
													<ul>
														<!-- The method Playlist.displayPlaylist() uses this unordered list -->
														<li>&nbsp;</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="title">
										<h4>Описание мероприятия</h4>
									</div>
									<div class="panel-group" id="accordion">
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											  Видео 1
											</a>
										  </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
										  <div class="panel-body">
											Описание 1
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											  Видео 2
											</a>
										  </h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
										  <div class="panel-body">
											Описание 2
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Видео 3
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											Описание 3
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Видео 4
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											Описание 4
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Видео 5
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Описание 5
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Видео 6
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Описание 6
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											 Видео 7
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Описание 7
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											  Видео 8
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
										  <div class="panel-body">
											 Описание 8
										  </div>
										</div>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="title">
										<h3>Ты снимаешь концерты и хочешь набрать опыта на нашем выступлении? — Оставь заявку.</h3>
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="zayavka_form">
										<form class="form-horizontal" role="form">
									  <div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">ФИО</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputName" placeholder="ФИО">
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputTel" class="col-sm-2 control-label">Телефон</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputTel" placeholder="Телефон">
										</div>
									  </div>
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Твоя страница</label>
										<div class="col-sm-10">
										  <input type="email" class="form-control" id="inputEmail3" placeholder="Адрес страницы с работами: VKontakte/Facebook/Site">
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-8">
										  <button type="submit" class="btn btn-default">Отправить</button>
										</div>
									  </div>
									</form>
									</div>
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
					<div class="left">
						<p>Контакты АЛЕКСАНДРА ВЛАДЫКИ:</p>
						<ul>
							<li>vk.com/avladyka</li> 
							<li>facebook.com/iavladyka</li> 
							<li>avladyka@bk.ru</li>
						</ul>
						<p>Над сайтом работали:</p>
						<ul>
							<li>Разработчик: <a href="https://vk.com/dashenkazv">Звягина Дарья</a></li>
							<li>Дизайнер и копирайтер: <a href="https://vk.com/lizaandreevna">Лазбаникова Елизавета</a></li>
						</ul>
					</div>
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





