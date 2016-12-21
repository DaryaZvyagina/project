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
		
		<!-- Календарь событий-->
		<link rel="stylesheet" href="css/eventCalendar.css">
		<link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">
		
		
		
		<!-- JS -->
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
		
		<!-- Masonry -->
		<script src="js/masonry.min.js" ></script>
		<script src="js/imagesloaded.js" ></script>
		<!-- ENDS Masonry -->
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="css/lessframework.css"/>
		
		<!-- modernizr -->
		<script src="js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="css/skin.css"/>
		
		<!-- подключение CSS файла Fancybox -->
		<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<!-- Подключение JS файла Fancybox -->
		<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
		
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
											<li class="current-menu-item"><a href="photo.php">Фото</a></li>
											<li><a href="audio.php">Аудио</a></li>
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
					<h1>Фотогалерея</h1>
				</div>
				<div class='mh-div'></div>
				
	        	 <div class="home-block clearfix" >
	        		<div class="clearfix" >
							<div class="row"> 
								<div class="col-xs-12 col-md-8">
									<div class="col-xs-12 col-md-12"> 
									<div class="photo">
										<a class="fancyimage" data-fancybox-group="group" href="img/slides/01.jpg"> 
										  <img class="img-responsive" src="img/slides/01.jpg" /> 
										</a> 
									</div>
									</div>
									<div class="col-xs-12 col-md-12 "> 
										<div class="col-xs-12 col-md-6">
											<div class="photo">
												<a class="fancyimage" data-fancybox-group="group" href="img/slides/02.jpg"> 
													<img class="img-responsive" src="img/slides/02.jpg" /> 
												</a>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="photo">
												<a class="fancyimage" data-fancybox-group="group" href="img/slides/03.jpg"> 
													<img class="img-responsive" src="img/slides/03.jpg" /> 
												</a>
											</div>
										</div>
									</div>
								</div> 
								<div class="col-xs-12 col-md-4">
									<div class="col-xs-12 col-md-12 ">
										<div class="photo">
											<a class="fancyimage" data-fancybox-group="group" href="img/slides/04.jpg"> 
												<img class="img-responsive" src="img/slides/04.jpg" /> 
											</a>
										</div>
									</div> 
									<div class="col-xs-12 col-md-12 "> 
										<div class="photo">
											<a class="fancyimage" data-fancybox-group="group" href="img/slides/01.jpg"> 
												<img class="img-responsive" src="img/slides/01.jpg" /> 
											</a>
										</div>
									</div>	
									<div class="col-xs-12 col-md-12 ">
										<div class="photo">
											<a class="fancyimage" data-fancybox-group="group" href="img/slides/02.jpg"> 
												<img class="img-responsive" src="img/slides/02.jpg" /> 
											</a>
										</div>
									</div> 
								</div> 
							</div>
							
							<div class="row"> 
								<div class="col-xs-12 col-md-4">
									<div class="col-xs-12 col-md-12 ">
										<div class="photo">
											<a class="fancyimage" data-fancybox-group="group" href="img/slides/03.jpg"> 
												<img class="img-responsive" src="img/slides/03.jpg" /> 
											</a>
										</div>
									</div> 
									<div class="col-xs-12 col-md-12 "> 
										<div class="photo">
											<a class="fancyimage" data-fancybox-group="group" href="img/slides/04.jpg"> 
												<img class="img-responsive" src="img/slides/04.jpg" /> 
											</a>
										</div>
									</div>	
									<div class="col-xs-12 col-md-12 ">
										<div class="photo">
											<a class="fancyimage" data-fancybox-group="group" href="img/slides/01.jpg"> 
												<img class="img-responsive" src="img/slides/01.jpg" /> 
											</a>
										</div>
									</div> 
								</div> 
								<div class="col-xs-12 col-md-8">
									<div class="col-xs-12 col-md-12"> 
										<div class="photo">
											<a class="fancyimage" data-fancybox-group="group" href="img/slides/02.jpg"> 
												<img class="img-responsive" src="img/slides/02.jpg" /> 
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-12 "> 
										<div class="col-xs-12 col-md-6">
											<div class="photo">
												<a class="fancyimage" data-fancybox-group="group" href="img/slides/03.jpg"> 
													<img class="img-responsive" src="img/slides/03.jpg" /> 
												</a>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="photo">
												<a class="fancyimage" data-fancybox-group="group" href="img/slides/04.jpg"> 
													<img class="img-responsive" src="img/slides/04.jpg" /> 
												</a>
											</div>
										</div>
									</div>
								</div> 
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">
								<!--Тут будет пагинация -->
									<?php
									  // $count = 5;// Количество записей на странице
									  // $page = $_GET["page"];// Узнаём номер страницы
									  // $shift = $count * ($page - 1);// Смещение в LIMIT. Те записи, порядковый номер которого больше этого числа, будут выводиться.
									  // $select = "SELECT id, img_gallery FROM photo_gallery LIMIT $shift, $count";
									  // $result = mysqli_query($db, $select) or die(mysqli_error($db));// Делаем выборку $count записей, начиная с $shift + 1.
									  // /* Выводим результат */
									   // while($row = mysqli_fetch_assoc($result)) {
										// print_r($row);
										// echo "<br />";
									  // }
									?>
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
										<form class="form-horizontal" role="form" method="post" action="zayavka_save.php">
										  <div class="form-group">
											<label for="name_user" class="col-sm-2 control-label">ФИО</label>
											<div class="col-sm-10">
											  <input name="name_user"  type="text" class="form-control" id="name_user" placeholder="ФИО">
											</div>
										  </div>
										  <div class="form-group">
											<label for="tel_user" class="col-sm-2 control-label">Телефон</label>
											<div class="col-sm-10">
											  <input name="tel_user" type="text" class="form-control" id="tel_user" placeholder="Телефон">
											</div>
										  </div>
										  <div class="form-group">
											<label for="site_user" class="col-sm-2 control-label">Твоя страница</label>
											<div class="col-sm-10">
											  <input name="site_user" type="text" class="form-control" id="site_user" placeholder="Адрес страницы с работами: VKontakte/Facebook/Site">
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
			<div id="fold"></div>
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
							<li><a href="https://www.facebook.com/svobodamusic/?fref=ts" class="poshytip"><img src="img/social/facebook.png"  alt="Facebook" /></a></li>
							<li><a href="" class="poshytip"><img src="img/social/instagram.png"  alt="instagram" /></a></li>
							<li><a href="https://vk.com/svobodamusic" class="poshytip"><img src="img/social/vkontakte.png" alt="vkontakte" /></a></li>
							<li><a href="https://www.youtube.com/channel/UCaooa3NGq7ADEZdfyHmvBbw" class="poshytip"><img src="img/social/youtube.png" alt="youtube" /></a></li>
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
			
			<script type="text/javascript"> 
			  $(document).ready(function() { 
				$("a.fancyimage").fancybox(); 
			  }); 
			</script>
			
	</body>
	
</html>





