<?php 
require_once 'config.php';
require_once 'functions.php';
$events = get_events();
$events = get_json($events);
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
											<li class="current-menu-item"><a href="about.php">О нас</a></li>
											<li><a href="news.php">Новости</a></li>
											<li><a href="sponsor.php">Спонсорам</a></li>
											<li><a href="photo.php">Фото</a></li>
											<li><a href="audio.php">Аудио</a></li>
											<li><a href="video.php">Видео</a></li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div>
				
				
				<!-- comboNav -->
				
				
				<div class="clearfix"></div>
					<div class="col-xs-12 col-md-12">
						<div id="slider-holder" class="clearfix">
							<div  class="about_img">
								<img src="img/about.png"/> 
							</div>
						</div>
					</div>
				
				
			</div>
		</header>
		
		
		
		<!-- MAIN -->
		<div id="main">	
			<div class="conteiner">
				<div class="wrapper clearfix">
					
					<div class="home-block clearfix" >
						<h1 class="home-headline">О нас</h1>
						
						<div class="clearfix" >
							<div class="row"> 
								<div class="col-xs-12 col-md-12">
									<div class="title">
										<h3>С чего все начиналось...</h3>
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="col-xs-12 col-md-6">
										<div class="about_text">
											<p>В настоящий момент группа позиционирует себя по наименованию дебютного альбома «Освобождение», размещенного на iTunes, GooglePlay и в иных магазинах в октябре 2014 года.</p>
											<p>Альбом записан на студии PROSound на Шаболовке.Звукорежиссура, сведение и мастеринг -- Софья Иванова (Paulina Steel).</p>
											<p>Софья Иванова выступила в качестве соавтора альбома, взяв на себя подбор музыкантов и подготовив аранжировки к акустическим версиям песен Александра Владыки. Исполнила на альбоме две песни на музыку автора.</p>
											<p>В марте 2016 года группа выиграла рок-фестиваль МАМИ.</p>
											<p><strong>Сегодня Александр Владыка и «Освобождение»</strong> ежемесячно выступают на площадках в Москве и на рок-фестивалях.</p>
											<p>Весной-летом 2016 года песни группы отправлены на конкурсы «Музыка в метро», «Музыка в городе».</p>
											<p>12 и 16 июня 2016 года группа выступила на фестивалях CrazyWeekend (Alibi) и Прикосновение (GlastonberryPub). По итогам фестиваля в ГластонберриПаб группа приглашена выступить на разогреве у “...” 4 ноября 2016 года.</p>
											<p>В августе 2016 группа вошла в ТОП-100 фестиваля Metro on Stage, набрав более 700 голосов.</p>
											<p>Сегодня группа является официальным участником Международного рок-фестиваля EMERGENZA в Москве.</p>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="col-xs-12 col-md-12">
											<div  class="about_imgmin">
												<img src="img/01.jpg"/> 
											</div>
										</div>
										<div class="col-xs-12 col-md-12">
											<div  class="about_imgmin">
												<img src="img/02.jpg"/> 
											</div>
										</div>
										<div class="col-xs-12 col-md-12">
											<div  class="about_imgmin">
												<img src="img/03.jpg"/> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="title">
										<h3>Состав группы</h3>
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="col-xs-12 col-md-4">
										<div class="group_img">
											<img src="img/kirika.png" alt="kirika" class="kirika"/>
										</div>
										<div class="group_title">
											<h5>Наталья Кирика - тамбурин, бэк-вокал (+7 926 318 13 26, ns-kir@mail.ru )</h5>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="group_img">
											<img src="img/vladyka.png" alt="vladyka" class="vladyka"/>
										</div>
										<div class="group_title">
											<h5>Александр Владыка - электроакустическая ритм-гитара YAMAHA/CRAFTER, вокал  (+7 926 353 61 91, avladyka@bk.ru)</h5>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="group_img">
											<img src="img/ivanova.png" alt="ivanova" class="ivanova"/>
										</div>
										<div class="group_title">
											<h5>Софья Иванова (Paulina Steel) - фортепиано NORD2, бэк-вокал (+7 926 289 70 87, paulina_steel@mail.ru)</h5>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="col-xs-12 col-md-4">
										<div class="group_img">
											<img src="img/grachev.png" alt="grachev" class="grachev"/>
										</div>
										<div class="group_title">
											<h5>Кирилл Грачёв - соло-гитара Fender Stratocaster (+7 926 254 24 10, Fixy@mail.ru)</h5>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="group_img">
											<img src="img/marohin.png" alt="marohin" class="marohin"/>
										</div>
										<div class="group_title">
											<h5>Антон Марохин - бас-гитара марка Spector, модель ReBop4DLX ZebraWood (+7 916 563 60 07,t-o-xi4@yandex.ru)</h5>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="group_img">
											<img src="img/samsonov.png" alt="samsonov" class="samsonov"/>
										</div>
										<div class="group_title">
											<h5>Кирилл Самсонов - ударные ( +7 915 245 21 16, kirill.samsonov@gmail.com)</h5>
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
			
			
	</body>
	
</html>





