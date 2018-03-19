<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	

	{ 
		$id_detail = $_POST['id_detail'];
		$cod_prodod=$_POST['cod_prod'];

		$id = mysql_query("SELECT id from product where `id_detail`='$id_detail' and `cod_prod` ='$cod_prod' and `name_prod` = '$name_prod' and `unit_price`= '$unit_price' ");
		

		mysql_query("DELETE product where `id` = "$id" ");
		Header("Location:../../../../index.php?id=&manage=product-list&page=1");
	}
?>