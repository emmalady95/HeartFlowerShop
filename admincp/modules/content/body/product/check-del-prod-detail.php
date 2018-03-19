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

	$quanlity =$_POST['quanlity'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$id_prod = mysql_query("SELECT id_prod from productdetail where `cod_prod`='$cod_prod' and `quanlity`='$quanlity' and `size`= '$size' and `color` = '$color' ") ;
	
	mysql_query("DELETE FROM productdetail where `id_prod` = '$id_prod'");
	echo "DELETE FROM productdetail where `id_prod` = '$id_prod'";
	//header("Location:../../../../index.php?id=&manage=product-detail-list&page=1");
	
?>