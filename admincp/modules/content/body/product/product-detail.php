<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
?>
<?php

	//Sum of record in database
	$count = mysql_query('SELECT COUNT(*) FROM productdetail');
	$rcount = mysql_fetch_array($count);
	$recorddb = $rcount[0];

	$page6 = ceil($recorddb/$size6);
	// echo $page;
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style="font-size: 13px;">CHI TIẾT SẢN PHẨM</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/ark(1).png" alt=""></i>
					</a>
				</li>
				<li><span>Chi tiết sản phẩm</span></li>
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

					<h2 class="panel-title">Tìm kiếm sản phẩm</h2>
				</header>

				<div class="panel-body">
					<form class="form-horizontal form-bordered" action="index.php?manage=search-product-detail" method = "POST">
						<div class="form-group">
							<label style = "margin-top: 25px;" class="col-md-3 control-label">Nhập thông tin</label>
							<div style = "margin-top: 20px;" class="col-md-5 control-label">
								<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-file-archive-o"></i>
								</span>
								<input id="namecag" name = "name" data-plugin-masked-input data-input-mask="" placeholder="Nhập tên danh mục" class="form-control">
								</div>
							</div>
							<div class="col-md-1 control-label">
								<input name = "ok" id = "ok" style = "margin-top: 15px;width: 70px;height: 40px; border:1px #FE980F;border-radius: 10px;background: #FFEC8B;color: #000;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);" type="submit" value="Tìm kiếm"></input>
							</div>
						</div>
					</form>
					<div style = "width:290px;margin:20px;text-align: center;height: 30px;color:#FF3030;">
					</div>
				</div>
			</section>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="panel-body">
				<form>
					<table class="table table-bordered table-striped mb-none" id="datatable-editable">
						<thead>
							<tr style="text-align: center;">
								<th>MÃ SẢN PHẨM</th>
								<th>SỐ LƯỢNG</th>
								<th>SIZE</th>
								<th>MÀU SẮC</th>
								<th>CHỌN</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								while($row6 = mysql_fetch_array($result6))
								{	
							?>
							<tr class="gradeX">
								<td><?php echo $row6['cod_prod']; ?></td>
								<td><?php echo $row6['quanlity']; ?></td>
								<td><?php echo $row6['size']; ?></td>
								<td><?php echo $row6['color']; ?></td>
								<td class="actions">
									<a href="?id=<?php echo $m;?>&manage=update-prod-detail&idprod=<?php echo $row6['id_prod']; ?>" class="on-default edit-row"><i><img src="assets/images/body/brush.png" alt=""></i></a>
									<a class="mt-xs mb-xs mr-xs popup-with-zoom-anim" href="#delete"><i><img src="assets/images/body/trash_empty.png" alt=""></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class = "panel-body">
		<center>
			<div style = "margin-top: 10px;">
				<?php  for($i = 1; $i <= $page6; $i++ ){
				?>
					<a style = "text-decoration: none;margin:10px;color:#000;background:#00cd66;border: dotted #fff0f5; " href = "?id=<?php echo $m;?>&manage=product-detail-list&page=<?php echo $i; ?>">Trang <?php echo $i; ?></a>
				<?php  }
				?>
			</div>
		</center>
	</div>
</section>
<div id="delete" class="dialog dialog-sm zoom-anim-dialog mfp-hide">
	<form action="modules/content/body/product /check-del-prod-detail.php" method="POST">
		<header>
			<center><h4>CẢNH BÁO!</h4></center>
		</header>
		
		<p>Bạn có chắc chắn muốn xóa?</p>
		<center><button style="background: #FF7F00; width: 60px;color: #fff;border:1px #FF7F00" type="submit">OK</button></center>
	</form>
</div>

	<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>
	<script src="assets/javascripts/ui-elements/examples.lightbox.js"></script>