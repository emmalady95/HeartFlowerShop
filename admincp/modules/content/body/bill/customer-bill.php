
<?php 
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");

	//Sum of record in database
	$count = mysql_query("SELECT COUNT(*) from bill where state = 'chưa duyệt'");
	$rcount = mysql_fetch_array($count);
	$recorddb = $rcount[0];

	$page = ceil($recorddb/$size4);
	// echo $page;
?>
<!--<section role="main" class="content-body">-->
<!--	<header class="page-header">-->
<!--		<h2 style = "font-size: 17px;">DANH SÁCH ĐƠN HÀNG</h2>-->
<!---->
<!--		<div class="right-wrapper pull-right">-->
<!--			<ol class="breadcrumbs">-->
<!--				<li>-->
<!--					<a href="index.php">-->
<!--						<i><img src="assets/images/body/key.png" alt=""></i>-->
<!--					</a>-->
<!--				</li>-->
<!--				<li><span>Hóa đơn</span></li>-->
<!--			</ol>-->
<!---->
<!--			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>-->
<!--		</div>-->
<!--	</header>-->
<!--	<div class = "row">-->
<!--		<center>-->
<!--			<table border="1">-->
<!--				<tbody>-->
<!--					<tr style = "text-align:center; height:40px;background:#00EE76;color:#1c1c1c;">-->
<!--						<td width="200">Số hóa đơn</td>-->
<!--						<td width="200">Email</td>-->
<!--						<td width="200">Tên khách hàng</td>-->
<!--						<td width="200">Địa chỉ</td>-->
<!--						<td width="200">Số điện thoại</td>-->
<!--						<td width="200">Tổng tiền</td>-->
<!--						<td width="200">Ngày mua hàng</td>-->
<!--						<td width="120">Thông tin</td>-->
<!--						<td width="120"></td>-->
<!--					</tr>-->
<!---->
<!--					--><?php //
//						while($row3 = mysql_fetch_array($result4))
//						{
//					?>
<!--							<tr style="text-align: center;color: #000;">-->
<!--								<td>&nbsp;--><?php //echo $row3['bill_num'];?><!--</td>-->
<!--								<td>&nbsp;--><?php //echo $row3['email'];?><!--</td>-->
<!--								<td>&nbsp;--><?php //echo $row3['fullname'];?><!--</td>-->
<!--								<td>&nbsp;--><?php //echo $row3['address'];?><!--</td>-->
<!--								<td>&nbsp;--><?php //echo $row3['phone'];?><!--</td>-->
<!--								<td>&nbsp;--><?php //echo $row3['sum_money'];?><!--</td>-->
<!--								<td>&nbsp;--><?php //echo $row3['date'];?><!--</td>-->
<!--								<td>&nbsp;<a style = "color:#191970; " href = "?id=--><?php //echo $m; ?><!--&manage=customer-bill-detail&bill-num=--><?php //echo $row3['bill_num']; ?><!--">Chi tiết</a></td>-->
<!--								<td><a style = "color: #FF3030;" href="index.php?yes=--><?php //echo $row3['bill_num'];?><!--">-->
<!--								Duyệt đơn hàng</a></td>-->
<!--							</tr>-->
<!--					--><?php
//						}
//					?>
<!--				</tbody>-->
<!--			</table>-->
<!--		</center>-->
<!--	</div>-->
<!--	<div class = "panel-body">-->
<!--		<center>-->
<!--			<div style = "margin-top: 10px;">-->
<!--				--><?php // for($i = 1; $i <= $page; $i++ ){
//				?>
<!--					<a style = "text-decoration: none;margin:10px;color:#000;background:#00cd66;border: dotted #fff0f5; " href = "?id=--><?php //echo $m;?><!--&manage=account-customer-list&page=--><?php //echo $i; ?><!--">Trang --><?php //echo $i; ?><!--</a>-->
<!--				--><?php // }
//				?>
<!--			</div>-->
<!--		</center>-->
<!--	</div>-->
<!--</section>-->
<section role="main" class="content-body">
    <header class="page-header">
        <h2>DANH SÁCH ĐƠN HÀNG CHƯA DUYỆT</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i><img src="assets/images/body/ark(1).png" alt=""></i>
                    </a>
                </li>
                <li><span>Khách hàng thân thiết</span></li>
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
                    </div>

                    <h2 class="panel-title">Danh sách đơn hàng</h2>
                </header>

                <div class="panel-body">
                    <form>
                        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                            <thead>
                            <tr style="text-align: center;">
                                <th>SỐ HÓA ĐƠN</th>
                                <th>EMAIL</th>
                                <th>TÊN KHÁCH ĐẶT</th>
                                <th>SĐT</th>
                                <th>TÊN KHÁCH NHẬN</th>
                                <th>ĐỊA CHỈ</th>
                                <th>SĐT NHẬN</th>
                            </tr>
                            </thead>

                            <tbody>
                    <?php
                                            while($row3 = mysql_fetch_array($result4))
                                            {
                                        ?>
                                <tr class="gradeX">
                                    <td><?php echo $row3['bill_num'];?></td>
                                    <td>&nbsp;<?php echo $row3['email'];?></td>
                                    <td>&nbsp;<?php echo $row3['fullname'];?></td>
                                    <td>&nbsp;<?php echo $row3['phone'];?></td>
                                    <td>&nbsp;<?php echo $row3['nguoinhan'];?></td>
                                    <td>&nbsp;<?php echo $row3['address'];?></td>
                                    <td>&nbsp;<?php echo $row3['sdt'];?></td>
                                </tr>

                            </tbody>
                        </table>
                    </form>
                    <form>
                        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                            <thead>
                            <tr style="text-align: center;">
                                <th>HT VẬN CHUYỂN</th>
                                <th>HT THANH TOÁN</th>
                                <th>SỐ TK</th>
                                <th>SHIP</th>
                                <th>GIẢM GIÁ</th>
                                <th>TỔNG TIỀN</th>
                                <th>THÔNG ĐIỆP</th>
                                <th>NGÀY LẬP</th>
                                <th>CT ĐƠN HÀNG</th>
                                <th>DUYỆT ĐƠN</th>
                            </tr>
                            </thead>

                            <tbody>
<!--                            --><?php
//                            while($row3 = mysql_fetch_array($result4))
//                            {
//                                ?>
                                <tr class="gradeX">
                                    <td><?php echo $row3['vanchuyen'];?></td>
                                    <td>&nbsp;<?php echo $row3['hinhthuc'];?></td>
                                    <td>&nbsp;<?php echo $row3['taikhoan'];?></td>
                                    <td>&nbsp;<?php echo $row3['ship'];?></td>
                                    <td>&nbsp;<?php echo $row3['giamgia'];?></td>
                                    <td>&nbsp;<?php echo $row3['sum_money'];?></td>
                                    <td>&nbsp;<?php echo $row3['thongdiep'];?></td>
                                    <td>&nbsp;<?php echo $row3['date'];?></td>
                                    <td>&nbsp;<a style = "color:#191970; " href = "?id=<?php echo $m; ?>&manage=customer-bill-detail&bill-num=<?php echo $row3['bill_num']; ?>">Chi tiết</a></td>
                                    <td><a style = "color: #FF3030;" href="index.php?yes=<?php echo $row3['bill_num'];?>">Duyệt đơn hàng</a></td>

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
                    <a style = "text-decoration: none;margin:10px;color:#000;background:#00cd66;border: dotted #fff0f5; " href = "?id=<?php echo $m;?>&manage=account-customer-list&page=<?php echo $i; ?>">Trang <?php echo $i; ?></a>
                <?php  }
                ?>
            </div>
        </center>
    </div>
</section>
