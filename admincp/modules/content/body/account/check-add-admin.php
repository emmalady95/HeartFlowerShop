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
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$fullname = $_POST['fullname'];
		$role =$_POST['role'];
		mysql_query("INSERT INTO account VALUES('$email', '$password', '$fullname','$phone','$role' )");
		//echo "INSERT INTO account VALUES('$email', '$password', '$fullname','$phone','$role' )";
		header("Location:../../../../index.php?id=quynt0808@gmail.com&manage=account-admin-list&page=1");
	}
?>