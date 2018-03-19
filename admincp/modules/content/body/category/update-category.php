<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	if(isset($_GET['id-cag'])){
		$idcag = $_GET['id-cag'];
	}else{
		$idcag = '';
	}
	
	$query = mysql_query("SELECT * FROM category WHERE id = $idcag");
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
				<li><span>Danh mục</span></li>
				<li><span>Sửa</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<div class = "row">
		<?php while($row = mysql_fetch_array($query)){?>
		<div class="panel-body">
			<form action="modules/content/body/category/checkupdatecag.php?idcag=<?php echo $idcag; ?>" method = "POST">
				<div class="form-group">
					<label class="col-md-3 control-label">Mã danh mục</label>
					<div class="col-md-3">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i><img src="assets/images/body/ark(3).png" alt=""></i></span>
							</span>
							<input name ="id" type="text" class="form-control" value="<?php echo $row['id']; ?>">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-3 control-label">Tên danh mục</label>
					<div class="col-md-5">
						<div class="input-group input-group-icon">
							<input name ="namecag" type="text" class="form-control" value="<?php echo $row['name_cag']; ?>">
						</div>
					</div>
				</div>

				<center><button style = "margin-top: 20px;width: 100px;height: 50px; border:1px #FE980F;border-radius: 10px;background: #FE980F;color: #fff;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);font-size: 16px;" type="submit" value = "Sửa">Sửa</button></center>
			</form>
		</div>
		<?php } ?>
	</div>
</section>