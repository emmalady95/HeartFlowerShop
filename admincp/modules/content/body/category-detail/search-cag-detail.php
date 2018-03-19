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
			$query = mysql_query("SELECT * FROM categorydetail WHERE id_detail like '%$name%' OR id like '%$name%' OR name_detail like '%$name%'");
			//echo "SELECT * FROM category WHERE id like $name OR name_cag='%$name%'";
			//$row = mysql_fetch_array($query);
		}
	 ?>

	 
	 <div class="row">

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
						<?php while ($row = mysql_fetch_array($query)){ ?>
						<tr class="gradeX">
							<td><?php echo $row['id_detail']; ?></td>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name_detail']; ?></td>
							<td class="actions">
								<a href="?manage=update-cag-detail&iddetail=<?php echo $row['id_detail']; ?>" class="on-default edit-row"><i><img src="assets/images/body/brush.png" alt=""></i></a>
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