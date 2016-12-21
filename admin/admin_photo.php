<?php
	
	
	//добавление новостей в базу

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		//Получаем картинку из формы
		$tmp = $_FILES['img_gallery']['tmp_name'];
		$img_gallery = $_FILES['img_gallery']['name'];
		
		
		//Переносим картинку в созданную папку категории
		
		$insert = "INSERT INTO photo_gallery (img_gallery) 
		VALUES ('$img_gallery')";
		mysqli_query($db, $insert) or die(mysqli_error($db));
		 
		if (move_uploaded_file($_FILES['img_gallery']['tmp_name'], __DIR__.'/../img/img_photo/'. $_FILES["img_gallery"]['name'])) {
			echo "Uploaded";
			echo  __DIR__.'/img/img_photo/'. $_FILES["img_gallery"]['name'];
		} else {
		   echo "File was not uploaded";
		}
			  
		header("Location: ".$_SERVER["REQUEST_URI"]);
		exit;
	}
	
?>

<div class="title">
	<h3>Добавить фото</h3>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12 "> 
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="img_gallery" class="col-sm-2 control-label">Изображение</label>
				<div class="col-sm-10">
				  <input name="img_gallery" type="file" class="form-control" id="img_gallery" placeholder="Загрузите формат .jpg и .png, не больше 10мб">
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
	<h3>Список фото</h3>
</div>

<?php
	//Удалить запись в базе данных
if(isset($_GET['del'])){
    $get_del = abs((int)$_GET['del']);

    if($get_del){
        $delete = "DELETE FROM photo_gallery WHERE id = ".$get_del;
        mysqli_query($db, $delete) or die(mysqli_error($db));
    }
}

//Вывод записи из базы данных
$select = "SELECT id, img_gallery FROM photo_gallery";
$result = mysqli_query($db, $select) or die(mysqli_error($db));

echo "<table class=\"table\">";
    echo "<tr><th>Фото</th><th>Удалить</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $img_gallery = $row['img_gallery'];
        $get = $_SERVER['REQUEST_URI'].'&del='.$id;

        echo "<tr>";
            echo "<td>".$img_gallery."</td>";
            echo "<td><a href='".$get."'><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
        echo "</tr>";
    }
echo "</table>";
?>
						