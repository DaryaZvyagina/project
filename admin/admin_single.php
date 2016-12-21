<?php
	
	
	//добавление новостей в базу

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$title_single=$_POST['title_single']; 
		$file_single=$_POST['file_single']; 
		
		//Получаем аудио из формы
		$tmp = $_FILES['file_single']['tmp_name'];
		$file = $_FILES['file_single']['name'];
		$file_single = "audio/".$file;

		//Переносим картинку в созданную папку категории
		move_uploaded_file($tmp, 'audio/'.$file_single);
		
		$insert = "INSERT INTO single (title_single, file_single) 
		VALUES ('$title_single', '$file_single')";
		mysqli_query($db, $insert) or die(mysqli_error($db));
			  
		header("Location: ".$_SERVER["REQUEST_URI"]);
		exit;
	}
	


?>

						<div class="title">
							<h3>Изменить сингл</h3>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12 "> 
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title_single" class="col-sm-2 control-label">Название</label>
										<div class="col-sm-10">
											<input name="title_single" type="text" class="form-control" id="title_single" placeholder="Введите название новости">
										</div>
									</div>
									<div class="form-group">
										<label for="file_single" class="col-sm-2 control-label">MP3 формат</label>
										<div class="col-sm-10">
										  <input name="file_single" type="file" class="form-control" id="file_single" placeholder="Загрузите формат .mp3">
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
							<h3>Список синглов</h3>
						</div>
						
<?php
	//Удалить запись в базе данных
if(isset($_GET['del'])){
    $get_del = abs((int)$_GET['del']);

    if($get_del){
        $delete = "DELETE FROM single WHERE id = ".$get_del;
        mysqli_query($db, $delete) or die(mysqli_error($db));
    }
}

//Вывод записи из базы данных
$select = "SELECT id, title_single, file_single FROM single";
$result = mysqli_query($db, $select) or die(mysqli_error($db));

echo "<table class=\"table\">";
    echo "<tr><th>Название</th><th>Файл</th><th>Удалить</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title_single = $row['title_single'];
        $file_single = $row['file_single'];
        $get = $_SERVER['REQUEST_URI'].'&del='.$id;

        echo "<tr>";
            echo "<td>".$title_single."</td>";
            echo "<td>".$file_single."</td>";
            echo "<td><a href='".$get."'><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
        echo "</tr>";
    }
echo "</table>";
?>