<?php
    @session_start();
    require('php/connect-db.php');
    mysql_query("SET NAMES 'utf8'");
   	if(isset($_SESSION['admin'])){
		$id = $_SESSION['admin'];
	}
	$sql = "SELECT tenkh,role FROM taikhoan where email = '$id'";
	$em = $id;
	$query = mysql_query($sql);
	$result = mysql_fetch_array($query);
	$fullname = $result['tenkh'];
	$role = $result['role'];
?>

<!-- start: search & user box -->
<div class="header-right">
	<form class="search nav-form">
		<marquee class = "head-wel">Chào mừng bạn đến với trang quản trị hệ thống</marquee>
	</form>
	
	<span class="separator"></span>

	<div id="userbox" class="userbox">
		<a href="#" data-toggle="dropdown">
			<figure class="profile-picture">
				<img src="assets/images/admin.png" alt="Name" class="img-circle" data-lock-picture="assets/images/admin.png" />
			</figure>
			<div class="profile-info" data-lock-name="<?php echo $fullname; ?>" data-lock-email="<?php echo $id; ?>">
				<span class="name"><?php echo $fullname; ?></span>
				<span class="role"><?php echo $role; ?></span>
			</div>

			<i class="fa custom-caret"></i>
		</a>

		<div class="dropdown-menu">
			<ul class="list-unstyled">
				<li class="divider"></li>
				<li>
					<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Đăng xuất</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- end: search & user box -->