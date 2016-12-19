<?php
require_once 'config.php';

//Вставить запись в базу данных
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$id_news = $_POST['id_news'];

	$insert_comment = "INSERT INTO comment (name, comment, id_news) VALUES ('$name', '$comment', '$id_news')";
	mysqli_query($db, $insert_comment) or die(mysqli_error($db));
	
	header('Location: aboutnews.php?id_news='.$id_news);
}	


						