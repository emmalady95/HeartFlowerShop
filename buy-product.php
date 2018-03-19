<?php
/**
 * Created by PhpStorm.
 * User: Liz Nguyen
 * Date: 06/03/2018
 * Time: 11:30
 */
?>
<?php
    @session_start();
    require('assets/connect-db.php');
    mysql_query("SET NAMES 'utf8'");
    if(isset($_SESSION['error'])){
        echo "<script>alert('{$_SESSION['error']}');</script>";
        unset($_SESSION['error']);
        $email = $_SESSION['customer'];
}
?><!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>Mua hàng | Heart Flower Shop</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="images/favico.png">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="assets/pages/css/components.css" rel="stylesheet">
    <link href="assets/corporate/css/style.css" rel="stylesheet">
    <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
    <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="assets/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
<!-- BEGIN STYLE CUSTOMIZER -->
<div class="color-panel hidden-sm">
    <div class="color-mode-icons icon-color"></div>
    <div class="color-mode-icons icon-color-close"></div>
    <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
            <li class="color-red current color-default" data-style="red"></li>
            <li class="color-blue" data-style="blue"></li>
            <li class="color-green" data-style="green"></li>
            <li class="color-orange" data-style="orange"></li>
            <li class="color-gray" data-style="gray"></li>
            <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
    </div>
</div>
<!-- END BEGIN STYLE CUSTOMIZER -->

<?php
include('assets/php/top-bar.php');
include('assets/php/header.php');
?>
<!-- Header END -->

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="cart.php">Giỏ hàng</a></li>
            <li class="active">Mua hàng</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Mua hàng</h1>
                <!-- BEGIN CHECKOUT PAGE -->
                <div class="panel-group checkout-page accordion scrollable" id="checkout-page">


                    <!-- BEGIN PAYMENT ADDRESS -->
                    <div id="payment-address" class="panel panel-default" action = "buy-cart.php" method = "POST">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-address-content" class="accordion-toggle">
                                    Bước 1: Thông tin giao nhận hàng
                                </a>
                            </h2>
                        </div>
                        <div id="payment-address-content" class="panel-collapse collapse">
                            <div class="panel-body row">
                                <div class="col-md-6 col-sm-6">
                                    <h3>Thông tin cá nhân</h3>
                                    <div class="form-group">
                                        <label for="firstname">Tên người nhận <span class="require">*</span></label>
                                        <input type="text" id="firstname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-Mail <span class="require">*</span></label>
                                        <input type="text" id="email" class="form-control" value="<?php echo $email;?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telephone">SĐT <span class="require">*</span></label>
                                        <input type="text" id="telephone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h3>Địa chỉ giao nhận hàng</h3>
                                    <div class="form-group">
                                        <label for="address1">Địa chỉ</label>
                                        <input type="text" id="address1" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Thành phố <span class="require">*</span></label>
                                        <select class="form-control input-sm" id="country">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="244">Hà Nội</option>
                                            <option value="1">Đà Nẵng</option>
                                            <option value="2">Thành Phố Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="region-state">Region/State <span class="require">*</span></label>
                                        <select class="form-control input-sm" id="region-state">
                                            <option value=""> --- Please Select --- </option>
                                            <<option value="">
                                                Quận Hai Bà Trưng</option>
                                            <option value="">
                                                Quận Hoàn Kiếm</option>
                                            <option value="">
                                                Quận Đống Đa</option>
                                            <option value="">
                                                Quận Ba Đình</option>
                                            <option value="">
                                                Quận Cầu Giấy</option>
                                            <option value="">
                                                Quận Long Biên</option>
                                           <option value="">
                                                Quận Hà Đông</option>
                                            <option value="">
                                                Quận Thanh Xuân</option>
                                           <option value="">
                                                Quận Hoàng Mai</option>

                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <button class="btn btn-primary  pull-right" type="submit" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-address-content" id="button-payment-address">Tiếp tục</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAYMENT ADDRESS -->

                    <!-- BEGIN SHIPPING ADDRESS -->
                    <div id="shipping-address" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-address-content" class="accordion-toggle">
                                    Bước 2: Chọn hình thức thanh toán
                                </a>
                            </h2>
                        </div>
                        <div id="shipping-address-content" class="panel-collapse collapse">
                            <div class="panel-body row">
                                <div class="panel-body row">
                                    <div class="col-md-12">
                                        <p>Chọn hai hình thức dưới đây.</p>
                                        <div class="radio-list">
                                            <label>
                                                <input type="radio" name="FlatShippingRate" value="COD"> Trả sau
                                            </label>
                                            <label>
                                                <input type="radio" name="FlatShippingRate" value="ATM"> Trả trước (chuyển tiền qua tài khoản 104001840061 tại ngân hàng Viettinbank)
                                        </div>
                                        <div class="form-group">
                                            <label for="delivery-comments">Nhập tài khoản ngân hàng của bạn khi chuyển tiền (Nếu chọn thanh toán trả trước)</label>
                                            <textarea id="delivery-comments" rows="8" class="form-control"></textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary  pull-right" type="submit" id="button-shipping-address" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-method-content">Tiếp tục</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SHIPPING ADDRESS -->

                    <!-- BEGIN SHIPPING METHOD -->
                    <div id="shipping-method" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-method-content" class="accordion-toggle">
                                    Bước 3: Chọn hình thức nhận hàng
                                </a>
                            </h2>
                        </div>
                        <div id="shipping-method-content" class="panel-collapse collapse">
                            <div class="panel-body row">
                                <div class="col-md-12">
                                    <p>Chọn hình thức nhận hàng dưới đây</p>
                                    <h4>Flat Rate</h4>
                                    <div class="radio-list">
                                        <label>
                                            <input type="radio" name="FlatShippingRate" value="live"> Nhận trực tiếp
                                        </label>
                                        <label>
                                            <input type="radio" name="FlatShippingRate" value="anonymous"> Giấu mặt
                                        </label>
                                    </div>
                                    <button class="btn btn-primary  pull-right" type="submit" id="button-shipping-method" data-toggle="collapse" data-parent="#checkout-page" data-target="#payment-method-content">Tiếp tục</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SHIPPING METHOD -->

                    <!-- BEGIN PAYMENT METHOD -->
                    <div id="payment-method" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-method-content" class="accordion-toggle">
                                    Bước 5: Xác nhận đơn hàng
                                </a>
                            </h2>
                        </div>
                        <div id="payment-method-content" class="panel-collapse collapse">
                            <div class="panel-body row">
                                <div class="col-md-12 clearfix">
                                    <div class="table-wrapper-responsive">
                                        <table>
                                            <tr>
                                                <th class="checkout-image">Ảnh</th>
                                                <th class="checkout-description">Mô tả</th>
                                                <th class="checkout-quantity">Số lượng</th>
                                                <th class="checkout-price">Giá</th>
                                                <th class="checkout-total">Tổng</th>
                                            </tr>
                                            <?php $query2 = mysql_query("SELECT c.id,email,masp,sl,gia,ngaylap from giohang c, ctgiohang cd where (c.id = cd.id) and (email = '$email')");

                                            while($row = mysql_fetch_array($query2)){
                                            ?>
                                            <tr>
                                                <td class="checkout-image">
                                                    <?php
                                                    $cod = $row['masp'];
                                                    $sql = mysql_query("SELECT anh FROM sanpham WHERE masp = '$cod' ");
                                                    $row2 = mysql_fetch_array($sql);

                                                    ?><?php echo '<img class = "col-xs-7" src="data:image/png;base64,'.base64_encode( $row2[0] ).'"/>';?>
                                                </td>
                                                <td class="checkout-description">
                                                    <h3><a href="javascript:;"> <?php
                                                            $cod1 = $row['masp'];
                                                            $sql3 = mysql_query("SELECT tensp FROM sanpham WHERE masp= '$cod1'");
                                                            $row3 = mysql_fetch_array($sql3);
                                                            echo $row3[0];
                                                            ?></a></h3>
                                                </td>
                                                <td class="checkout-quantity"><?php echo $row['sl']; ?></td>
                                                <td class="checkout-price"><strong><span>VNĐ </span><?php echo number_format($row['gia']); ?></strong></td>
                                                <td class="checkout-total"><strong><span>VNĐ </span> <?php
                                                        $price = $row['gia'];
                                                        $int = $row['sl'];
                                                        $total= $int * $price;
                                                        echo number_format($total);
                                                        ?></strong></td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <div class="checkout-total-block">
                                        <ul>

                                            <li>
                                                <?
                                                    $query5 = mysql_query("SELECT SUM(gia*sl) from giohang c, ctgiohang cd where (c.id = cd.id) and (email = '$email')");
                                                    $row5 = mysql_fetch_array($query5);
                                                ?>
                                                <em>Tổng đơn hàng</em>
                                                <strong class="price"><span>VNĐ</span><?php echo $row5[0]; ?></strong>
                                            </li>
                                            <li>
                                                <em>Phí vận chuyển</em>
                                                <strong class="price"><span>VNĐ</span>30,000 Đ</strong>
                                            </li>
                                            <li class="checkout-total-price">
                                                <em>Tổng</em>
                                                <strong class="price"><span>VNĐ</span></strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button class="btn btn-primary pull-right" type="submit" id="button-confirm">Confirm Order</button>
                                    <button type="button" class="btn btn-default pull-right margin-right-20">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAYMENT METHOD -->

                </div>
                <!-- END CHECKOUT PAGE -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>

<!-- BEGIN STEPS -->
<?php
include('assets/php/step.php');
include ('assets/php/pre-footer.php');
?>
<!-- END STEPS -->

<!-- BEGIN PRE-FOOTER -->

<!-- END PRE-FOOTER -->

<?php
include('assets/php/footer.php');
?>
<!-- BEGIN fast view of a product -->
<div id="product-pop-up" style="display: none; width: 700px;">
    <div class="product-page product-pop-up">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-3">
                <div class="product-main-image">
                    <img src="assets/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
                </div>
                <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="assets/pages/img/products/model3.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-9">
                <h1>Cool green dress with red bell</h1>
                <div class="price-availability-block clearfix">
                    <div class="price">
                        <strong><span>$</span>47.00</strong>
                        <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                        Availability: <strong>In Stock</strong>
                    </div>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat
                        Nostrud duis molestie at dolore.</p>
                </div>
                <div class="product-page-options">
                    <div class="pull-left">
                        <label class="control-label">Size:</label>
                        <select class="form-control input-sm">
                            <option>L</option>
                            <option>M</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div class="pull-left">
                        <label class="control-label">Color:</label>
                        <select class="form-control input-sm">
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Black</option>
                        </select>
                    </div>
                </div>
                <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                </div>
            </div>

            <div class="sticker sticker-sale"></div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<![endif]-->
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
<script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
<script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

<script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
<script src="assets/pages/scripts/checkout.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initTwitter();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initUniform();
        Checkout.init();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>