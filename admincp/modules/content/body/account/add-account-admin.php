<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 16px;">ADMIN</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/Add.png" alt=""></i>
					</a>
				</li>
				<li><span>Thêm tài khoản</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<center><h3 style="color: #FE980F;">THÊM TÀI KHOẢN</h3></center>
	<div class = "row">
		<div class="panel-body">
			<form action = "modules/content/body/account/check-add-admin.php" method= "POST">
				<div class="form-group">
					<label class="col-md-3 control-label">Tên tài khoản</label>
					<div class="col-md-6 control-label">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<input  name = "fullname" id="user" data-plugin-masked-input data-input-mask="" placeholder="Nhập tên tài khoản" class="form-control">
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
							<input name="phone" id="phone" data-plugin-masked-input data-input-mask="" placeholder="(84) xxx xxx xxxx" class="form-control">
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
							<input name="email" id="email" type = "email" data-plugin-masked-input data-input-mask="" placeholder="Nhập email" class="form-control">
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
							<input name="password" id="password" type= "password" data-plugin-masked-input data-input-mask="" placeholder="Nhập password" class="form-control">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label" style = "margin-top: 10px;">Loại tài khoản</label>
					<div class="col-md-6 control-label">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
							<select name="role">
								<option value="">admin</option>
								<option value="">administrator</option>
							</select>
						</div>
					</div>
				</div>
				<center><button style = "margin-top: 20px;width: 60px;height: 60px; border:1px #FE980F;border-radius: 30px;background: #FE980F;color: #fff;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);" type="submit"><i class = "fa fa-plus"></i>Thêm</button></center>
			</form>
		</div>	
	</div>
</section>