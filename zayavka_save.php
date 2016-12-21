<?php
require_once 'config.php';

//Вставить запись в базу данных
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name_user = $_POST['name_user'];
	$tel_user = $_POST['tel_user'];
	$site_user = $_POST['site_user'];

	$insert_zayavka = "INSERT INTO zayavka (name_user, tel_user, site_user) VALUES ('$name_user', '$tel_user', '$site_user')";
	mysqli_query($db, $insert_zayavka) or die(mysqli_error($db));
	
	header('Location: photo.php');
}	
