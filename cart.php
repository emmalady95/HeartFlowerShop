<?php
/**
 * Created by PhpStorm.
 * User: Liz Nguyen
 * Date: 06/03/2018
 * Time: 10:36
 */
?>
<?php
@session_start();
require('assets/connect-db.php');
mysql_query("SET NAMES 'utf8'");
if(isset($_SESSION['error'])){
    echo "<script>alert('{$_SESSION['error']}');</script>";
    unset($_SESSION['error']);
}
?>
<?php
    @session_start();
    require('assets/connect-db.php');
    mysql_query("SET NAMES 'utf8'");
    $email =$_SESSION['customer'];
    if(isset($_SESSION['cart'])){
        if(isset($_GET['minus'])){
            $minus = $_GET['minus'];
            for($i = 0; $i < count($_SESSION['cart']); $i++){
                if($_SESSION['cart'][$i]['codprod1'] == $minus){
                    $_SESSION['cart'][$i]['quanlity'] -= 1;
                }
            }
        }
        if(isset($_GET['plus'])){
            $plus = $_GET['plus'];
            for($i = 0; $i < count($_SESSION['cart1']); $i++){
                if($_SESSION['cart'][$i]['codprod1'] == $plus){
                    $_SESSION['cart'][$i]['quanlity'] += 1;
                }
            }
        }
    }
//header("Location: cart.php");
?>
<!DOCTYPE html>
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
    <title>Giỏ hàng | Heart Flower Shop</title>

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
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"><!-- for slider-range -->
    <link href="assets/plugins/rateit/src/rateit.css" rel="stylesheet" type="text/css">
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
<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Sản phẩm đã chọn</h1>
                <div class="goods-page">
                    <div class="goods-data clearfix">
                        <div class="table-wrapper-responsive">
                            <?php
                            if(!isset($_SESSION['cart'])){
                                echo '<p style = "text-align:center;margin-top:20px;">Bạn chưa chọn sản phẩm nào</p>';
                            }else{?>
                            <table summary="Shopping cart">
                                <tr>
                                    <th class="goods-page-image">Ảnh</th>
                                    <th class="goods-page-description">Sản phẩm</th>
                                    <th class="goods-page-quantity">Số lượng</th>
                                    <th class="goods-page-price">Đơn giá</th>
                                    <th class="goods-page-total" colspan="2">Tổng tiền</th>
                                </tr>
                                   <?php
                                        for($i = 0; $i < count($_SESSION['cart']); $i++){
                                        $cod = $_SESSION['cart'][$i]['codprod1'];
                                        $query = mysql_query("SELECT * FROM sanpham WHERE masp = '$cod'");
                                        //echo $query;
                                        $row = mysql_fetch_array($query);
                                        $int = 1;

                                ?>
                                <tr>
                                    <td class="goods-page-image">
                                        <a href="">
<!--                                            <img src="assets/pages/img/products/model3.jpg" alt="Berry Lace Dress">-->
                                            <?php echo '<img data-BigImgsrc="data:image/png;base64,'.base64_encode( $row['anh'] ).'" class="img-responsive" src="data:image/png;base64,'.base64_encode( $row['anh'] ).'" />';?>
                                        </a>
                                    </td>
                                    <td class="goods-page-description">
                                        <h3><a href="javascript:;"><?php echo $row['tensp'];?></a></h3>
                                        <p><strong>Sản phẩm <?php echo $i+1;?></strong></p>
                                        <em><?php echo $row['masp'];?></em>
                                    </td>

                                    <td class="goods-page-quantity">
                                        <div class="product-quantity">
                                            <input id="product-quantity" type="text" value=" <?php echo $_SESSION['cart'][$i]['quanlity'];?>" readonly class="form-control input-sm">
                                        </div>
                                    </td>
                                    <td class="goods-page-price">
                                        <strong><span>VNĐ </span><?php echo number_format($row['gia']);?></strong>
                                    </td>
                                    <td class="goods-page-total">
                                        <strong><span>VNĐ </span><?php $price = $row['gia'];
                                            $int = $_SESSION['cart'][$i]['quanlity'];
                                            $total= $int * $price;
                                            echo number_format($total); ?></strong>
                                    </td>
                                    <td class="del-goods-col">
                                        <a class="del-goods" href="javascript:;">&nbsp;</a>
                                    </td>
                                </tr>
                                <?php } } ?>
                            </table>
                        </div>

<!--                        <div class="shopping-total">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <em>Sub total</em>-->
<!--                                    <strong class="price"><span>$</span>47.00</strong>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <em>Shipping cost</em>-->
<!--                                    <strong class="price"><span>$</span>3.00</strong>-->
<!--                                </li>-->
<!--                                <li class="shopping-total-price">-->
<!--                                    <em>Total</em>-->
<!--                                    <strong class="price"><span>$</span>50.00</strong>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                    <button class="btn btn-default" type="submit">Tiếp tục mua hàng <i class="fa fa-shopping-cart"></i></button>
                    <a href = "checkout.php"><button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button></a>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN CONTENT -->
        <div class="col-md-12 col-sm-12">
            <h1>Sản phẩm đã thêm</h1>
            <div class="goods-page">
                <div class="goods-data clearfix">
                    <div class="table-wrapper-responsive">
                        <table summary="Shopping cart">
                            <tr>
                                <th class="goods-page-image">Ảnh</th>
                                <th class="goods-page-description">Sản phẩm</th>
                                <th class="goods-page-quantity">Số lượng</th>
                                <th class="goods-page-price">Đơn giá</th>
                                <th class="goods-page-total" colspan="2">Tổng tiền</th>
                                <th class="goods-page-description">ngày lập</th>
                            </tr>
                            <?php $query2 = mysql_query("SELECT c.id,email,masp,sl,gia,ngaylap from giohang c, ctgiohang cd where (c.id = cd.id) and (email = '$email')");

                            while($row = mysql_fetch_array($query2)){
                            ?>
                                <tr>
                                    <td class="goods-page-image">
                                        <a href="">
                                            <!--                                            <img src="assets/pages/img/products/model3.jpg" alt="Berry Lace Dress">-->

                                            <?php
                                            $cod = $row['masp'];
                                            $sql = mysql_query("SELECT anh FROM sanpham WHERE masp = '$cod' ");
                                            $row2 = mysql_fetch_array($sql);

                                            ?><?php echo '<img class = "col-xs-7" src="data:image/png;base64,'.base64_encode( $row2[0] ).'"/>';?>
                                        </a>
                                    </td>
                                    <td class="goods-page-description">
                                        <h3><a href="javascript:;"> <?php
                                                $cod1 = $row['masp'];
                                                $sql3 = mysql_query("SELECT tensp FROM sanpham WHERE masp= '$cod1'");
                                                $row3 = mysql_fetch_array($sql3);
                                                echo $row3[0];
                                                ?></a></h3>

                                    </td>

                                    <td class="goods-page-quantity">
                                        <div class="product-quantity">
                                            <input id="product-quantity" type="text" value=" <?php echo $row['sl']; ?>" readonly class="form-control input-sm">
                                        </div>
                                    </td>
                                    <td class="goods-page-price">
                                        <strong><span>VNĐ </span><?php echo number_format($row['gia']); ?></strong>
                                    </td>
                                    <td class="goods-page-total">
                                        <strong><span>VNĐ </span>
                                            <?php
                                            $price = $row['gia'];
                                            $int = $row['sl'];
                                            $total= $int * $price;
                                            echo number_format($total);
                                            ?></strong>
                                    </td>
                                    <td class="goods-page-description">
                                        <h3><a href="javascript:;"> <?php echo $row['ngaylap']; ?></a></h3>

                                    </td>

                                </tr>
                            <?php }  ?>
                        </table>
                    </div>

<!--                    <div class="shopping-total">-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <em>Sub total</em>-->
<!--                                <strong class="price"><span>$</span>47.00</strong>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <em>Shipping cost</em>-->
<!--                                <strong class="price"><span>$</span>3.00</strong>-->
<!--                            </li>-->
<!--                            <li class="shopping-total-price">-->
<!--                                <em>Total</em>-->
<!--                                <strong class="price"><span>$</span>50.00</strong>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
                <a href = "buy-product.php"><button class="btn btn-primary" type="submit" style ="margin: 30px; background-color: #49c366;">Mua hàng <i class="fa fa-check"></i></button></a>
            </div>
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
<!-- END fast view of a product -->

<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
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
<script src="assets/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->

<script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initTwitter();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initUniform();
        Layout.initSliderRange();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
