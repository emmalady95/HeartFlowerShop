<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	
	$id = $_GET['id'];
	{
		//$id = $_POST['id'];
		$name_cag = $_POST['name_cag'];
		mysql_query("DELETE FROM category where `id` = '$id'");
		Header("Location:../../../../index.php?id=&manage=cag-list&page=1");
	}
?>