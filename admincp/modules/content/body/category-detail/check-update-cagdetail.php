t<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	// if(isset($_GET['id_detail'])){
	// 	$id_detail = $_GET['id_detail'];
	// 	//echo "1";
	// }else{
	// 	echo "2";
	// }
	// echo $id;
	// $err = array();
	// $err['cagname'] = NULL;

	if(count($_POST) > 0){
		$id_detail = $_POST['id_detail'];
		$id= $_POST['id'];
		$name_detail= $_POST['name_detail'];
		mysql_query("UPDATE categorydetail SET `name_detail` = '$name_detail', `id`= $id, `id_detail`='$id_detail' where 
			`id_detail` = $id_detail");
		//echo "UPDATE categorydetail SET `name_detail` = '$name_detail', `id`= $id, `id_detail`='$id_detail' where 
		//	`id_detail` = $id_detail";
		header("Location:../../../../index.php?id=&manage=cag-detail-list&page=1");
	}
?>