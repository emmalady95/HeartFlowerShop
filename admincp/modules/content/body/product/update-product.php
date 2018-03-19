<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	if(isset($_GET['codprod'])){
		$codprod = $_GET['codprod'];
	}else{
		$codprod = '';
	}
	//echo $iddetail;
	$query = mysql_query("SELECT * FROM product WHERE cod_prod = '$codprod'");
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 14px;">SỬA THÔNG TIN</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/ark.png" alt=""></i>
					</a>
				</li>
				<li><span>Sản phẩm</span></li>
				<li><span>Sửa</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<div class = "row">
		<?php while($row = mysql_fetch_array($query)){?>
		<div class="panel-body">
			<form action="modules/content/body/product/check-update-prod.php" method = "POST">
				<div class="form-group">
							<label class="col-md-3 control-label">Mã sản phẩm</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i><img src="assets/images/body/ark(3).png" alt=""></i></span>
									</span>
									<input name ="cod_prod" type="text" class="form-control" value="<?php echo $row['cod_prod']; ?>">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Mã nhóm</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<input name = "id_detail" type="text" class="form-control" value="<?php echo $row['id_detail']; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Tên sản phẩm</label>
							<div class="col-md-5">
								<div class="input-group input-group-icon">
									<input name = "name_prod" style = "border-radius: 15px;" type="text" class="form-control" value="<?php echo $row['name_prod']; ?>">
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
									<input name = "unit_price" type="text" class="form-control" value="<?php echo $row['unit_price']; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Chất liệu</label>
							<div class="col-md-3">
								<div class="input-group input-group-icon">
									<input name ="material" type="text" class="form-control" value="<?php echo $row['material']; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Mô tả sản phẩm</label>
							<div class="col-md-7">
								<div class="input-group input-group-icon">
								<textarea style = "width: 220px;" id = "description" name="description"><?php echo $row['description']; ?></textarea>
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
							<!-- <div class="col-md-6">
								<input type="file" name="img" value="<?php //echo '<img class = "col-xs-10" src="data:image/png;base64,'.base64_encode( $row['img'] ).'"/>'; ?>">
							</div> -->
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" >Tình trạng</label>
							<div class="col-md-6">
								<input type="text" name="state"> value="<?php echo $row['state']; ?>">
							</div>
						</div>
				<center><button style = "margin-top: 20px;width: 100px;height: 50px; border:1px #FE980F;border-radius: 10px;background: #FE980F;color: #fff;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);font-size: 16px;" type="submit"><i class = "fa fa-edit"></i>  Sửa</button></center>
			</form>
		</div>
		<?php } ?>
	</div>
</section>