<!DOCTYPE html>
<html class="fixed">
<head>
	<!-- Basic -->
	<meta charset="UTF-8">

	<title>SIGN IN TO HANOI RIOT ADMIN</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
	<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="assets/vendor/modernizr/modernizr.js"></script>

	<!-- Vendor -->
	<script src="assets/vendor/jquery/jquery.js"></script>
	<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>
	
	<!-- Theme Custom -->
	<script src="assets/javascripts/theme.custom.js"></script>
	
	<!-- Theme Initialization Files -->
	<script src="assets/javascripts/theme.init.js"></script>

</head>

<body>
	<section class="body-sign">
		<div class="center-sign">
			<a href="/" class="logo pull-left">
				<img src="assets/images/logo1.png" height="54" alt="Hanoi Riot Admin" />
			</a>

			<div class="panel panel-sign">
				<div class="panel-title-sign mt-xl text-right">
					<h2 style = "background: #FF3030;" class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Đăng nhập hệ thống</h2>
				</div>

				<div style = "border-top:5px solid #FF3030;" class="panel-body">
					<form action="checklogin.php" method="POST">
						<div class="form-group mb-lg">
							<label>Tên đăng nhập</label>
							<div class="input-group input-group-icon">
								<input name="uuser" type="email" placeholder = "Email của bạn" class="form-control input-lg" />

								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-user"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="form-group mb-lg">
							<div class="clearfix">
								<label class="pull-left">Mật khẩu</label>
								<a href="reset-password.php" class="pull-right" style="color: #00BFFF;">Quên mật khẩu?</a>
							</div>
							<div class="input-group input-group-icon">
								<input name="upass" type="password" placeholder = "Mật khẩu" class="form-control input-lg" />
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-lock"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-8">
								<div class="checkbox-custom checkbox-default">
									<input id="RememberMe" name="rememberme" type="checkbox"/>
									<label for="RememberMe">Giữ đăng nhập</label>
								</div>
							</div>
							<div class="col-sm-4 text-right">
								<button type="submit" style = "background: #ff3030;" class="btn btn-primary hidden-xs">Đăng nhập</button>
								<!-- <button style = "background: #00BFFF;" class="btn btn-primary btn-lg" type="submit">Đăng nhập</button> -->
							</div>
						</div>

					</form>
				</div>
			</div>

			<p class="text-center text-muted mt-md mb-md">Copyright &copy; 2017 SUSOFT. All Rights Reserved.</p>
			<p class="text-center text-muted mt-md mb-md">Design by <span><a target="_blank" href="https://www.facebook.com/emma.nguyen0808" style="color: #FF3030;">Quy Nguyen</a></span></p>
		</div>
	</section>

</body>
</html>