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
	
	<!-- Плейлист -->
	<link rel = "stylesheet" href="play/style.css">
    <script type="text/javascript" src="play/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="play/jquery.jplayer.js"></script>
    <script type="text/javascript" src="play/ttw-music-player-min.js"></script>
    <script type="text/javascript" src="play/myplaylist.js"></script>
	
	<!-- JS-->
	<script src="js/css3-mediaqueries.js"></script>
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
											<li class="current-menu-item"><a href="news.php">Новости</a></li>
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
			</div>
		</header>
		
		
		
		<!-- MAIN -->
		<div id="main">	
		<div class="conteiner">
			<div class="wrapper clearfix">
        		
				<div class="masthead clearfix">
					<h1>Новости</h1>
				</div>
				<div class='mh-div'></div>
				
	        	<div class="home-block clearfix" >
	        		<div  id="posts-list" class="clearfix" >
						<?php
						$i = 0;
								//Вывод записи из базы данных
								$id_news = $_GET["id_news"];
								$select = "SELECT id, date_news, title_news, author_news, img_news, description_news, text_news FROM news WHERE id=".$id_news;
								$result = mysqli_query($db, $select) or die(mysqli_error($db));
								

								echo "<div class=\"aboutnews_article\">";
									while($row = mysqli_fetch_assoc($result)){
										$id = $row['id'];
										$date_news = $row['date_news'];
										$title_news = $row['title_news'];
										$author_news = $row['author_news'];
										$img_news = $row['img_news'];
										$description_news = $row['description_news'];
										$text_news = $row['text_news'];

										echo '
											<article>
												<div class="entry-date">
													<div class="month">'.$date_news.'</div>
												</div>
												<div  class="post-heading">
													<h4><a href="aboutnews.php">'.$title_news.'</a></h4>
													<div class="meta">
														<span class="user"><a href="#">'.$author_news.', </a></span>
														<span class="comments"><a href="#"> 2 коментариев </a></span>
													</div>
												</div>
												<div class="feature-image">
														<img src="'.$img_news.'" alt="Alt text" />
												</div>
												<div class="excerpt">
													<p>
														'.$text_news.'
													</p>
												</div>
												<a href="news.php">Вернуться к списку новостей</a>
										    </article>
										';
									}
								echo "</div>";
							?>
						<div class="title">
							<h3>Отправить комментарий</h3>
						</div>
						<div class="comment_form">
							<form class="form-horizontal" role="form" method="post" action="comment_save.php">
							  <div class="form-group">
								<label for="inputName" class="col-sm-2 control-label">Имя</label>
								<div class="col-sm-10">
								  <input name="name" type="text" class="form-control" id="inputName" placeholder="Ваше имя">
								</div>
							  </div>
							  <div class="form-group">
							  <label for="inputComment" class="col-sm-2 control-label">Комментарий</label>
								<div class="col-sm-10">
									<textarea name="comment" class="form-control" rows="3" placeholder="Ваш комментарий"></textarea>
								</div>
							  </div>
							  <input type="hidden" name="id_news" value="<?php echo $id_news;?>">
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-8">
								  <button type="submit" class="btn btn-default">Отправить</button>
								</div>
							  </div>
							</form>
						</div>
						<div class="title">
							<h3>Комментарии</h3>
						</div>
						<div class="row">
							<?php
								//Вывод записи из базы данных
								$select_comment = "SELECT id, name, comment, id_news FROM comment  WHERE id_news=".$id_news." ORDER BY `id` DESC LIMIT 0,10";
								$result_comment = mysqli_query($db, $select_comment) or die(mysqli_error($db));
								
								
								echo "<div class=\"user_comment\">";
									while($row = mysqli_fetch_assoc($result_comment)){
										$i++;
										$name = $row['name'];
										$comment = $row['comment'];

										echo '
											<div class="col-xs-12 col-md-4">
											
											</div>
											<div class="col-xs-12 col-md-8">
												<div class="col-xs-12 col-md-12">
													<h4>'.$name.'</h4>
												</div>
												<div class="col-xs-12 col-md-12">
													<p>'.$comment.'</p>
												</div>
											</div>
										';
										
									}
									
								echo "</div>";
							?>
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





