<?php
include('security.php');




if(isset($_POST['f_cartbtn']))
{
    $id = $_POST['f_product_id'];
    $_SESSION['ProductID'] = $_POST['f_product_id'];
    $_SESSION['Category'] = "Featured Product";

    $query = "SELECT * FROM featured_products WHERE F_ProductID='$id' LIMIT 1 ";
    $query_run = mysqli_query($connection, $query);
    $res = mysqli_fetch_array($query_run);

    $_SESSION['F_Product_Photo']=$res['F_Product_Photo'];
    $_SESSION['F_Name']=$res['F_Name'];
    $_SESSION['F_Color']=$res['F_Color'];
    $_SESSION['F_Quantity']=$res['F_Quantity'];
    $_SESSION['F_Prize']=$res['F_Prize'];


    $_SESSION['Product_Photo']=$_SESSION['F_Product_Photo'];
}



//-----------------------------------------------------------------------------------------------------



if(isset($_POST['b_cartbtn']))
{
    $id = $_POST['b_product_id'];
    $_SESSION['ProductID'] = $_POST['b_product_id'];
    $_SESSION['Category'] = "Best Product";

    $query = "SELECT * FROM best_products WHERE B_ProductID='$id' LIMIT 1 ";
    $query_run = mysqli_query($connection, $query);
    $res = mysqli_fetch_array($query_run);

    $_SESSION['B_Product_Photo']=$res['B_Product_Photo'];
    $_SESSION['B_Name']=$res['B_Name'];
    $_SESSION['B_Color']=$res['B_Color'];
    $_SESSION['B_Quantity']=$res['B_Quantity'];
    $_SESSION['B_Prize']=$res['B_Prize'];

    $_SESSION['Product_Photo']=$_SESSION['B_Product_Photo'];
}




//-----------------------------------------------------------------------------------------------------




if(isset($_POST['g_cartbtn']))
{
    $id = $_POST['g_product_id'];
    $_SESSION['ProductID'] = $_POST['g_product_id'];
    $_SESSION['Category'] = "All Product";

    $query = "SELECT * FROM general_products WHERE G_ProductID='$id' LIMIT 1 ";
    $query_run = mysqli_query($connection, $query);
    $res = mysqli_fetch_array($query_run);

    $_SESSION['G_Product_Photo']=$res['G_Product_Photo'];
    $_SESSION['G_Name']=$res['G_Name'];
    $_SESSION['G_Color']=$res['G_Color'];
    $_SESSION['G_Quantity']=$res['G_Quantity'];
    $_SESSION['G_Prize']=$res['G_Prize'];

    $_SESSION['Product_Photo']=$_SESSION['G_Product_Photo'];
}



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
        <header class="header-area transparent-bar sticky-bar pt-10">
            <div class="main-header-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo/logo-1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="main-menu menu-common-style menu-lh-1 menu-margin-4 menu-font-3 ml-20 menu-others-page">
                                <nav>
                                    <ul>
                                        <li class=""><a href="index.php">Home</a>
                                            
                                        </li>
                                        
                                        <li class=""><a href="cart.php">Cart Page</a>
                                            
                                        </li>
                                        <li class=""><a href="blog.html">Blog</a>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                  
                                    </ul>
                                </nav>
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
        <div class="breadcrumb-area bg-img" style="background-image:url(assets/images/slider/allpagesslider.jpg); ">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>cart page</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">cart </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-main-area pt-85 pb-90">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>action</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                       
                                       
                                            <?php





if(isset($_POST['f_cartbtn']))
{ ?>
     <tr>
                                            <td class="product-thumbnail">
                                                <img style="height: 120px ; width: 120px ;" src=admin/<?php echo $_SESSION['F_Product_Photo'];?> alt="">
                                            </td>
                                            <td class="product-name"><?php echo $_SESSION['F_Name'];?></td>
                                            <td class="product-price-cart"><span class="amount"><?php echo $_SESSION['F_Prize'];?></span></td>
                                            <td class="product-quantity">
                                                <?php echo $_SESSION['F_Quantity'];?>
                                            </td>
                                            <td class="product-subtotal"><?php echo $_SESSION['F_Prize'];?></td>
                                            <td>
                                        
                                                <button onclick='document.getElementById("orderbtn").style.visibility = "visible";'  style="border-radius: 10px; margin-right: 4px; background-color:#ff5151; border: #ff5151; height: 40px; color: white; "> <a href="#orderbtn" style="color:white;">  ORDER</a></button>
                                            </td>
                                        </tr>


                                   <?php   $_SESSION['Product_Name']=$_SESSION['F_Name'];  } ?>


  <?php

//-----------------------------------------------------------------------------------------------------




                                   




if(isset($_POST['b_cartbtn']))
{ ?>
     <tr>
                                            <td class="product-thumbnail">
                                                <img style="height: 120px ; width: 120px ;" src=admin/<?php echo $_SESSION['B_Product_Photo'];?> alt="">
                                            </td>
                                            <td class="product-name"><?php echo $_SESSION['B_Name'];?></td>
                                            <td class="product-price-cart"><span class="amount"><?php echo $_SESSION['B_Prize'];?></span></td>
                                            <td class="product-quantity">
                                                <?php echo $_SESSION['B_Quantity'];?>
                                            </td>
                                            <td class="product-subtotal"><?php echo $_SESSION['B_Prize'];?></td>
                                            <td>
                                                <button onclick='document.getElementById("orderbtn").style.visibility = "visible";' style="border-radius: 10px; margin-right: 4px; background-color:#ff5151; border: #ff5151; height: 40px; color: white; "> <a href="#orderbtn" style="color:white;">  ORDER</a></button>
                                            </td>
                                        </tr>

                                   <?php  $_SESSION['Product_Name']=$_SESSION['B_Name'];   } ?>




  <?php
//-----------------------------------------------------------------------------------------------------




                                  




if(isset($_POST['g_cartbtn']))
{ ?>
     <tr>
                                            <td class="product-thumbnail">
                                                <img style="height: 120px ; width: 120px ;" src=admin/<?php echo $_SESSION['G_Product_Photo'];?> alt="">
                                            </td>
                                            <td class="product-name"><?php echo $_SESSION['G_Name'];?></td>
                                            <td class="product-price-cart"><span class="amount"><?php echo $_SESSION['G_Prize'];?></span></td>
                                            <td class="product-quantity">
                                                <?php echo $_SESSION['G_Quantity'];?>
                                            </td>
                                            <td class="product-subtotal"><?php echo $_SESSION['G_Prize'];?></td>
                                            <td>
                                             <button onclick='document.getElementById("orderbtn").style.visibility = "visible";'  style="border-radius: 10px; margin-right: 4px; background-color:#ff5151; border: #ff5151; height: 40px; color: white; "><a href="#orderbtn" style="color:white;">  ORDER</a></button>
                                            </td>
                                        </tr>

                                   <?php   $_SESSION['Product_Name']=$_SESSION['G_Name'];  } ?>


                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        
                                        <div class="cart-clear">
                                         
                                            <a href="cart.php">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
        <!-- <br>
        <br>   -->   
        <?php  
        if(isset($_SESSION['success']) && $_SESSION['success'] != '')
        {
    echo '<h2 class="bg-primary"> '.$_SESSION['success'].' </h2>';# text-white
    unset($_SESSION['success']);
        }
        if(isset($_SESSION['status']) && $_SESSION['status'] != '' )
        {
      echo '<h2 class="big-danger"> '.$_SESSION['status'].' </h2>';# text-white
      unset($_SESSION['status']);
        }
  ?>                

       
  <div class="get-in-touch-wrap"  style="visibility: hidden;">
    <h3>Customer Order</h3>
    <div class="contact-from contact-shadow">
     <form id="contact-form" action="Code.php" method="post">
        <div class="row">

            <div class="col-lg-6">
                <input name="Customer_Name" type="text" placeholder="Customer Name" required="required">
            </div>
            <div class="col-lg-6">
                <input name="Product_Name" type="text" value=<?php echo $_SESSION['Product_Name'];?> disabled >
            </div>
            <div class="col-lg-6">
                <input name="Product_Quantity" type="number" placeholder="Product Quantity" required="required">
            </div>
            <div class="col-lg-6">
                <input name="Phone_No" type="number" placeholder="Phone Number" required="required">
            </div>
            <div class="col-lg-12">
                <input name="Address" type="text" placeholder="Address" required="required">

            </div>

            <div class="col-lg-12">
                <button class="submit" type="submit" name="order_btn" >ORDER NOW</button>
            </div>

        </div>
    </form>
    <p class="form-messege"></p>
</div>
</div>
                
          <!--   </div>
        </div> -->


                            
        <!-- <br>
        <br> -->
        <div class="get-in-touch-wrap" id="orderbtn" style="visibility: hidden;">
    <h3>Customer Order</h3>
    <div class="contact-from contact-shadow">
     <form id="contact-form" action="Code.php" method="post">
        <div class="row">

            <div class="col-lg-6">
                <input name="Customer_Name" type="text" placeholder="Customer Name" required="required">
            </div>
            <div class="col-lg-6">
                <input name="Product_Name" type="text" value="<?php echo $_SESSION['Product_Name'];?>" disabled >
            </div>
            <div class="col-lg-6">
                <input name="Product_Quantity" type="number" placeholder="Product Quantity" required="required">
            </div>
            <div class="col-lg-6">
                <input name="Phone_No" type="number" placeholder="Phone Number" required="required">
            </div>
            <div class="col-lg-12">
                <input name="Address" type="text" placeholder="Address" required="required">

            </div>

            <div class="col-lg-12">
                <button class="submit" type="submit" name="order_btn" >ORDER NOW</button>
            </div>

        </div>
    </form>
    <p class="form-messege"></p>
</div>
</div>
      <br>
        <br>
        <br>
        <br>
        <footer class="footer-area section-padding-2 bg-bluegray pt-80">
            <div class="container-fluid">
                <div class="footer-top pb-40">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 col-12 col-sm-12">
                            <div class="footer-widget mb-30">
                                <a href="#"><img src="assets/images/logo/logo-1.png" alt="logo"></a>
                                <div class="footer-about">
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-55">
                                <div class="footer-title-3">
                                    <h3>Company</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="about-us.html">About US</a></li>
                                        <li><a href="blog.html">Blogs</a></li>
                                        <li><a>Careers</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 footer-ngtv-mrg1">
                                <div class="footer-title-3">
                                    <h3>Product</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a>Pricing</a></li>
                                        <li><a>Features</a></li>
                                        <li><a>Customers</a></li>
                                        <li><a>Demos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-35">
                                <div class="footer-title-3">
                                    <h3>Helps</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a>Introduction</a></li>
                                        <li><a>Feedback</a></li>
                                        <li><a>Referrals</a></li>
                                        <li><a>Network Status</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-135">
                                <div class="footer-title-3">
                                    <h3>Social Netowrk</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a>Facebook</a></li>
                                        <li><a>Twitter</a></li>
                                        <li><a>Linkedin</a></li>
                                        <li><a>Google +</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-40 border-top-1">
                    <div class="row">
                        <div class="col-xl-7 col-lg-10 col-md-11 ml-auto mr-auto">
                            <div class="footer-tag-wrap">
                                <div class="footer-tag-title">
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="copyright-3 text-center pt-20 pb-20 border-top-1">
                        <p>Copyright © <a href="#">Daxone</a>. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
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