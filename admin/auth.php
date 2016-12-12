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
									<form action="" method="post"> 
										<label for="name">Введите имя</label><br> 
										<input type="text" name="name" placeholder="Введите логин"><br> 
										<label for="pass">Введите пароль</label><br> 
										<input type="password" name="pass" plaсeholder="Введите пароль"><br> 
										<input type="submit" name="add"> 
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





