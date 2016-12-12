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

<?php
	//добавление событий в базу
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$title=$_POST['title']; 
		$description=$_POST['description']; 
		$date=$_POST['date']; 
		$url_s=$_POST['url_s'];

		$insert = "INSERT INTO events (title, description, date, url_s ) VALUES ('$title', '$description', '$date', '$url_s')";
		mysqli_query($db, $insert) or die(mysqli_error($db));

		header("Location: ".$_SERVER["REQUEST_URI"]);
		exit;
	}
	
?>
<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Освобождение</title>
			
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
						<div class="title">
							<h3>Календарь событий</h3>
						</div>	
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label for="title" class="col-sm-2 control-label">Название события</label>
										<div class="col-sm-10">
										  <input name="title" type="text" class="form-control" id="title" placeholder="Введите название новости">
										</div>
									</div>
									<div class="form-group">
										<label for="description" class="col-sm-2 control-label">Текст события</label>
										<div class="col-sm-10">
											<textarea name="description" class="form-control" rows="3"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="date" class="col-sm-2 control-label">Дата события</label>
										<div class="col-sm-10">
										  <input name="date" type="date" class="form-control" id="date" placeholder="Введите дату события">
										</div>
									</div>
									<div class="form-group">
										<label for="url_s" class="col-sm-2 control-label">Ссылка на событие</label>
										<div class="col-sm-10">
										  <input name="url_s" type="text" class="form-control" id="url_s" placeholder="Введите ссылку на событие">
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
						
		
						<div class="title">
							<h3></h3>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<a href="auth.php?exit=logout">Выход</a>
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





