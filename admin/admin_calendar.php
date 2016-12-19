<?php 

//добавление событий в календарь в базу
	
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

						<div class="title">
							<h3>Календарь событий</h3>
						</div>	
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label for="title" class="col-sm-2 control-label">Название</label>
										<div class="col-sm-10">
										  <input name="title" type="text" class="form-control" id="title" placeholder="Введите название новости">
										</div>
									</div>
									<div class="form-group">
										<label for="description" class="col-sm-2 control-label">Текст</label>
										<div class="col-sm-10">
											<textarea name="description" class="form-control" rows="3" placeholder="Введите текст события"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="date" class="col-sm-2 control-label">Дата</label>
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
						