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
							<h3>Добавить событие в календарь</h3>
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
						<div class="title">
							<h3>Список событий</h3>
						</div>
						
<?php
	//Удалить запись в базе данных
if(isset($_GET['del'])){
    $get_del = abs((int)$_GET['del']);

    if($get_del){
        $delete = "DELETE FROM events WHERE id = ".$get_del;
        mysqli_query($db, $delete) or die(mysqli_error($db));
    }
}

//Вывод записи из базы данных
$select = "SELECT id, title, description, date, url_s FROM events";
$result = mysqli_query($db, $select) or die(mysqli_error($db));

echo "<table class=\"table\">";
    echo "<tr><th>Дата</th><th>Название</th><th>Краткое описание</th><th>Ссылка</th><th>Удалить</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $date = $row['date'];
        $title = $row['title'];
        $description = $row['description'];
        $url_s = $row['url_s'];
        $get = $_SERVER['REQUEST_URI'].'&del='.$id;

        echo "<tr>";
            echo "<td>".$date."</td>";
            echo "<td>".$title."</td>";
            echo "<td>".$description."</td>";
            echo "<td>".$url_s."</td>";
            echo "<td><a href='".$get."'><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
        echo "</tr>";
    }
echo "</table>";
?>