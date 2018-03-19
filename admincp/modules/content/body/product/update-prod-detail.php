<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	if(isset($_GET['idprod'])){
		$idprod = $_GET['idprod'];
	}else{
		$idprod = '';
	}
	//echo $iddetail;
	$query = mysql_query("SELECT * FROM productdetail WHERE id_prod = $idprod");
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 12px;">SỬA THÔNG TIN</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/ark.png" alt=""></i>
					</a>
				</li>
				<li><span>Chi tiết sản phẩm</span></li>
				<li><span>Sửa</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<div class = "row">
		<?php while($row = mysql_fetch_array($query)){?>
		<div class="panel-body">
			<form action="modules/content/body/product/check-update-prod-detail.php" method = "POST">
				<div class="form-group">
					<label class="col-md-3 control-label">Mã sản phẩm</label>
					<div class="col-md-3">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i><img src="assets/images/body/ark(3).png" alt=""></i></span>
							</span>
							<input name = "cod_prod" style = "border-radius: 15px;" type="text" class="form-control" value="<?php echo $row['cod_prod']; ?>">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-3 control-label">Số lượng</label>
					<div class="col-md-3">
						<div class="input-group input-group-icon">
							<input name = "quanlity" type="text" class="form-control" value="<?php echo $row['quanlity']; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">Size</label>
					<div class="col-md-2">
						<div class="input-group input-group-icon">
							<input name = "size" type="text" class="form-control" value="<?php echo $row['size']; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">Màu sắc</label>
					<div class="col-md-3">
						<div class="input-group input-group-icon">
							<input name = "color" type="text" class="form-control" value="<?php echo $row['color']; ?>">
						</div>
					</div>
				</div>
				<center><button style = "margin-top: 20px;width: 100px;height: 50px; border:1px #FE980F;border-radius: 10px;background: #FE980F;color: #fff;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);font-size: 16px;" type="submit"><i class = "fa fa-edit"></i>  Sửa</button></center>
			</form>
		</div>
		<?php } ?>
	</div>
</section>