<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	if(isset($_GET['bill-num'])){
		$bill_num= $_GET['bill-num'];
	}else{
		$bill_num='';
	}

	$query = mysql_query("SELECT * FROM billdetail1 WHERE id = $bill_num");
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 16px;">CHI TIẾT</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/key.png" alt=""></i>
					</a>
				</li>
				<li><span>Hóa đơn</span></li>
				<li><span>Chi tiết hóa đơn 1</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>
	<center><h3 style="color: #FE980F;">CHI TIẾT HÓA ĐƠN</h3></center>
	<div class = "row">
		<div class="row">
			<div class="panel-body">
				<form>
					<table class="table table-bordered table-striped mb-none" id="datatable-editable">
						<thead>
							<tr style="text-align: center;">
								<th>MÃ SẢN PHẨM</th>
								<th>SỐ LƯỢNG</th>
								<th>ĐƠN GIÁ</th>
							</tr>
						</thead>

						<tbody>
							<?php
								while($row = mysql_fetch_array($query))
								{
							?>
							<tr class="gradeX">
								<td><?php echo $row['cod_prod'];?></td>
								<td>&nbsp;<?php echo $row['quantity'];?></td>
								<td>&nbsp;<?php echo $row['unit_price'];?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
</section>