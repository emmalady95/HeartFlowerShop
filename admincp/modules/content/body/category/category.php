<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
?>
<?php 
	// $err = array();
	// $err['cagname'] = NULL;
	// $namecag = NULL;

	// if(isset($_POST['ok'])){
	// 	if(empty($_POST['namecag'])){
	// 		$err['cagname'] = "* Xin vui lòng nhập tên chuyên mục*";
	// 	}else{
	// 		$namecag = $_POST['name-cag'];
	// 	}
	// 	if($namecag){
	// 		mysql_query("INSERT INTO category(name_cag) values ('$namecag')");
	// 	}
	// }

?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>DANH SÁCH DANH MỤC</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/report.png" alt=""></i>
					</a>
				</li>
				<li><span>Danh mục</span></li>
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

					<h2 class="panel-title">Tìm kiếm danh mục</h2>
				</header>

				<div class="panel-body">
					<form class="form-horizontal form-bordered" action="index.php?manage=search-cag-list" method = "POST">
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
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>

					<h2 class="panel-title">Thêm danh mục mới</h2>
				</header>

				<div class="panel-body">
					<form class="form-horizontal form-bordered" action="modules/content/body/category/checkaddcag.php" method = "POST">
						<div class="form-group">
							<label style = "margin-top: 25px;" class="col-md-3 control-label">Tên danh mục</label>
							<div style = "margin-top: 20px;" class="col-md-5 control-label">
								<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-file-archive-o"></i>
								</span>
								<input id="namecag" name = "namecag" data-plugin-masked-input data-input-mask="" placeholder="Nhập tên danh mục" class="form-control">
								</div>
							</div>
							<div class="col-md-1 control-label">
								<input name = "ok" id = "ok" style = "margin-top: 15px;width: 70px;height: 40px; border:1px #FE980F;border-radius: 10px;background: #FFEC8B;color: #000;box-shadow: 1px 2px 0px 1px rgba(0,0,0,0.6);" type="submit" value="Thêm"></input>
							</div>
						</div>
					</form>
					<div style = "width:290px;margin:20px;text-align: center;height: 30px;color:#FF3030;">
						<?php 
							// if(isset($_GET['error'])){
							// 	echo "* Xin vui lòng nhập tên chuyên mục*";
							// }else{
							// 	echo "";
							// }
						?>
					</div>
				</div>
			</section>
		</div>
	</div>

	<div class="row">
		<?php
		//Tính tổng số record trong DATABASE
			$query = mysql_query('SELECT * FROM category');
		?>

		<div class="panel-body">
			<form>
				<table class="table table-bordered table-striped mb-none" id="datatable-editable">
					<thead>
						<tr style="text-align: center;">
							<th>MÃ DANH MỤC</th>
							<th>TÊN DANH MỤC</th>
							<th>CHỌN</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							while($row = mysql_fetch_array($query))
							{	
						?>
						<tr class="gradeX">
							<td>&nbsp;<?php echo $row['id'];?></td>
							<td>&nbsp;<?php echo $row['name_cag'];?></td>
							<td class="actions">
								<a href="?manage=update-category&id-cag=<?php echo $row['id']; ?>" class="on-default edit-row"><i><img src="assets/images/body/brush.png" alt=""></i></a>
								<a href="modules/content/body/category/check-del-cag.php?id=<?php echo $row['id']; ?>" class="on-default edit-row"><i><img src="assets/images/body/trash_empty.png" alt=""></i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</section>
