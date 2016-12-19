<?php
	
	
	//добавление новостей в базу

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$title_audio=$_POST['title_audio']; 
		$file_audio_mp3=$_POST['file_audio_mp3']; 
		$file_audio_oga=$_POST['file_audio_oga'];
		
		//Получаем аудио из формы
		$tmp = $_FILES['file_audio_mp3']['tmp_name'];
		$tmp = $_FILES['file_audio_oga']['tmp_name'];
		
		$file_audio_mp3 = $_FILES['file_audio_mp3']['name'];
		$file_audio_oga = $_FILES['file_audio_oga']['name'];
		
		$file_audio_mp3 = "audio/".$file_audio_mp3;
		$file_audio_oga = "audio/".$file_audio_oga;

		//Переносим картинку в созданную папку категории
		move_uploaded_file($tmp, 'audio/'.$file_audio_mp3);
		move_uploaded_file($tmp, 'audio/'.$file_audio_oga);
		
		$insert = "INSERT INTO audio (title_audio, file_audio_mp3, file_audio_oga) 
		VALUES ('$title_audio', '$file_audio_mp3', '$file_audio_oga')";
		mysqli_query($db, $insert) or die(mysqli_error($db));
			  
		header("Location: ".$_SERVER["REQUEST_URI"]);
		exit;
	}
?>

						<div class="title">
							<h3>Аудио</h3>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title_audio" class="col-sm-2 control-label">Название</label>
										<div class="col-sm-10">
											<input name="title_audio" type="text" class="form-control" id="title_audio" placeholder="Введите название новости">
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