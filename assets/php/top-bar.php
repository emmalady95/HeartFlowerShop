<?php
/**
 * Created by PhpStorm.
 * User: Liz Nguyen
 * Date: 05/03/2018
 * Time: 13:45
 */
?>
<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span>+84 168 556 1326</span></li>
                    <!-- BEGIN CURRENCIES -->
                    <li class="shop-currencies">
                        <a href="javascript:void(0);">€</a>
                        <a href="javascript:void(0);">£</a>
                        <a href="javascript:void(0);">$</a>
                        <a href="javascript:void(0);" class="current">VND</a>
                    </li>
                    <!-- END CURRENCIES -->
                    <!-- BEGIN LANGS -->
                    <li class="langs-block">
                        <a href="javascript:void(0);" class="current">Việt Nam </a>
                        <div class="langs-block-others-wrapper"><div class="langs-block-others">
                                <a href="javascript:void(0);">English</a>
                                <a href="javascript:void(0);">French</a>
                                <a href="javascript:void(0);">Germany</a>
                                <a href="javascript:void(0);">Turkish</a>
                            </div></div>
                    </li>
                    <!-- END LANGS -->
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                    <?php
                    if(isset($_SESSION['customer'])){
                        $fullname = "";
                        $email = $_SESSION['customer'];
                        $sql = "SELECT * FROM taikhoan where email ='$email'" ;
                        $query = mysql_query($sql);
                        $row = mysql_fetch_array($query);
                        $fullname = $row['tenkh'];
                        $phone = $row['sdt'];
                        ?>
                        <li><a href="shop-account.html"><?php echo $fullname;?></a></li>
                        <li><a href="logout.php">Đăng xuất</a></li>
                    <?php }else{ ?>
                    <li><a href="login.php">Đăng nhập</a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- END TOP BAR MENU -->
        </div>
    </div>
</div>
