<?php
	
	
	//добавление новостей в базу
	//error_reporting(0);
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$title_audio=$_POST['title_audio']; 
		
		$file_audio_mp3 = $_FILES['file_audio_mp3']['name'];
		$file_audio_oga = $_FILES['file_audio_oga']['name'];
		

		//Переносим картинку в созданную папку категории
		
		
		$insert = "INSERT INTO audio (title_audio, file_audio_mp3, file_audio_oga) 
		VALUES ('$title_audio', '$file_audio_mp3', '$file_audio_oga')";
		mysqli_query($db, $insert) or die(mysqli_error($db));
			
		if (move_uploaded_file($_FILES['file_audio_mp3']['tmp_name'], __DIR__.'/../audio/'.$_FILES["file_audio_mp3"]['name'])) {
			echo "Uploaded";
			echo  __DIR__.'/audio/'. $_FILES["file_audio_mp3"]['name'];
		} else {
		   echo "File was not uploaded";
		}
		
		if (move_uploaded_file($_FILES['file_audio_oga']['tmp_name'], __DIR__.'/../audio/'.$_FILES["file_audio_oga"]['name'])) {
			echo "Uploaded";
			echo  __DIR__.'/audio/'. $_FILES["file_audio_oga"]['name'];
		} else {
		   echo "File was not uploaded";
		}
			
	//	header("Location: ".$_SERVER["REQUEST_URI"]);
		//exit;
	}
?>

						<div class="title">
							<h3>Добавить аудио</h3>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title_audio" class="col-sm-2 control-label">Название</label>
										<div class="col-sm-10">
											<input name="title_audio" type="text" class="form-control" id="title_audio" placeholder="Введите название аудио">
										</div>
									</div>
									<div class="form-group">
										<label for="file_audio_mp3" class="col-sm-2 control-label">MP3 формат</label>
										<div class="col-sm-10">
										  <input name="file_audio_mp3" type="file" class="form-control" id="file_audio_mp3" placeholder="Загрузите формат .mp3">
										</div>
									</div>
									<div class="form-group">
										<label for="file_audio_oga" class="col-sm-2 control-label">OGA формат</label>
										<div class="col-sm-10">
										  <input name="file_audio_oga" type="file" class="form-control" id="file_audio_oga" placeholder="Загрузите формат .oga">
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
							<h3>Список аудио</h3>
						</div>
<?php
	//Удалить запись в базе данных
if(isset($_GET['del'])){
    $get_del = abs((int)$_GET['del']);

    if($get_del){
        $delete = "DELETE FROM audio WHERE id = ".$get_del;
        mysqli_query($db, $delete) or die(mysqli_error($db));
    }
}

//Вывод записи из базы данных
$select = "SELECT id, title_audio, file_audio_mp3, file_audio_oga FROM audio";
$result = mysqli_query($db, $select) or die(mysqli_error($db));

echo "<table class=\"table\">";
    echo "<tr><th>Название</th><th>Файл mp3</th><th>Файл oga</th><th>Удалить</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title_audio = $row['title_audio'];
        $file_audio_mp3 = $row['file_audio_mp3'];
        $file_audio_oga = $row['file_audio_oga'];
        $get = $_SERVER['REQUEST_URI'].'&del='.$id;

        echo "<tr>";
            echo "<td>".$title_audio."</td>";
            echo "<td>".$file_audio_mp3."</td>";
            echo "<td>".$file_audio_oga."</td>";
            echo "<td><a href='".$get."'><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
        echo "</tr>";
    }
echo "</table>";
?>