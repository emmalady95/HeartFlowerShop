<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	// if(isset($_GET['cod_prod'])){
	// 	$cod_prod = $_GET['cod_prod'];
	// 	//echo "1";
	// }else{
	// 	echo "2";
	// }
	// echo $id;
	$err = array();
	$err['cagname'] = NULL;

	{
		//$id = $_POST['id'];
		$cod_prod =$_POST['cod_prod'];
		$id_detail =$_POST['id_detail'];
		$name_prod = $_POST['name_prod'];
		$unit_price = $_POST['unit_price'];
		$material =$_POST['material'];
		$description = $_POST['description'];
		$img = $_POST['img'];
		$state = $_POST['state'];
		mysql_query("UPDATE product SET `cod_prod` = '$cod_prod', `name_prod`='$name_prod' , `id_detail`='$id_detail', `unit_price`='$unit_price', `material`='$material' , `description`= '$description', `img`= '$img', `state`='$state' where `cod_prod` = '$cod_prod'");
		//echo "UPDATE product SET `cod_prod` = '$cod_prod', `name_prod`='$name_prod' , `id_detail`='$id_detail', `unit_price`='$unit_price', `material`='$material', , `description`= '$description', `img`= `$img`, `state`='$state' where `cod_prod` = '$cod_prod'";
		header("Location:../../../../index.php?id=&manage=product-list&page=1");
	}
?>