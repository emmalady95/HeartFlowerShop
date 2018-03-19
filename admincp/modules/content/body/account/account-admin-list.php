<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");

	//Sum of record in database
	$count = mysql_query("SELECT COUNT(*) from account where role = 'admin'");
	$rcount = mysql_fetch_array($count);
	$recorddb = $rcount[0];

	$page = ceil($recorddb/$size4);
	// echo $page;


	//Sum of record in database
	$count1 = mysql_query("SELECT COUNT(*) from account where role = 'administrator'");
	$rcount1 = mysql_fetch_array($count1);
	$recorddb1 = $rcount1[0];

	$page1 = ceil($recorddb1/$size4);
	// echo $page;

?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2 style = "font-size: 15px;">DANH SÁCH TÀI KHOẢN</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i><img src="assets/images/body/key.png" alt=""></i>
					</a>
				</li>
				<li><span style = "font-size: 12px;">ADMIN</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<!-- ************************************  ADMIN  ***************************************** -->
	<div class="row">
		<div class="col-xs-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<!-- <a href="#" class="fa fa-times"></a> -->
					</div>

					<h2 class="panel-title">ADMIN</h2>
				</header>

				<div class="panel-body">
					<center>
						<table border="1">
							<tbody>
								<tr style = "text-align:center; height:40px;background:#00EE76;color:#1c1c1c;">
									<td width="60">Chọn</td>
									<td width="60">Sửa</td>
									<td width="60">Xóa</td>
									<td width="200">Email</td>
									<td width="200">Tên ADMIN</td>
									<td width="120">Thông tin</td>
								</tr>

								<?php 
									while($row4 = mysql_fetch_array($result4))
									{	
								?>
										<tr style="text-align: center;color: #000;">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;<?php echo $row4['email'];?></td>
											<td>&nbsp;<?php echo $row4['fullname'];?></td>
											<td>&nbsp;<a href = "?id=<?php echo $m; ?>&manage=account-admin-detail&email=<?php echo $row4['email']; ?>">Chi tiết</a></td>
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
									<a style = "text-decoration: none;margin:10px;color:#000;background:#00cd66;border: dotted #fff0f5; " href = "?id=<?php echo $m;?>&manage=account-admin-list&page=<?php echo $i; ?>">Trang <?php echo $i; ?></a>
								<?php  }
								?>
							</div>
						</center>
					</div>
			</section>
		</div>
	</div>


	<!-- **********************************  ADMINÍTRATOR  *************************************** -->
	<div class="row">
		<div class="col-xs-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<!-- <a href="#" class="fa fa-times"></a> -->
					</div>

					<h2 class="panel-title">QUẢN TRỊ CẤP CAO</h2>
				</header>

				<div class="panel-body">
					<center>
						<table border="1">
							<tbody>
								<tr style = "text-align:center; height:40px;background:#00EE76;color:#1c1c1c;">
									<td width="60">Chọn</td>
									<td width="60">Sửa</td>
									<td width="60">Xóa</td>
									<td width="200">Email</td>
									<td width="200">Tên ADMIN</td>
									<td width="120">Thông tin</td>
								</tr>

								<?php 
									while($row5 = mysql_fetch_array($result5))
									{	
								?>
										<tr style="text-align: center;color: #000;">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;<?php echo $row5['email'];?></td>
											<td>&nbsp;<?php echo $row5['fullname'];?></td>
											<td>&nbsp;<a href = "?id=<?php echo $m; ?>&manage=account-admin-detail&email=<?php echo $row5['email']; ?>">Chi tiết</a></td>
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
								<?php  for($i = 1; $i <= $page1; $i++ ){
								?>
									<a style = "text-decoration: none;margin:10px;color:#000;background:#00cd66;border: dotted #fff0f5; " href = "?id=<?php echo $m;?>&manage=account-admin-list&page=<?php echo $i; ?>">Trang <?php echo $i; ?></a>
								<?php  }
								?>
							</div>
						</center>
					</div>
			</section>
		</div>
	</div>
</section>
