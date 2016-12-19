<?php
require_once '../config.php';
session_start();
if (isset($_GET['exit'])=='logout')
{
	unset($_SESSION['bla']);
	session_destroy();
}	 
	 if(!$_SESSION['bla']) {
		 header("Location: auth.php ");
		 exit;
	 }
?>
<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Административная панель</title>
			
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" media="all" href="../css/style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
		
	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
		
	<!-- Less framework -->
	<link rel="stylesheet" media="all" href="../css/lessframework.css"/>
	
	<!-- modernizr -->
	<script src="../js/modernizr.js"></script>
		
	<!-- SKIN -->
	<link rel="stylesheet" media="all" href="../css/skin.css"/>
		
	
	</head>
	
	<body lang="ru">
	
		<header>
		<div class="wrapper clearfix">
					<div class="row">
					<div class="col-md-2">
						<div id="logo">
							<a href="?page="><img  src="../img/logomin.png" alt="Simpler"></a>
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
											<li class="<?php if($_GET['page']==''){echo 'current-menu-item';}?>"><a href="?page=">Календарь событий</a></li>
											<li class="<?php if($_GET['page']=='admin_news'){echo 'current-menu-item';}?>"><a href="?page=admin_news">Новости</a></li>
											<li class="<?php if($_GET['page']=='admin_photo'){echo 'current-menu-item';}?>"><a href="?page=admin_photo">Фото</a></li>
											<li class="<?php if($_GET['page']=='admin_audio'){echo 'current-menu-item';}?>"><a href="?page=admin_audio">Аудио</a></li>
											<li class="<?php if($_GET['page']=='admin_video'){echo 'current-menu-item';}?>"><a href="?page=admin_video">Видео</a></li>
											<li class="<?php if($_GET['page']=='admin_1'){echo 'current-menu-item';}?>"><a href="?page=admin_1">...</a></li>
											<li class="<?php if($_GET['page']=='admin_2'){echo 'current-menu-item';}?>"><a href="?page=admin_2">...</a></li>
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
					<h1>Административная панель</h1>
				</div>
				
	        	 <div class="home-block clearfix" >
	        		<div class="clearfix" >
					
					<?php
                    $page = $_GET['page'];

                    switch($page){
                        case "admin_news": include "admin_news.php"; break;
                        case "admin_photo": include "admin_photo.php"; break;
                        case "admin_audio": include "admin_audio.php"; break;
                        case "admin_video": include "admin_video.php"; break;
                        case "admin_1": include "admin_1.php"; break;
                        case "admin_2": include "admin_2.php"; break;
						 default: include"admin_calendar.php";
                    }
                    ?>
					
			
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<div class="title">
									<button type="submit" class="btn btn-default"><a href="auth.php?exit=logout">Выход</a></button>
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
		</footer>
		
			 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>
			
	</body>
	
</html>





