<?
if($_GET['delete']!=""){
	
	unlink("../news/".basename($_GET['delete']));
	header("Location: index.php");
	exit;
}
?><html>
<head>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100italic,100,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<style>
body {font-family:'Roboto'; background-color: #034E64;}
h1 {text-align: center;background-color: #034E64;color: #FAFAFA;}
h2 {color: #034E64;}
.wrp{margin: 0 auto;width: 800px;border: 1px dotted #000;padding: 20px;background-color: #F6F6F6;}
.field {padding:10px 20px;}
form input[type=submit] {margin-left: 75%;padding: 5px 20px;}
.field input {height: 30px;padding: 5px 10px; font-size:1em;}
.news_list_item_delete {}
.news_list_item {padding: 5px 0px 5px 10px;border-bottom: 1px dotted #ccc;}
.news_list_item a{color: #3F3F3F;text-decoration: none;}
.news_list_item a:hover {}
form a {color: #FFFFFD;padding: 5px 20px;background-color: #067798;text-decoration: none;margin-left: 75px;}
@media only screen and (max-width: 842px) {
    .wrp{margin:0 auto;width: 92%;}
	form input, form textarea {max-width:100%;}
}
</style>

</head>
<body>

<div class=wrp>
<h1>Административная панель</h1>
<h2>Новости</h2>

<?
if($_GET['edit']==""){
	//add news
?>
	<h3>Добавить новость</h3>
	
	
	<form action=update.php method=post enctype="multipart/form-data">
	
	<input type=hidden name=id value=''>
	
	<div class=field><input type=text size=15 name=Date placeholder="дд.мм.гггг" value="<?=date("d.m.Y")?>" required></div>
	<div class=field><input type=text size=80 name=Name placeholder="Заголовок" required></div>
	<div class=field>Фото: <input type=file size=50 name=userfile></div>
	<div class=field><textarea name=Annot cols=100 rows=5 placeholder="Аннотация" required></textarea></div>
	<div class=field><textarea name=Text cols=100 rows=15 placeholder="Текст новости" required></textarea></div>
	<br>
	<input type=submit value='Добавить'>
	</form>

<?
}
else{
	//edit news
	
	$data=file("../news/".basename($_GET['edit']));
	
	$stop=0; $i=3;
	$annot="";
	while(!$stop){
		if(trim($data[$i])=="end"){$stop=1;}
		if($i>count($data)){$stop=1;}
		if(!$stop){$annot.=$data[$i];}
		$i++;
	}
	$stop=0;
	$text="";
	while(!$stop){
		if(trim($data[$i])=="end"){$stop=1;}
		if($i>count($data)){$stop=1;}
		if(!$stop){$text.=$data[$i];}
		$i++;
	}
	
?>

	<h3>Редактировать новость</h3>
	
	
	<form action=update.php method=post enctype="multipart/form-data">
	
	<input type=hidden name=id value='<?=basename($_GET['edit'])?>'>
	
	<div class=field><input type=text size=15 name=Date placeholder="дд.мм.гггг" value="<?=$data[0]?>" required></div>
	<div class=field><input type=text size=80 name=Name placeholder="Заголовок" value="<?=$data[1]?>" required></div>
	<div class=field>Фото: <input type=file size=50 name=userfile></div>
	<?
		if(trim($data[2])!=""){echo "<div><a href='../news/images/".$data[2]."' target=_blank>Посмотреть</a></div>";}
	?>
	<input type=hidden name=fname value="<?=$data[2]?>">
	<div class=field><textarea name=Annot cols=100 rows=5 placeholder="Аннотация" required><?=$annot?></textarea></div>
	<div class=field><textarea name=Text cols=100 rows=15 placeholder="Текст новости" required><?=$text?></textarea></div>
	<br>
	<input type=submit value='Сохранить'>
	</form>


<? } ?>


<div class=news_list>
<?

	foreach(glob("../news/*.txt") as $file){
		$a=file($file);
		echo "<div class=news_list_item>
			<a href='index.php?edit=$file'>{$a[0]}. {$a[1]}</a>
			&nbsp;&nbsp;
			<a class=news_list_item_delete href='index.php?delete=$file'><img src='http://images.agoramedia.com/everydayhealth/gcms/icon_delete_16px.gif'></a>
		</div>";
	}

?>
</div>
</div>

</body>
</html>