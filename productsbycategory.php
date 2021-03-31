<?php
   include('session.php');
   $category=$_GET['category'];
   $sql = "select * from books where category='$category'";
   $result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:28 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Books by Category</title>
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
                        <h2 class="sr-only">Site Breadcrumb</h2>
                            <div class="container">
                                <div class="breadcrumb-contents">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="doneehome.php">Home</a></li>
                                            <li class="breadcrumb-item active">Products</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </section>
                                <!-- @include('menu.htm') -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <section>
            <div class="single-slide">
                <div class="product-card">
                <div class="promo-section-heading">
                    <h2>Results according to your Selected Category</h2>
                </div>
                <?php while ($row = mysqli_fetch_array($result))
                    {
                ?>
                    <div class="product-header">
                        <h3><?php 
                            echo $row['name']; 
                        ?></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <?php
                                $isbn=$row['isbn'];
                            
                            echo "<a href='productdetails.php?product=$isbn' > <img src='image/products/product.jpg' alt=''> </a>"
                            ?>
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