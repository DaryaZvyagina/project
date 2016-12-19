<?php
	
	
	//добавление новостей в базу

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$date_news=$_POST['date_news']; 
		$title_news=$_POST['title_news']; 
		$author_news=$_POST['author_news']; 
		$description_news=$_POST['description_news'];
		$text_news=$_POST['text_news'];
		
		//Получаем картинку из формы
		$tmp = $_FILES['img_news']['tmp_name'];
		$img_news = $_FILES['img_news']['name'];
		$img = "img/".$img_news;
		
		//Переносим картинку в созданную папку категории
		move_uploaded_file($tmp, 'img/'.$img_news);
		
		
		$insert = "INSERT INTO news (date_news, title_news, author_news, img_news, description_news, text_news ) 
		VALUES ('$date_news', '$title_news', '$author_news', '$img', '$description_news', '$text_news')";
		mysqli_query($db, $insert) or die(mysqli_error($db));
			  
		header("Location: ".$_SERVER["REQUEST_URI"]);
		exit;
	}
	
	print_r ($_FILES);
?>

						<div class="title">
							<h3>Новости</h3>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="date_news" class="col-sm-2 control-label">Дата</label>
										<div class="col-sm-10">
										  <input name="date_news" type="date" class="form-control" id="date_news" placeholder="Введите дату новости">
										</div>
									</div>
									<div class="form-group">
										<label for="title_news" class="col-sm-2 control-label">Название</label>
										<div class="col-sm-10">
											<input name="title_news" type="text" class="form-control" id="title_news" placeholder="Введите название новости">
										</div>
									</div>
									<div class="form-group">
										<label for="author_news" class="col-sm-2 control-label">Автор</label>
										<div class="col-sm-10">
										  <input name="author_news" type="text" class="form-control" id="author_news" placeholder="Введите автора новости">
										</div>
									</div>
									<div class="form-group">
										<label for="img_news" class="col-sm-2 control-label">Изображение</label>
										<div class="col-sm-10">
										  <input name="img_news" type="file" class="form-control" id="img_news" placeholder="Загрузите формат .jpg и .png, не больше 10мб">
										</div>
									</div>
									<div class="form-group">
										<label for="description_news" class="col-sm-2 control-label">Краткое описание</label>
										<div class="col-sm-10">
											<textarea name="description_news" class="form-control" rows="3" placeholder="Введите краткое описание новости"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="text_news" class="col-sm-2 control-label">Текст</label>
										<div class="col-sm-10">
											<textarea name="text_news" class="form-control" rows="3" placeholder="Введите полный текст новости"></textarea>
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