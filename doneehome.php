<?php
   include('session.php');
   $sql = "select * from books where category='$login_interest'";
   $result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:28 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header header-2 mb--20 d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="doneehome.html" class="site-brand">
                                <img src="image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-search-block">
                                <form action="products.php" method="post">
                                <input type="text" name="search" placeholder="Type book name here" required>
                                <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                    <div class="login-block">
                                        <h5 class="font-weight-bold"><a href="myaccount.php"><?php echo $login_name;?></a></h5> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <!-- @include('menu.htm') -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <nav class="category-nav white-nav  ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=9">9th Class</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=10">10th Class</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=11">11th Class</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=12">12th Class</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=urdupoetry">Urdu Poetry</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=islamic">Islamic</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=urdunovel">Novel in Urdu</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=englishnovel">Novel in English</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=business">Business</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="productsbycategory.php?category=other">Others</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone color-white">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">+923484436278</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right main-menu--white li-last-0">
									<!-- Home -->
									<li class="menu-item">
										<a href="doneehome.php">Home</a>
									</li>
									<!-- Notification -->
									<li class="menu-item">
										<a href="notification.php">Notification</a>
									</li>
									<!-- Messages -->
									<li class="menu-item">
										<a href="message.php">Messages</a>
									</li>
									<!-- Contact Us -->
									<li class="menu-item">
										<a href="contact.php">Contact</a>
									</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="doneehome.php" class="site-brand">
                                <img src="image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item has-children">
                                            <a href="#">Arts & Photography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                            <ul class="sub-menu">
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Business & Money</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Calendars</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Children's Books</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Comics</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                        <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item "><a href="#">Accessories</a></li>
                                        <li class="cat-item "><a href="#">Education</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                        <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                                Categories</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="cart.html" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <!-- Home -->
									<li class="menu-item">
										<a href="doneehome.php">Home</a>
									</li>
									<!-- Notification -->
									<li class="menu-item">
										<a href="notification.php">Notification</a>
									</li>
									<!-- Messages -->
									<li class="menu-item">
										<a href="message.php">Messages</a>
									</li>
									<!-- Contact Us -->
									<li class="menu-item">
										<a href="contact.php">Contact</a>
									</li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu menu-block-2">
                            <li class="menu-item-has-children">
                                <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="cart.html">USD $</a></li>
                                    <li> <a href="checkout.html">EUR €</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li>Eng</li>
                                    <li>Ban</li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Transactions</a></li>
                                    <li><a href="#">Downloads</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="off-canvas-bottom">
                        <div class="contact-list mb--10">
                            <a href="#" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                            <a href="#" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                        </div>
                        <div class="off-canvas-social">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="doneehome.php" class="site-brand">
                            <img src="image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                <!-- Home -->
									<li class="menu-item">
										<a href="doneehome.php">Home</a>
									</li>
									<!-- Notification -->
									<li class="menu-item">
										<a href="notification.php">Notification</a>
									</li>
									<!-- Messages -->
									<li class="menu-item">
										<a href="message.php">Messages</a>
									</li>
									<!-- Contact Us -->
									<li class="menu-item">
										<a href="contact.php">Contact</a>
									</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
        Hero Area
        ===================================== -->
        <section class="hero-area hero-slider-2">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-12">
                        <div class="sb-slick-slider" data-slick-setting='{
                                                                "autoplay": true,
                                                                "autoplaySpeed": 3000,
                                                                "slidesToShow": 1,
                                                                "dots":true
                                                                }'>
                            <div class="single-slide bg-image" data-bg="image/bg-images/home-2-slider-2.jpg">
                                <div class="home-content pl--30">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h2 class="h2-v2">Book</h2>
                                            <h2 class="h2-v2">Donation</h2>
                                            <span class="title-mid">System</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide bg-image" data-bg="image/bg-images/home-2-slider-1.jpg">
                                <div class="home-content pl--30">
                                <div class="row">
                                        <div class="col-lg-7">
                                            <h2 class="h2-v2">Book Donation</h2>
                                            <span class="title-mid">System</span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br/>
        <br/>
        <section>
            <div class="single-slide">
                <div class="product-card">
                <div class="promo-section-heading">
                    <h2>Recommendations according to your interest</h2>
                </div>
                <?php while ($row = mysqli_fetch_array($result))
                    {
                ?>
                <div style="border:2px solid red;margin:2px;"> 
                    <div class="product-header">
                        <h3><?php 
                            echo $row['name']; 
                        ?></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <?php
                                $isbn=$row['isbn'];
                            
                            echo "<a href='productdetails.php?product=$isbn' > <img style='width:200px;height:300px' src='image/products/product.png' alt=''> </a>"
                            ?>
                        </div>
                    </div>
                </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
   
    <!--=================================
    Footer Area
    ===================================== -->
    <footer class="site-footer">
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-text">Copyright © 2020 <a href="doneehome.php" class="author">Book Donation</a>. All Right Reserved.
                    <br>
                    Developed by Talha , Zubair & Zain</p>
            </div>
        </div>
    </footer>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:28 GMT -->
</html>