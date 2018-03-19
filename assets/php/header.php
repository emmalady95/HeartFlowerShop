<?php
/**
 * Created by PhpStorm.
 * User: Liz Nguyen
 * Date: 05/03/2018
 * Time: 13:54
 */
?>
<?php
    @session_start();
    require('assets/connect-db.php');
    mysql_query("SET NAMES 'utf8'");
?>
<div class="header">
    <div class="container">
        <a class="site-logo" href="index.php"><img src="images/logo.png" alt="Heart Flower Shop"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <?php if(isset($_SESSION['customer'])){ ?>
            <?php if(isset($_SESSION['cart'])){ ?>
        <!-- BEGIN CART -->
        <div class="top-cart-block">
            <div class="top-cart-info">
                <a href="cart.php" class="top-cart-info-count"><?php echo count($_SESSION['cart']);?> item</a>
                <a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
            </div>
            <i class="fa fa-shopping-cart"></i>

<!--            <div class="top-cart-content-wrapper">-->
<!--                <div class="top-cart-content">-->
<!--                    <ul class="scroller" style="height: 250px;">-->
<!--                        <li>-->
<!--<!--                            <a href="shop-item.html">-->
<!--<!--                                <img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34">-->-->
<!--<!--                            --><?php ////echo '<img width="37" height="34" src="data:image/png;base64,'.base64_encode( $row['anh'] ).'" />';?>
<!--                            </a>-->
<!--                            <span class="cart-content-count">x 1</span>-->
<!--                            <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>-->
<!--                            <em>$1230</em>-->
<!--                            <a href="javascript:void(0);" class="del-goods">&nbsp;</a>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                    --><?php // } ?>
<!--                    <div class="text-right">-->
<!--                        <a href="shop-shopping-cart.html" class="btn btn-default">Giỏ hàng</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
            <?php } else{?>
                <div class="top-cart-block">
                    <div class="top-cart-info">
                        <a href="javascript:void(0);" class="top-cart-info-count">0 items</a>
                        <a href="javascript:void(0);" class="top-cart-info-value">0 VNĐ</a>
                    </div>
                    <i class="fa fa-shopping-cart"></i>
                </div>
            <?php }?>
        <!--END CART -->
        <?php } ?>
        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
            <ul>
                <li>
                    <a href="index.php"">
                       Trang chủ

                    </a>

<!--                    <!-- BEGIN DROPDOWN MENU -->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li class="dropdown-submenu">-->
<!--                            <a href="shop-product-list.html">Hi Tops <i class="fa fa-angle-right"></i></a>-->
<!--                            <ul class="dropdown-menu" role="menu">-->
<!--                                <li><a href="shop-product-list.html">Second Level Link</a></li>-->
<!--                                <li><a href="shop-product-list.html">Second Level Link</a></li>-->
<!--                                <li class="dropdown-submenu">-->
<!--                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">-->
<!--                                        Second Level Link-->
<!--                                        <i class="fa fa-angle-right"></i>-->
<!--                                    </a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="shop-product-list.html">Third Level Link</a></li>-->
<!--                                        <li><a href="shop-product-list.html">Third Level Link</a></li>-->
<!--                                        <li><a href="shop-product-list.html">Third Level Link</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a href="shop-product-list.html">Running Shoes</a></li>-->
<!--                        <li><a href="shop-product-list.html">Jackets and Coats</a></li>-->
<!--                    </ul>-->
<!--                    <!-- END DROPDOWN MENU -->
                </li>
                <li class="dropdown dropdown-megamenu">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Sản phẩm

                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="header-navigation-content">
                                <div class="row">
                                    <div class="col-md-4 header-navigation-col">
                                        <h4>Hoa</h4>
                                        <ul>
                                            <li><a href="product-list.php?prod=1">Love Day</a></li>
                                            <li><a href="product-list.php?prod=2">Special Day</a></li>
                                            <li><a href="product-list.php?prod=3">Wedding Day</a></li>
                                            <li><a href="product-list.php?prod=4">Event Day</a></li>
                                            <li><a href="product-list.php?prod=5">Design Your Life</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 header-navigation-col">
                                        <h4>Quà</h4>
                                        <ul>
                                            <li><a href="product-list.php?prod=6">Thiệp</a></li>
                                            <li><a href="product-list.php?prod=7">Chocolate</a></li>
                                            <li><a href="product-list.php?prod=8">For Couple</a></li>
                                            <li><a href="product-list.php?prod=9">Tri Ân &amp; Kỷ niệm</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="about-us.php">Thông tin Shop</a></li>
                <li>
                    <a href="about-us.php">
                        Vận Chuyển
                    </a>
                </li>

                <!-- BEGIN TOP SEARCH -->
                <li class="menu-search">
                    <span class="sep"></span>
                    <i class="fa fa-search search-btn"></i>
                    <div class="search-box" style = "width:250px;">
                        <form action="#" style = "width:300px;">
                            <div class="input-group" style = "width:300px;">
                                <input type="text" placeholder="Tìm kiếm..." class="form-control">
                                <span class="input-group-btn">
                                     <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- END TOP SEARCH -->
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
