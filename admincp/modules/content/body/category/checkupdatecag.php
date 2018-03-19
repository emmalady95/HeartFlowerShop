<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	// if(isset($_GET['id-cag'])){
	// 	$id = $_GET['id-cag'];
	// 	//echo "1";
	// }else{
	// 	//echo "2";
	// }
	// echo $id;
	$err = array();
	$err['cagname'] = NULL;

	if(count($_POST) > 0){
		$namecag = $_POST['namecag'];
		$idcag= $_POST['id'];
		mysql_query("UPDATE category SET `name_cag` = '$namecag', `id`= $idcag where `id` = $idcag");
		//echo "UPDATE category SET `name_cag` = '$namecag', `id`= $idcag where `id` = $id";
		header("Location:../../../../index.php?id=&manage=cag-list&page=1");
	}
?>