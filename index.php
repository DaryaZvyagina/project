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
		<link rel="stylesheet" href="css/flexslider.css" />
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
											<li class="current-menu-item"><a href="index.php">Главная</a></li>
											<li><a href="about.php">О нас</a></li>
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
				
				<!-- slider holder -->
				<div class="clearfix"></div>
				<div id="slider-holder" class="clearfix">
					
					<!-- slider -->
			        <div class="flexslider home-slider">
					  <ul class="slides">
					    <li>
					      <img src="img/slides/01.jpg" alt="alt text" />
					    </li>
					    <li>
					      <img src="img/slides/02.jpg" alt="alt text" />
					      <p class="flex-caption">На рок-фестиваля Университета машиностроения</p>
					    </li>
					    <li>
					      <img src="img/slides/03.jpg" alt="alt text" />
					    </li>
					  </ul>
					</div>
		        	<!-- ENDS slider -->
		        	
		        	<div class="home-slider-clearfix "></div>
		        	
		        	<!-- Headline -->
		        	<div id="headline">
		        		<h4>Группа ОСВОБОЖДЕНИЕ</h4>
						<p>Команда "Освобождение" объединила незнакомых прежде музыкантов и авторов в 2014 году для записи одноимённого дебютного альбома песен Александра Владыки.</p>
						<p>Мы любим и играем русский рок.</p>
						<p>Концепция “Освобождение” связана с бесстрашием принятия ответственности за свой путь и дальнейшим освобождением и реализацией творческого потенциала каждого - и членов команды, и слушателей-зрителей - в едином силовом-смысловом поле.</p>
						<p>Сейчас нашу философию и траекторию лучше всего описывает понятие "квинтэссенция" - пятый элемент, сочетающий грани лучших образчиков глубокой и самобытной музыкально-поэтической традиции русского рока.</p>
					
					</div>
		        	<!-- ENDS headline -->
		        	
		        	
				</div>
				<!-- ENDS slider holder -->
				
			</div>
		</header>
		
		
		
		<!-- MAIN -->
		<div id="main">	
			<div class="conteiner">
				<div class="wrapper clearfix">
					
					<div class="home-block clearfix" >
						<h1 class="home-headline">Главная</h1>
						
						<div class="clearfix" >
								<div class="row"> 
									<div class="col-xs-12 col-md-8">
										<div class="col-xs-12 col-md-12"> 
											<div class="afisha">
												<img src="img/afisha.jpg" alt="afisha"/>
												<p class="flex-caption">Афиша</p>
											</div>
										</div>
										<div class="col-xs-12 col-md-12 "> 
											<?php
												//Вывод записи из базы данных
												$select_single = "SELECT id, title_single, file_single FROM single ORDER BY `id` DESC LIMIT 0,1";
												$result_single = mysqli_query($db, $select_single) or die(mysqli_error($db));
												
												
												echo '<div class="audio">';
													while($row = mysqli_fetch_assoc($result_single)){
														$title_single = $row['title_single'];
														$file_single = $row['file_single'];

														echo '
															<h3>Послушайте наш новый сингл! Ждем ваших отзывов</h3>
															<p>'.$title_single.'</p>
															<audio controls>
																<source src="'.$file_single.'"/>
															</audio>
														';
														
													}
												echo '</div>';
											?>
										</div>
									</div> 
									<div class="col-xs-12 col-md-4">
										<div class="col-xs-12 col-md-12 ">
											<a href="news.php">
											<div class="news">
												<img src="img/news.jpg" alt="news" class="news"/>
												<p class="flex-caption">Новости</p>
											</div>
											</a>
										</div> 
										<div class="col-xs-12 col-md-12 "> 
											
											<div class="calendar">
												<div id="eventCalendar"></div>
											</div>
										</div>
										<div class="col-xs-12 col-md-12 ">
											
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
			<script src="js/jquery.eventCalendar.js"></script>
			<script>
					$(function(){
						 var data = <?php echo $events; ?>;
						
						$('#eventCalendar').eventCalendar({
							jsonData: data,
							//eventsjson: 'data.json',
							jsonDateFormat: "human",
							openEventInNewWindow: true,
							dateFormat: "dddd DD-MM-YYYY",
							locales: {
								locale: "ru",
								txt_noEvents: "Нет запланированных событий",
								txt_SpecificEvents_prev: "",
								txt_SpecificEvents_after: "события:",
								txt_NextEvents: "Следующие события:",
								txt_GoToEventUrl: "Смотреть",
								moment: {
									"months" : [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
											"Июль", "Авугст", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
									"monthsShort" : [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
											"Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
									"weekdays" : [ "Воскресенье","Понедельник","Вторник","Среда",
											"Четверг","Пятница","Суббота" ],
									"weekdaysShort" : [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
									"weekdaysMin" : [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
								}
							  }
						});
					});
			</script>
			
	</body>
	
</html>





