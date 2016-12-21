<div class="title">
	<h3>Заявки из формы</h3>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12 "> 
		
	</div>
</div>

<?php
	
	//Удалить запись в базе данных
if(isset($_GET['del'])){
    $get_del = abs((int)$_GET['del']);

    if($get_del){
        $delete = "DELETE FROM zayavka WHERE id = ".$get_del;
        echo $delete;
        mysqli_query($db, $delete) or die(mysqli_error($db));
        header("Location:".$_SERVER['HTTP_REFERER']);
        exit;
    }
}

//Вывод записи из базы данных
$select = "SELECT id, name_user, tel_user, site_user FROM zayavka";
$result = mysqli_query($db, $select) or die(mysqli_error($db));

echo "<table class=\"table\">";
    echo "<tr><th>ФИО</th><th>Телефон</th><th>Страница</th><th>Удалить</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name_user = $row['name_user'];
        $tel_user = $row['tel_user'];
        $site_user = $row['site_user'];
        $get = $_SERVER['REQUEST_URI'].'&del='.$id;

        echo "<tr>";
            echo "<td>".$name_user."</td>";
            echo "<td>".$tel_user."</td>";
            echo "<td>".$site_user."</td>";
            echo "<td><a href='".$get."'><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
        echo "</tr>";
    }
echo "</table>";

	
?>

						