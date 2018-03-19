<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	// if(isset($_GET['id_detail'])){
	// 	$id_detail = $_GET['id_detail'];
	// 	//echo "1";
	// }else{
	// 	echo "2";
	// }
	// $err = array();
	// $err['cagname'] = NULL;

	$cod_prod =$_POST['cod_prod'];
	$quanlity =$_POST['quanlity'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	mysql_query("UPDATE productdetail SET `cod_prod` = '$cod_prod' , `quanlity`='$quanlity', `size`= '$size', `color`='$color'where `cod_prod` = '$cod_prod'");
	//echo "UPDATE productdetail SET `cod_prod` = '$cod_prod' , `quanlity`='$quanlity', `size`= '$size1', `color`='$color'where `cod_prod` = '$cod_prod'";
	header("Location:../../../../index.php?id=&manage=product-detail-list&page=1");
	
?>