<?
	
	$id=$_POST['id'];
	$Date=$_POST['Date'];
	$Name=$_POST['Name'];
	$Annot=$_POST['Annot'];
	$Text=$_POST['Text'];


	if($id==""){$id=md5(time()).".txt";}
	
	if($_FILES['userfile']['tmp_name']!=""){
		$a=explode(".", $_FILES['userfile']['name']);
		$fname="{$id}.".$a[count($a)-1];
		copy($_FILES['userfile']['tmp_name'], "../news/images/$fname");
	}
	else{
		$fname=$_POST['fname'];
	}
	
	
	$fp=fopen("../news/{$id}", "w");
	
	fwrite($fp, "$Date\n$Name\n$fname\n$Annot\n"."end\n$Text");
	fclose($fp);
	
	
	header("Location: index.php");
	


?>