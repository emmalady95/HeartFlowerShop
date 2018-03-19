<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	// if(isset($_GET['id-cag'])){
	// 	$id_detail = $_GET['id-cag'];
	// 	//echo "1";
	// }else{
	// 	echo "2";
	// }
	$err = array();
	$err['cagname'] = NULL;
	{
		//$id_prod = $_POST['id_prod'];
		$cod_prod =$_POST['cod_prod'];
		$quanlity =$_POST['quanlity'];
		$size = $_POST['size'];
		$color = $_POST['color'];
		mysql_query("INSERT INTO productdetail VALUES('', '$cod_prod', '$quanlity','$size','$color')");
		//echo "INSERT INTO productdetail VALUES('', '$cod_prod', '$quanlity','$size','$color')";
		header("Location:../../../../index.php?id=&manage=product-detail-list&page=1");
	}
?>