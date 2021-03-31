<?php
    include('session.php');
    $sql="SELECT * FROM message where sender='$user_check' OR receiver='$user_check'";
    $result=mysqli_query($db,$sql);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $receiver= mysqli_real_escape_string($db,$_POST['username']);
        $message= mysqli_real_escape_string($db,$_POST['message']);
        $query="INSERT INTO message(sender,receiver,message) values('$user_check','$receiver','$message')";
        mysqli_query($db,$query);
    }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:34 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="40" />
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
                            <a href="doneehome.php" class="site-brand">
                                <img src="image/logo.png" alt="">
                            </a>
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
        
    </header>
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="doneehome.php">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Messages area Start -->
        <div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
                            <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                            <h2>Old Messages</h2>
								<div class="tab-content" id="myaccountContent">
                                    <div class="tab-pane fade show active" id="" role="tabpanel">
                                        <div class="myaccount-content">
                                            <table class="table">
                                                    <!-- Head Row -->
                                                    <tbody>
                                                        <tr>
                                                            <th>Sender</th>
                                                            <th>Receiver</th>
                                                            <th>Date & Time</th>
                                                            <th>Messages</th>
                                                        </tr>
                                                        <?php while ($row = mysqli_fetch_array($result))
                                                            {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['sender'];?></td>
                                                            <td><?php echo $row['receiver'];?></td>
                                                            <td><?php echo $row['ts'];?></td>
                                                            <td><?php echo $row['message'];?></td>
                                                        </tr>
                                                        <?php
                                                            }
                                                        ?>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Message area End -->
        <div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
                            <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                            <h2>Send Message</h2>
								<div class="tab-content" id="myaccountContent">
                                    <div class="tab-pane fade show active" id="" role="tabpanel">
                                        <div class="myaccount-content">
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-md-12 col-12 mb--15">
                                                        <label for="name">User Email</label>
                                                        <input class="mb-0 form-control" type="text" id="username"
                                                            placeholder="Enter user name" name="username" required>
                                                    </div>
                                                    <div class="col-md-12 col-12 mb--15">
                                                        <label for="name">Message</label>
                                                        <textarea class="mb-0 form-control" id="message" rows="8" name="message">Enter Message</textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-outlined">Send</button>
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
            </div>
        </div>
    
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
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:34 GMT -->
</html>