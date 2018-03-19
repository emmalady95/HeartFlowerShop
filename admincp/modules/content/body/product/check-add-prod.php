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
		//$id = $_POST['id'];
		$cod_prod =$_POST['cod_prod'];
		$id_detail =$_POST['id_detail'];
		$name_prod = $_POST['name_prod'];
		$unit_price = $_POST['unit_price'];
		$material =$_POST['material'];
		$description = $_POST['description'];
		// $tmp_img = $this->image['tmp_name'];
		// echo $tmp_img;
		$img = $_FILES['img']['tmp_name'];
		//$state = $_POST['state'];
		mysql_query("INSERT INTO product VALUES('', '$cod_prod', '$id_detail','$name_prod','$unit_price','$material', '$description', '$img ', '' )");
		header("Location:../../../../index.php?id=&manage=product-list&page=1");
	}
?>