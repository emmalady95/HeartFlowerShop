<section role="main" class="content-body">
	<header class="page-header">
		<h2>THÊM SẢN PHẨM</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/Add.png" alt=""></i>
					</a>
				</li>
				<li><span>Thêm sản phẩm</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<div class="row">
		<div class="col-xs-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>

					<h2 class="panel-title">Thêm sản phẩm mới</h2>
				</header>

				<div class="panel-body">
					<form class="form-horizontal form-bordered" action="modules/content/body/product/check-add-prod.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-md-3 control-label">Mã sản phẩm</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i><img src="assets/images/body/ark(3).png" alt=""></i></span>
									</span>
									<input name = "cod_prod" type="text" class="form-control" placeholder="Nhập mã sản phẩm">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Mã nhóm</label>
							<div class="col-md-3">
							<?php
								$sql = "SELECT * FROM categorydetail"; 
								$query = mysql_query($sql);
							?>
								<select class="form-control populate" name = "id_detail">
									<?php 
										while($row = mysql_fetch_array($query)){
									?>
									<optgroup label="<?php echo $row['name_detail']; ?>">
										<option><?php echo $row[0]; ?></option>
									</optgroup>

									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Tên sản phẩm</label>
							<div class="col-md-5">
								<div class="input-group input-group-icon">
									<input name ="name_prod" style = "border-radius: 15px;" type="text" class="form-control" placeholder="Nhập tên sản phẩm">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Giá sản phẩm</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i class="fa fa-money"></i></span>
									</span>
									<input name ="unit_price" type="text" class="form-control" placeholder="Giá sản phẩm">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Chất liệu</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<input name="material" type="text" class="form-control" placeholder="Chất liệu sản phẩm">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Mô tả sản phẩm</label>
							<div class="col-md-7">
								<div class="input-group input-group-icon">
								<textarea style = "width: 220px;" id = "description" name="description" placeholder="Viết gì đó..."></textarea>
								<!-- <script type="text/javascript" language="javascript">
									ckeditor.replaceAll('description');
								</script> -->
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Hình ảnh</label>
							<div class="col-md-6">
								<input type="file" name="img">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" >Tình trạng</label>
							<div class="col-md-6">
								<input type="text" name="state"  value="còn hàng">
							</div>
						</div>
						<center><button style = "margin-top: 20px;width: 100px;height: 50px; border:1px #FE980F;border-radius: 10px;background: #FE980F;color: #fff;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);font-size: 16px;" type="submit"><i class = "fa fa-plus"></i>  Thêm</button></center>
					</form>
				</div>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>

					<h2 class="panel-title">Thêm chi tiết sản phẩm</h2>
				</header>

				<div class="panel-body">
					<form class="form-horizontal form-bordered" action="modules/content/body/product/check-add-prod-detail.php" method="post">
						<div class="form-group">
							<label class="col-md-3 control-label">Mã sản phẩm</label>
							<div class="col-md-3">
								<?php
									$sql1 = "SELECT cod_prod,name_prod FROM product"; 
									$query1 = mysql_query($sql1);
								?>
								<select name ="cod_prod" class="form-control populate">
									<?php 
										while($row1 = mysql_fetch_array($query1)){
									?>
									<optgroup label="<?php echo $row1['name_prod']; ?>">
										<option><?php echo $row1['cod_prod']; ?></option>
									</optgroup>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Số lượng</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i class = "fa fa-pencil"></i></span>
									</span>
									<input name="quanlity" type="text" class="form-control" placeholder="SL sản phẩm">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Size</label>
							<div class="col-md-1">
								<div class="input-group input-group-icon">
									<input name = "size" type="text" class="form-control" >
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Màu sắc</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<input name = "color" type="text" class="form-control" >
								</div>
							</div>
						</div>
						<center><button style = "margin-top: 20px;width: 100px;height: 50px; border:1px #FE980F;border-radius: 10px;background: #FE980F;color: #fff;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);font-size: 16px;" type="submit"><i class = "fa fa-plus"></i>  Thêm</button></center>
					</form>
				</div>
			</section>
		</div>
	</div>
</section>
<script src="assets/ckeditor/ckeditor.js" type="text/javascript" ></script>
