<?php 
	@session_start();
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	if(isset($_SESSION['error'])){
		echo "<script>alert('{$_SESSION['error']}');</script>";
		unset($_SESSION['error']);
	}
?>

<!DOCTYPE html>
<html class="fixed">
<head>
	<!-- Basic -->
	<meta charset="UTF-8">

	<title>TRANG QUẢN TRỊ HỆ THỐNG</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor + BOOTSTRAPT -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

	<!-- DESIGN -->
	<link rel="stylesheet" href="assets/stylesheets/theme.css" />
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/responsive.css">

	<!-- HEADLIBS -->
	<script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
	<section class="body">
	<?php
			if(isset($_SESSION['admin'])){
				include('modules/header.php');
				include('modules/content.php');
			}else{
				include ('signin.php');
			}
	?>
	</section>
</body>
</html>