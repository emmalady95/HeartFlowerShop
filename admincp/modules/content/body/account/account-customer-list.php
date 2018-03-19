<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");

	//Sum of record in database
	$count = mysql_query("SELECT COUNT(*) from account where role = 'customer'");
	$rcount = mysql_fetch_array($count);
	$recorddb = $rcount[0];

	$page = ceil($recorddb/$size3);
	// echo $page;
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 17px;">DANH SÁCH TÀI KHOẢN</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/key.png" alt=""></i>
					</a>
				</li>
				<li><span>Khách hàng</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>
	<div class = "row">
		<center>
			<table border="1">
				<tbody>
					<tr style = "text-align:center; height:40px;background:#00EE76;color:#1c1c1c;">
						<td width="60">Chọn</td>
						<td width="60">Xóa</td>
						<td width="200">Email</td>
						<td width="200">Tên khách hàng</td>
						<td width="120">Thông tin</td>
					</tr>

					<?php 
						while($row3 = mysql_fetch_array($result3))
						{	
					?>
							<tr style="text-align: center;color: #000;">
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;<?php echo $row3['email'];?></td>
								<td>&nbsp;<?php echo $row3['fullname'];?></td>
								<td>&nbsp;<a href = "?manage=account-customer-detail&email=<?php echo $row3['email']; ?>">Chi tiết</a></td>
							</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</center>
	</div>
	<div class = "panel-body">
		<center>
			<div style = "margin-top: 10px;">
				<?php  for($i = 1; $i <= $page; $i++ ){
				?>
					<a style = "text-decoration: none;margin:10px;color:#000;background:#00cd66;border: dotted #fff0f5; " href = "?id=<?php echo $m;?>&manage=account-customer-list&page=<?php echo $i; ?>">Trang <?php echo $i; ?></a>
				<?php  }
				?>
			</div>
		</center>
	</div>
</section>