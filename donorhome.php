<?php
   include("session.php");
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
		$bookname= mysqli_real_escape_string($db,$_POST['bookname']);
		$author= mysqli_real_escape_string($db,$_POST['author']);
		$isbn=mysqli_real_escape_string($db,$_POST['isbn']);
		$category=mysqli_real_escape_string($db,$_POST['category']);
		$price=mysqli_real_escape_string($db,$_POST['price']);
		$file=mysqli_real_escape_string($db,$_POST['file']);

		$s="INSERT INTO books(name,isbn,author,category,price,uploadedby,file) values('$bookname','$isbn','$author','$category','$price','$user_check','$file')";
		mysqli_query($db,$s);
		$s1="SELECT * FROM users WHERE interest='$category'";
		$result=mysqli_query($db,$s1);
		while($row=mysqli_fetch_array($result)){
			$no_user=$row['email'];
			mysqli_query($db,"INSERT INTO notifications(notification,no_user) values('1 $bookname Book uploaded by $user_check ','$no_user')");
		}
		
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload Book</title>
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
							<a href="donorhome.php" class="site-brand">
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
							<li class="breadcrumb-item active">Upload Book</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
	<!--=============================================
    =          Register page content         =
    =============================================-->
	<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
						<!-- Register Form s-->
						<form action="" method="post">
							<div class="login-form">
								<h4 class="login-title">Upload Book</h4>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Book name</label>
										<input class="mb-0 form-control" type="text" id="bookname"
											placeholder="Enter Book name" name="bookname" required>
									</div>
									<div class="col-12 mb--20">
										<label for="author">Author Name</label>
										<input class="mb-0 form-control" type="text" name="author" id="email" placeholder="Enter Author Name : " required>
									</div>
									<div class="col-12 mb--20">
										<label for="isbn">Book ISBN no.</label>
										<input class="mb-0 form-control" type="text" name="isbn" id="phone_no" placeholder="Enter Book ISBN no. .." required>
									</div>
									<div class="col-12 mb--20">
										<label for="price">Price</label>
										<input class="mb-0 form-control" type="number" name="price" id="phone_no" placeholder="Enter Price .." required>
									</div>
									<div class="col-12 mb--20">
										<label for="city">Category</label>
										<select class="mb-0 form-control" name="category" id="city" required>
											<option value="" disabled selected>Select Category</option>
											<option value="9">9th</option>
											<option value="10">10th</option>
											<option value="11">11th</option>
											<option value="12">12th</option>
											<option value="urdupoetry">Urdu Poetry</option>
											<option value="islamic">Islamic</option>
											<option value="urdunovel">Novel in Urdu</option>
											<option value="englishnovel"> Novel in English</option>
											<option value="business">Business</option>
											<option value="other">Other</option>
										</select>
									</div>
									<div class="col-12 mb--20">
										<label>Image or E-book</label>
										<input class="mb-0 form-control" type="file" name="file" id="file" >
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-outlined">Upload</button>
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