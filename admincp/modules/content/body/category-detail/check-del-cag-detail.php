<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	echo $iddetail =$_GET['iddetail'];
	
	$id =$_POST['id'];
	$name_detail = $_POST['name_detail'];
	
	// $id_prod = mysql_query("SELECT id_prod from categorydetail where `id`='$id' and `name_detailed`= '$name_detailed' and `color` = '$color' ") ;
	
	mysql_query("DELETE FROM categorydetail where `id_detail` = '$iddetail'");
	//"DELETE FROM categorydetail where `id` = '$id'";
	header("Location:../../../../index.php?id=&manage=cag-detail-list&page=1");
	
?>