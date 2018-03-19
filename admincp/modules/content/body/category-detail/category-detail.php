<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
?>
<?php

	//Tính tổng số record trong DATABASE
	$count = mysql_query('SELECT COUNT(*) FROM categorydetail');
	$rcount = mysql_fetch_array($count);
	$recorddb = $rcount[0];

	$page = ceil($recorddb/$size2);
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 12px;">DANH SÁCH NHÓM SẢN PHẨM</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/ark.png" alt=""></i>
					</a>
				</li>

				<li><span>Nhóm sản phẩm</span></li>
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

					<h2 class="panel-title">Tìm kiếm nhóm sản phẩm</h2>
				</header>

				<div class="panel-body">
					<form class="form-horizontal form-bordered" action="index.php?manage=search-cag-detail" method="POST">

						<div class="form-group">
							<label class="col-md-3 control-label">Nhập thông tin</label>
							<div class="col-md-6">
							<input name = "name" style = "color: #8B1a1a;width: 250px;" type="text" name="name-detail">
							</div>
							<div class="col-md-1 control-label">
								<input name = "ok" id = "ok" style = "margin-top: -15px; width: 70px;height: 40px; border:1px #FE980F;border-radius: 10px;background: #FFEC8B;color: #000;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);" type="submit" value="Tìm kiếm"></input>
							</div>
						</div>
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

					<h2 class="panel-title">Thêm nhóm sản phẩm</h2>
				</header>

				<div class="panel-body">
					<form class="form-horizontal form-bordered" action="modules/content/body/category-detail/checkadddetail.php" method="POST">
						<div class="form-group">
							<label class="col-md-3 control-label">Mã danh mục</label>
							<div class="col-md-6">
							<?php
								$sql = "SELECT id FROM category"; 
								$query = mysql_query($sql);
							?>
								<select name = "id" style = "width:60px; " class="form-control populate">
									<?php 
										while($row = mysql_fetch_array($query)){
									?>
										<option><?php echo $row[0]; ?></option>
										<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Tên nhóm sản phẩm</label>
							<div class="col-md-6">
							<input name = "namedetail" style = "color: #8B1a1a;width: 250px;" type="text" name="name-detail">
							</div>
							<div class="col-md-1 control-label">
								<input name = "ok" id = "ok" style = "margin-top: -15px;margin-right: px; width: 70px;height: 40px; border:1px #FE980F;border-radius: 10px;background: #FFEC8B;color: #000;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);" type="submit" value="Thêm"></input>
							</div>
						</div>
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
					</div>

					<h2 class="panel-title">Danh sách nhóm sản phẩm</h2>
				</header>
				
				<div class="panel-body">
					<form>
						<table class="table table-bordered table-striped mb-none" id="datatable-editable">
							<thead>
								<tr style="text-align: center;">
									<th>MÃ LOẠI</th>
									<th>MÃ DANH MỤC</th>
									<th>TÊN DANH MỤC</th>
									<th>CHỌN</th>
								</tr>
							</thead>

							<tbody>
								<?php 
									while($row1 = mysql_fetch_array($result2))
									{	
								?>
								<tr class="gradeX">
									<td><?php echo $row1['id_detail']; ?></td>
									<td><?php echo $row1['id']; ?></td>
									<td><?php echo $row1['name_detail']; ?></td>
									<td class="actions">
										<a href="?manage=update-cag-detail&iddetail=<?php echo $row1['id_detail']; ?>" class="on-default edit-row"><i><img src="assets/images/body/brush.png" alt=""></i></a>
										<a href="modules/content/body/category-detail/check-del-cag-detail.php?iddetail=<?php echo $row1['id_detail']; ?>" class="on-default edit-row"><i><img src="assets/images/body/trash_empty.png" alt=""></i></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</form>
				</div>
			</section>
		</div>
	</div>
	<div class = "panel-body">
		<center>
			<div style = "margin-top: 10px;">
				<?php  for($i = 1; $i <= $page; $i++ ){
				?>
					<a style = "text-decoration: none;margin:10px;color:#000;background:#00cd66;border: dotted #fff0f5; " href = "?id=<?php echo $m;?>&manage=cag-detail-list&page=<?php echo $i; ?>">Trang <?php echo $i; ?></a>
				<?php  }
				?>
			</div>
		</center>
	</div>
</section>
<div id="delete" class="dialog dialog-sm zoom-anim-dialog mfp-hide">
	<form action="modules/content/body/category-detail/check-del-cag-detail.php" method="POST"">
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