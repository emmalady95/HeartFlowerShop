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
			$query = mysql_query("SELECT * FROM product WHERE cod_prod like '%$name%' OR id_detail like '%$name%' OR name_prod like '%$name%' OR unit_price like '%$name%' OR material like '%$name%' OR state like '%$name%'");
			//echo "SELECT * FROM category WHERE id like $name OR name_cag='%$name%'";
		}
	 ?>

	 
	 <div class="row">

		<div class="panel-body">
			<form>
				<table class="table table-bordered table-striped mb-none" id="datatable-editable">
					<thead>
						<tr style="text-align: center;">
							<th>MÃ SP</th>
							<th>MÃ NHÓM</th>
							<th>TÊN SP</th>
							<th>GIÁ</th>
							<th>MÔ TẢ</th>
							<th>CHẤT LIỆU</th>
							<th>TÌNH TRẠNG</th>
							<th>HÌNH ẢNH</th>
							<th>CHỌN</th>
						</tr>
					</thead>

					<tbody>
					<?php while ($row = mysql_fetch_array($query)){ ?>
						<tr class="gradeX">
							<td>&nbsp;<?php echo $row['cod_prod'];?></td>
							<td>&nbsp;<?php echo $row['id_detail'];?></td>
							<td>&nbsp;<?php echo $row['name_prod'];?></td>
							<td>&nbsp;<?php echo $row['unit_price'];?></td>
							<td>&nbsp;<?php echo $row['description'];?></td>
							<td>&nbsp;<?php echo $row['material'];?></td>
							<td>&nbsp;<?php echo $row['state'];?></td>
							<td>&nbsp;<?php echo '<img class = "col-xs-10" src="data:image/png;base64,'.base64_encode( $row['img'] ).'"/>'; ?></td>
							<td class="actions">
								<a href="?manage=update-product&codprod=<?php echo $row['cod_prod']; ?>" class="on-default edit-row"><i><img src="assets/images/body/brush.png" alt=""></i></a>
								<a class="mt-xs mb-xs mr-xs popup-with-zoom-anim" href="#delete"><i><img src="assets/images/body/trash_empty.png" alt=""></i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</section>