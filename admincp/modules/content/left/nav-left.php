
<!-- start: navigation -->
<aside id="sidebar-left" class="sidebar-left">
	<div class="sidebar-header">
		<div class="sidebar-title">
			MENU
		</div>
		<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">
				<ul class="nav nav-main">
					<li class="nav-active">
						<a href="index.php">
							<i aria-hidden="true"><img src="assets/images/nav-left/home_ic.png" alt=""></i>
							<span>Trang chủ</span>
						</a>
					</li>
					<li class="nav-parent">
						<a>
							<i aria-hidden="true"><img src="assets/images/nav-left/todomvc.png" alt=""></i>
							<span>Quản lý danh mục</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a style = "margin-left: -20px;" href="?manage=cag-list&page=1">&raquo;&nbsp;&nbsp;&nbsp;Thêm danh mục mới
								</a>
							</li>
							<li>
								<a style = "margin-left: -20px;" href="?manage=cag-list&page=1">
									&raquo;&nbsp;&nbsp;&nbsp;Danh sách các danh mục sản phẩm
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-parent">
						<a>
							<i aria-hidden="true"><img src="assets/images/nav-left/ark.png" alt=""></i>
							<span>Quản lý nhóm sản phẩm</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a style = "margin-left: -20px;" href="?manage=cag-detail-list&page=1">&raquo;&nbsp;&nbsp;&nbsp;Thêm nhóm sản phẩm mới
								</a>
							</li>
							<li>
								<a style = "margin-left: -20px;" href="?manage=cag-detail-list&page=1">
									&raquo;&nbsp;&nbsp;&nbsp;Danh sách các nhóm sản phẩm
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-parent">
						<a>
							<i aria-hidden="true"><img src="assets/images/nav-left/ark(1).png" alt=""></i>
							<span>Quản lý sản phẩm</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a style = "margin-left: -20px;" href="?manage=add-product">&raquo;&nbsp;&nbsp;&nbsp;Thêm sản phẩm mới
								</a>
							</li>
							<li>
								<a style = "margin-left: -20px;" href="?manage=product-list&page=1">
									&raquo;&nbsp;&nbsp;&nbsp;Danh sách các sản phẩm
								</a>
							</li>
							<li>
								<a style = "margin-left: -20px;" href="?manage=product-detail-list&page=1">
									&raquo;&nbsp;&nbsp;&nbsp;Chi tiết sản phẩm
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-parent">
						<a>
							<i aria-hidden="true"><img src="assets/images/nav-left/key.png" alt=""></i>
							<span>Quản lý tài khoản</span>
						</a>
						<ul class="nav nav-children">
							<li class="nav-parent">
								<a>
									<i aria-hidden="true"></i>
									<span style = "margin-left: -20px;">&raquo;&nbsp;&nbsp;&nbsp;Khách hàng</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="?manage=account-customer-list&page=1">Danh sách tài khoản
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-parent">
								<a>
									<i aria-hidden="true"></i>
									<span style = "margin-left: -20px;">&raquo;&nbsp;&nbsp;&nbsp;Khách hàng thân thiết</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="?manage=account-vip-list&page=1">Danh sách tài khoản
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-parent">
								<?php 
									if($role == 'administrator'){
								?>
									<a>
										<i aria-hidden="true"></i>
										<span style = "margin-left: -20px;">&raquo;&nbsp;&nbsp;&nbsp;Admin</span>
									</a>

									<ul class="nav nav-children">
										<li>
											<a href="?manage=add-account-admin">Thêm tài khoản
											</a>
										</li>

										<li>
											<a href="?manage=account-admin-list&page=1">Danh sách tài khoản
											</a>
										</li>
									</ul>
							</li>
								<?php }else{ ?>
								<a class="mt-xs mb-xs mr-xs popup-with-zoom-anim" href="#alert">
									<i aria-hidden="true"></i>
									<span style = "margin-left: -20px;">&raquo;&nbsp;&nbsp;&nbsp;Admin</span></a>
									<div id="alert" class="dialog dialog-sm zoom-anim-dialog mfp-hide">
										<center><h4>CẢNH BÁO</h4></center>
										<p>Bạn không có quyền truy cập vào chức năng này</p>
										</div>
								<?php } ?>

						</ul>
					</li>

					<li class="nav-parent">
						<a>
							<i aria-hidden="true"><img src="assets/images/nav-left/icon.png" alt=""></i>
							<span>Quản lý đơn hàng</span>
						</a>
						<ul class="nav nav-children">
							<li class="nav-parent">
								<a>
									<i aria-hidden="true"></i>
									<span style = "margin-left: -20px;">&raquo;&nbsp;&nbsp;&nbsp;Khách hàng thân thiết</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="?manage=customer-bill-wait&page=1">Đơn hàng chờ xử lý
										</a>
									</li>
									<li>
										<a href="?manage=customer-bill">Đơn hàng đã được phê duyệt
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-parent">
								<a>
									<i aria-hidden="true"></i>
									<span style = "margin-left: -20px;">&raquo;&nbsp;&nbsp;&nbsp;Khách hàng</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="#">Đơn hàng chờ xử lý
										</a>
									</li>
									<li>
										<a href="#">Đơn hàng đã được phê duyệt
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li>
						<a href="../home.php" target="_blank">
							<i aria-hidden="true"><img src="assets/images/nav-left/dichvu2.png" alt=""></i>
							<span>Website</span>
						</a>
					</li>
				</ul>
			</nav>

			<hr class="separator" />

			<div class="sidebar-widget widget-tasks">
				<div class="widget-header">
					<h6>KHÁC</h6>
				</div>
				<div class="widget-content">
					<ul class="list-unstyled m-none">
						<li><a href="#">Thông tin</a></li>
						<li><a href="#">Message</a></li>
						<li><a href="#">Kho</a></li>
					</ul>
				</div>
			</div>

			<hr class="separator" />
			
			<p class="text-center text-muted mt-md mb-md">Copyright &copy; 2017 SUSOFT. All Rights Reserved.</p>
			<p class="text-center text-muted mt-md mb-md">Design by <span><a target="_blank" href="https://www.facebook.com/emma.nguyen0808" style = "color:#FF7F24; ">Quy Nguyen</a></span></p>
		</div>
	</div>
</aside>
<!-- end: navigation-->
	<!-- Vendor -->
	<script src="assets/vendor/jquery/jquery.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>
	<script src="assets/javascripts/ui-elements/examples.lightbox.js"></script>