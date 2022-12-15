<?php
include('security.php');
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daxone - eCommerce Bootstrap 4 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/line-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/themify.css">
    <!-- othres CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
        <header class="header-area transparent-bar sticky-bar">
            <div class="main-header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo mt-40">
                                <a href="index.html"><img src="assets/images/logo/logo-1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="main-menu menu-common-style menu-lh-1 menu-other-style">
                                <nav>
                                    <ul>
                                        <li class=" angle-shape"><a href="index.php">Home</a>
                                            <ul class="submenu">
                                                <li><a href="#FP">Featured Products</a></li>
                                                <li><a href="#BP">Best Products</a></li>
                                                <li><a href="#AP">All Products</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <li class=""><a href="cart.php"> Cart Page</a>
                                            
                                        </li>
                                        <li class=""><a href="blog.html">Blog</a>
                                            
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="login-register.html">Login/Register</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-right-wrap mt-45">
                            <div class="header-wishlist">
                                    <a href="cart.php"><i class="la la-shopping-cart"></i></a>
                                </div>
                                <div class="header-login ml-40">
                                    <a href="login-register.html"><i class="la la-user"></i></a>
                                </div>
                                <div class="cart-wrap common-style ml-30 ">
        
                                  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="la la-close"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="la la-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.php">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="#FP">Featured Products</a></li>
                                        <li><a href="#BP">Best Products</a></li>
                                        <li><a href="#AP">All Products</a></li>
                                        
                                    </ul>
                                </li>
                                
                                <li class="menu-item-has-children"><a href="cart.php">Cart Page</a>
                                    
                                </li>
                                <li class="menu-item-has-children "><a href="blog.html">Blog</a>
                                    
                                </li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="login-register.html">Login/Register</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-currency-active" href="#">Currency <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown curr-dropdown-active">
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">Real</a></li>
                                <li><a href="#">BDT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Creat Account</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                    <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                    <a class="pinterest" href="#"><i class="ti-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="ti-instagram"></i></a>
                    <a class="google" href="#"><i class="ti-google"></i></a>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="slider-active owl-carousel nav-style-1 dot-style-1 nav-dot-left">
                <div class="single-slider height-100vh bg-img" data-dot="01" style="background-image:url(assets/images/slider/homeslider1.jpeg);" >
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-6">
                                <div class="slider-sin-img-hm1 slider-sin-mrg1 slider-animated-1">
                                    <img class="animated" src="assets/images/slider/homeslider1.1.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-6">
                                <div class="slider-content-1 slider-animated-1 ml-70">
                                    <h3 class="animated">30% off</h3>
                                    <h1 class="animated">Reliable Items</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider height-100vh bg-img" data-dot="02" style="background-image:url(assets/images/slider/homeslider2.jpeg);">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-6">
                                <div class="slider-sin-img-hm1 slider-sin-mrg1 slider-animated-1">
                                    <img class="animated" src="assets/images/slider/homeslider2.1.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-6">
                                <div class="slider-content-1 slider-animated-1 ml-70">
                                    <h3 class="animated">30% off</h3>
                                    <h1 class="animated">Mobile/Laptops</h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
           <?php
    $query = "SELECT * FROM featured_products";
    $query_run = mysqli_query($connection, $query);

     $query2 = "SELECT * FROM best_products";
    $query_run2 = mysqli_query($connection, $query2);

     $query3 = "SELECT * FROM general_products";
    $query_run3 = mysqli_query($connection, $query3);
    ?>
        <div class="product-area pb-60">
            <div class="container">
                <div class="section-title text-center mb-40">
                <a name="FP"><h2>Featured Products</h2></a>
                 <!-- <h2>General Products</h2>  -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                </div>
                <div class="row">
                    <?php
            if(mysqli_num_rows($query_run) > 0)        
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrap mb-35">
                            <div class="product-img mb-15">
                                <img style="height: 350px ; width: 350px ;" src=admin/<?php echo $row['F_Product_Photo'];?> alt="product">
                               
                            </div>

                            <div class="product-content">
                                <span><?php  echo $row['F_Name']; ?></span>
                                <h4><a href="product-details.html"><?php  echo $row['F_Color']; ?></a></h4>
                                <div class="price-addtocart">
                                    <div class="product-price">
                                        <span>$<?php  echo $row['F_Prize']; ?></span>
                                    </div>
                                    <div class="product-addtocart">

                                        <form action="cart.php" method="post">
                                             <input type="hidden" name="f_product_id" value="<?php echo $row['F_ProductID'] ?>">
                                        <a title="Add To Cart" href="#" > <button type="submit" style="background-color:#ff5151; color:white; border:#ff5151" name="f_cartbtn" > + Add To Cart </button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php


                } 
            }
            ?>
                   
        </div>
           
        <div class="product-area pb-60">
            <div class="container">
                <div class="section-title text-center mb-40">
                    <a name="BP"><h2>Best Products</h2></a>
                    <!-- <h2>All Products</h2> -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                </div>
                <div class="row">
                    <?php
            if(mysqli_num_rows($query_run2) > 0)        
            {
                while($row = mysqli_fetch_assoc($query_run2))
                {
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrap mb-35">
                            <div class="product-img mb-15">
                                <img style="height: 350px ; width: 350px ;" src=admin/<?php echo $row['B_Product_Photo'];?> alt="product">
                               
                            </div>

                            <div class="product-content">
                                <span><?php  echo $row['B_Name']; ?></span>
                                <h4><a href="product-details.html"><?php  echo $row['B_Color']; ?></a></h4>
                                <div class="price-addtocart">
                                    <div class="product-price">
                                        <span>$<?php  echo $row['B_Prize']; ?></span>
                                    </div>
                                    <div class="product-addtocart">

                                       <form action="cart.php" method="post">
                                             <input type="hidden" name="b_product_id" value="<?php echo $row['B_ProductID'] ?>">
                                        <a title="Add To Cart" href="#" > <button type="submit" style="background-color:#ff5151; color:white; border:#ff5151" name="b_cartbtn" > + Add To Cart </button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php


                } 
            }
            ?>
                   
        </div>

        <div class="product-area pb-60">
            <div class="container">
                <div class="section-title text-center mb-40">
                    <a name="AP"><h2>All Products</h2></a>
                    <!-- <h2>All Products</h2> -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                </div>
                 <div class="row">
                    <?php
            if(mysqli_num_rows($query_run3) > 0)        
            {
                while($row = mysqli_fetch_assoc($query_run3))
                {
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrap mb-35">
                            <div class="product-img mb-15">
                              <img style="height: 350px ; width: 350px ;" src=admin/<?php echo $row['G_Product_Photo'];?> alt="product">
                               
                            </div>

                            <div class="product-content">
                                <span><?php  echo $row['G_Name']; ?></span>
                                <h4><a href="product-details.html"><?php  echo $row['G_Color']; ?></a></h4>
                                <div class="price-addtocart">
                                    <div class="product-price">
                                        <span>$<?php  echo $row['G_Prize']; ?></span>
                                    </div>
                                    <div class="product-addtocart">

                                        <form action="cart.php" method="post">
                                             <input type="hidden" name="g_product_id" value="<?php echo $row['G_ProductID'] ?>">
                                        <a title="Add To Cart" href="#" > <button type="submit" style="background-color:#ff5151; color:white; border:#ff5151" name="g_cartbtn" > + Add To Cart </button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php


                } 
            }
            ?>
                   
        </div>

        <footer class="footer-area">
            <div class="footer-top bg-gray pt-120 pb-85">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12 col-sm-6">
                            <div class="footer-widget mb-30">
                                <a href="#"><img src="assets/images/logo/logo-1.png" alt="logo"></a>
                                <div class="footer-social">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a><i class=" ti-facebook "></i></a></li>
                                        <li><a><i class=" ti-twitter-alt "></i></a></li>
                                        <li><a><i class=" ti-pinterest "></i></a></li>
                                        <li><a><i class=" ti-vimeo-alt "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 col-sm-6">
                            <div class="footer-widget mb-30 footer-mrg-hm1">
                                <div class="footer-title">
                                    <h3>Useful Link</h3>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="cart.php">Shopping Cat</a></li>
                                        <li><a>WIshlist</a></li>
                                        <li><a>Chekout</a></li>
                                        <li><a href="contact.php">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2 col-12 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h3>About us</h3>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a>Products</a></li>
                                        <li><a>Terms and conditions</a></li>
                                        <li><a href="contact.php">Help Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <div class="subscribe-style mt-45">
                                    <p>Subscribe to get all new updates</p>
                                    <div id="mc_embed_signup" class="subscribe-form mt-20">
                                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Enter your email" name="EMAIL" value="">
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-gray-2 ptb-20">
                <div class="container">
                    <div class="copyright text-center">
                        <p>Copyright © <a href="#">Daxone</a>. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product/quickview-l1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/images/product/quickview-l2.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/images/product/quickview-l3.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/images/product/quickview-l2.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/images/product/quickview-s1.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="assets/images/product/quickview-s3.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="assets/images/product/quickview-s4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <span>Life Style</span>
                                    <h2>LaaVista Depro, FX 829 v1</h2>
                                    <div class="product-ratting-review">
                                        <div class="product-ratting">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-o"></i>
                                        </div>
                                        <div class="product-review">
                                            <span>40+ Reviews</span>
                                        </div>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="red"></li>
                                                <li class="blue"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">s</a></li>
                                                <li><a href="#">m</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-price-wrap">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                            <span class="old">$230.00</span>
                                        </div>
                                        <div class="dec-rang"><span>- 30%</span></div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </div>
                                    <div class="pro-details-compare-wishlist">
                                        <div class="pro-details-compare">
                                            <a title="Add To Compare" href="#"><i class="la la-retweet"></i> Compare</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i class="la la-heart-o"></i> Add to wish list</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/instafeed.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/owl-carousel.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/textillate.js"></script>
    <script src="assets/js/plugins/elevatezoom.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/smoothscroll.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>