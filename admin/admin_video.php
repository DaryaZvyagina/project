<?php
	
	
	//добавление новостей в базу

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$title_video=$_POST['title_video']; 
		$artist_video=$_POST['artist_video']; 
		$file_m4v=$_POST['file_m4v'];
		$poster_video=$_POST['poster_video'];
		
		//Получаем видео из формы
		$tmp = $_FILES['file_m4v']['tmp_name'];
		$file_m4v = $_FILES['file_m4v']['name'];
		$file = 'video/'.$file_m4v;
		
		//Получаем постер из формы
		$tmp1 = $_FILES['poster_video']['tmp_name'];
		$poster_video = $_FILES['poster_video']['name'];
		$poster = 'video/'.$poster_video;

		//Переносим в созданную папку категории
		move_uploaded_file($tmp, 'video/'.$file_m4v);
		move_uploaded_file($tmp, 'video/'.$file_m4v);
		
		$insert = "INSERT INTO video (title_video, artist_video, file_m4v, poster_video) 
		VALUES ('$title_video', '$artist_video', '$file_m4v', '$poster_video')";
		mysqli_query($db, $insert) or die(mysqli_error($db));
			  
		header("Location: ".$_SERVER["REQUEST_URI"]);
		exit;
	}
?>

						<div class="title">
							<h3>Добавить видео</h3>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title_video" class="col-sm-2 control-label">Название</label>
										<div class="col-sm-10">
											<input name="title_video" type="text" class="form-control" id="title_video" placeholder="Введите название видео">
										</div>
									</div>
									<div class="form-group">
										<label for="artist_video" class="col-sm-2 control-label">Введите автора видео</label>
										<div class="col-sm-10">
											<input name="artist_video" type="text" class="form-control" id="artist_video" placeholder="Введите автора видео">
										</div>
									</div>
									<div class="form-group">
										<label for="file_audio_mp3" class="col-sm-2 control-label">MP4 формат</label>
										<div class="col-sm-10">
										  <input name="file_audio_mp3" type="file" class="form-control" id="file_audio_mp3" placeholder="Загрузите формат .mp4">
										</div>
									</div>
									<div class="form-group">
										<label for="poster_video" class="col-sm-2 control-label">Постер</label>
										<div class="col-sm-10">
											<input name="poster_video" type="file" class="form-control" id="poster_video" placeholder="Выберите постер для видео">
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
							<h3>Список видео</h3>
						</div>
<?php
	//Удалить запись в базе данных
if(isset($_GET['del'])){
    $get_del = abs((int)$_GET['del']);

    if($get_del){
        $delete = "DELETE FROM video WHERE id = ".$get_del;
        mysqli_query($db, $delete) or die(mysqli_error($db));
    }
}

//Вывод записи из базы данных
$select = "SELECT id, title_video, artist_video, file_m4v, poster_video FROM video";
$result = mysqli_query($db, $select) or die(mysqli_error($db));

echo "<table class=\"table\">";
    echo "<tr><th>Название</th><th>Файл mp4</th><th>Автор видео</th><th>Постер</th><th>Удалить</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title_video = $row['title_video'];
        $file_m4v = $row['file_m4v'];
        $artist_video = $row['artist_video'];
        $poster_video = $row['poster_video'];
        $get = $_SERVER['REQUEST_URI'].'&del='.$id;

        echo "<tr>";
            echo "<td>".$title_video."</td>";
            echo "<td>".$file_m4v."</td>";
            echo "<td>".$artist_video."</td>";
            echo "<td>".$poster_video."</td>";
            echo "<td><a href='".$get."'><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
        echo "</tr>";
    }
echo "</table>";
?>