<?php 
	require('php/connect-db.php');
	@session_start();
	if(count($_POST) > 0){
		$username = $_POST['uuser'];
		$password = $_POST['upass'];
		$sql = "SELECT email,password,role FROM taikhoan where email = '$username' and password = '$password' ";
		// echo "SELECT id,role FROM account where username = '$username' and password = '$password'";
		$query = mysql_query($sql);
		$result = mysql_fetch_array($query);
		$email = $result['email'];
		$pass = md5($result['pass']);
		$role = $result['role'];

		if(($result & $role == 'admin') || ($result & $role == 'administrator')){
			$_SESSION['admin'] = $result['email'];
			echo 'Bạn đã đăng nhập thành công';
			header("Location: index.php");
		}
		else{
			 $_SESSION['error'] = "Đăng nhập không thành công";
			header("Location: index.php");
		}
	}
?>