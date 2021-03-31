<?php
   include("config.php");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
	  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  $mytype = mysqli_real_escape_string($db,$_POST['type']);
      
		if($mytype=="donor")
		{
		$sql = "SELECT * FROM users WHERE email = '$myusername' and pasword = '$mypassword' and type='$mytype'";
		$result = mysqli_query($db,$sql) or die( mysqli_error($db));
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		
		$count = mysqli_num_rows($result);
		
		// If result matched $myusername and $mypassword, table row must be 1 row
		  
			if($count == 1) {
			$_SESSION['login_user'] = $myusername;
				
				header("location:donorhome.php");
			}
			else {
			$error = "Your Login Name or Password or Type is invalid  ";
			}
		}
		else
		{
		$sql = "SELECT * FROM users WHERE email = '$myusername' and pasword = '$mypassword' and type='$mytype'";
		$result = mysqli_query($db,$sql) or die( mysqli_error($db));
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		
		$count = mysqli_num_rows($result);
		
		// If result matched $myusername and $mypassword, table row must be 1 row
		  
			if($count == 1) {
			$_SESSION['login_user'] = $myusername;
				
				header("location:doneehome.php");
			}
			else {
			$error = "Your Login Name or Password or Type is invalid";
			}
	  	}
   }
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
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
							<li class="breadcrumb-item active">Login</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!--=============================================
    =            Login  page content         =
    =============================================-->
		<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<!-- Login Form -->
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
						<form action="" method="post">
							<div class="login-form">
								<h4 class="login-title">Log in</h4>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Email</label>
										<input class="mb-0 form-control" type="email" id="email1" name="username"
											placeholder="Enter you email address here..." required>
									</div>
									<div class="col-12 mb--20">
										<label for="password">Password</label>
										<input class="mb-0 form-control" type="password" id="login-password" name="password" placeholder="Enter your password" required>
									</div>
									<div class="col-lg-12">
											<input type="radio" name="type" value="donor">Donor/Seller
											<input type="radio" name="type" value="donee">Donee/Buyer
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-outlined">Login</button>
										Or <a href="register.php">Register</a>
									</div>
									<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php 
										echo $error; 
										?>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
	</div>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>