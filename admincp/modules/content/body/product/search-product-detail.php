<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>KẾT QUẢ TÌM KIẾM</h2>

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
	<?php 
		if(count($_POST) > 0){
			$name = $_POST['name'];
			//echo $name;
			$query = mysql_query("SELECT * FROM productdetail WHERE cod_prod like '%$name%' OR quanlity like '%$name%' OR size like '%$name%' OR color like '%$name%'");
			//echo "SELECT * FROM category WHERE id like $name OR name_cag='%$name%'";
		}
	 ?>

	 
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
								while($row = mysql_fetch_array($query))
								{	
							?>
							<tr class="gradeX">
								<td><?php echo $row['cod_prod']; ?></td>
								<td><?php echo $row['quanlity']; ?></td>
								<td><?php echo $row['size']; ?></td>
								<td><?php echo $row['color']; ?></td>
								<td class="actions">
									<a href="?manage=update-prod-detail&idprod=<?php echo $row['id_prod']; ?>" class="on-default edit-row"><i><img src="assets/images/body/brush.png" alt=""></i></a>
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
</section>