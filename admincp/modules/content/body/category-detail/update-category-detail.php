<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	if(isset($_GET['iddetail'])){
		$iddetail = $_GET['iddetail'];
	}else{
		$iddetail = '';
	}
	//echo $iddetail;
	$query = mysql_query("SELECT * FROM categorydetail WHERE id_detail = $iddetail");
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
				<li><span>Nhóm sản phẩm</span></li>
				<li><span>Sửa</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<div class = "row">
		<?php while($row = mysql_fetch_array($query)){?>
		<div class="panel-body">
			<form action="modules/content/body/category-detail/check-update-cagdetail.php?iddetail=<?php echo $iddetail; ?>" method = "POST">
				<div class="form-group">
					<label class="col-md-3 control-label">Mã danh mục</label>
					<div class="col-md-3 control-label">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<input id="id" data-plugin-masked-input data-input-mask="" name = "id" class="form-control" value="<?php echo $row['id']; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label">Mã nhóm</label>
					<div class="col-md-3 control-label">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<input id="id-detail" data-plugin-masked-input data-input-mask="" name = "id_detail" class="form-control" value="<?php echo $row['id_detail']; ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Tên danh mục</label>
					<div class="col-md-6 control-label">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-user"></i>
							</span>
							<input id="name-detail" data-plugin-masked-input data-input-mask="" name = "name_detail" class="form-control" value="<?php echo $row['name_detail']; ?>">
						</div>
					</div>
				</div>
				<center><button style = "margin-top: 20px;width: 100px;height: 50px; border:1px #FE980F;border-radius: 10px;background: #FE980F;color: #fff;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);font-size: 16px;" type="submit"><i class = "fa fa-edit"></i>  Sửa</button></center>
			</form>
		</div>
		<?php } ?>
	</div>
</section>