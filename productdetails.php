<?php
    include('config.php');
    $isbn=$_GET['product'];
    $sql = "select * from books where isbn='$isbn'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name=$row['name'];
    $author=$row['author'];
    $category=$row['category'];
    $price=$row['price'];
    $upload=$row['uploadedby'];
    $time=$row['ts'];
    $sql1="SELECT * FROM users WHERE email='$upload'";
    $result1 = mysqli_query($db,$sql1);
    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $name1=$row1['name'];
    $city=$row1['city'];
    $phone=$row1['phone_no'];
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:30 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 ">
                            <a href="index.html" class="site-brand">
                                <img src="image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">03484436278</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="doneehome.php">Home</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main class="inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row  mb--60">
                    <div class="col-lg-5 mb--30">
                            <div class="single-slide">
                                <img src="image/products/product.jpg" alt="">
                            </div>
                            
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details-info pl-lg--30 ">
                            <h3 class="product-title"><?php echo $name; ?></h3>
                            <ul class="list-unstyled">
                                <li>Author Name : <span class="list-value"> <?php echo $author; ?> </span></li>
                                <li>Category : <span class="list-value"><?php echo $category; ?> </span> </li>
                                <li>Price : <span class="list-value"> <?php echo $price; ?> </span></li>
                                <li>Uploaded By : <span class="list-value"> <?php echo $upload ?> </span></li>
                                <li>Date and Time when uploaded : <span class="list-value"> <?php echo $time ?> </span></li>
                            </ul>
                            <h3 class="product-title">Owner Details</h3>
                            <ul class="list-unstyled">
                                <li>Name : <span class="list-value"> <?php echo $name1; ?> </span></li>
                                <li>City : <span class="list-value"><?php echo $city; ?> </span> </li>
                                <li>Phone No. : <span class="list-value"> <?php echo $phone; ?> </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:31 GMT -->
</html>