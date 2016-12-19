<?php
session_start();
$admin = 'admin';
$pass = '123123';

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
					<h1>Вход</h1>
				</div>
				
	        	 <div class="home-block clearfix" >
	        		<div class="clearfix" >
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
									<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Введите имя</label>
										<div class="col-sm-10">
										  <input name="name" type="text" class="form-control" id="title" placeholder="Введите логин">
										</div>
									</div>
									<div class="form-group">
										<label for="pass" class="col-sm-2 control-label">Введите пароль</label>
										<div class="col-sm-10">
										  <input name="pass" type="password" class="form-control" id="title" placeholder="Введите пароль">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-8">
										  <button name="add" type="submit" class="btn btn-default">Войти</button>
										</div>
									</div>
								</form>
									<?php 

										if(isset($_POST['add'])){ 

										if($admin == $_POST['name'] AND $pass == ($_POST['pass'])){ 

										$_SESSION['bla'] = $admin; 

										header("Location: admin.php"); 

										exit; 

										}else 
										echo '<p>Логин или пароль неверны!</p>'; 
										} 

										
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
		</footer>
		
			 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>
			
	</body>
	
</html>





