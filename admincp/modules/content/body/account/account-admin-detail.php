<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	if(isset($_GET['email'])){
		$em= $_GET['email'];
	}else{
		$em ='';
	}

	$query = mysql_query("SELECT * FROM account WHERE email = '$em'");
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 16px;">CHI TIẾT</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/key.png" alt=""></i>
					</a>
				</li>
				<li><span>ADMIN</span></li>
				<li><span>Chi tiết</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>
	<center><h3 style="color: #FE980F;">THÔNG TIN ADMIN</h3></center>
	<div class = "row">
		<?php 
			while($row = mysql_fetch_array($query))
			{	
		?>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-md-3 control-label">Tên tài khoản</label>
				<div class="col-md-6 control-label">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-user"></i>
						</span>
						<input id="user" data-plugin-masked-input data-input-mask="" placeholder="" class="form-control" value = "<?php echo $row['fullname']; ?>" disabled>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Số điện thoại</label>
				<div class="col-md-6 control-label">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-phone"></i>
						</span>
						<input id="phone" data-plugin-masked-input data-input-mask="" placeholder="" value = "(84) <?php echo $row['phone']; ?>" class="form-control" disabled>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-md-6 control-label">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-google"></i>
						</span>
						<input id="phone" data-plugin-masked-input data-input-mask="" placeholder="" class="form-control" value = "<?php echo $row['email']; ?>" disabled>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Mật khẩu</label>
				<div class="col-md-6 control-label">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-lock"></i>
						</span>
						<input id="phone" data-plugin-masked-input data-input-mask="" placeholder="" class="form-control" value = "<?php echo md5($row['password']); ?>" disabled>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Loại tài khoản</label>
				<div class="col-md-6 control-label">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-key"></i>
						</span>
						<input id="phone" data-plugin-masked-input data-input-mask="" placeholder="" class="form-control" value="<?php echo $row['role']; ?>" disabled>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</section>