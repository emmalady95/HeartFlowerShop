<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	$err = array();
	$err['cagname'] = NULL;

	{
		$id = $_POST['id'];
		$namedetail = $_POST['namedetail'];
		mysql_query("INSERT INTO categorydetail SET id = $id,name_detail = '$namedetail'");
		//echo "INSERT INTO categorydetail SET id = $id,name_detail = '$namedetail';
		header("Location:../../../../../admincp/index.php?manage=cag-detail-list&page=1");
	}
?>