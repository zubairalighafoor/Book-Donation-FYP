<?php
	include('session.php');
	$index="";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name= mysqli_real_escape_string($db,$_POST['name']);
		$phone=mysqli_real_escape_string($db,$_POST['phone_no']);
		$city=mysqli_real_escape_string($db,$_POST['city']);

		$s=" UPDATE users SET name='$name', phone_no='$phone', city='$city' where email='$user_check' ";
		mysqli_query($db,$s);
		if($login_type=="donor"){
			$index="donorhome.php";
		}
		else{
			$index="doneehome.php";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:33 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Account</title>
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
							<a href="" class="site-brand">
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
									<p class="font-weight-bold number">+923484436278</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
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
					</div>
					<!-- search box end -->
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
							<li class="breadcrumb-item"><a href="<?php echo $index;?>">Home</a></li>
							<li class="breadcrumb-item active">My Account</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<!-- My Account Tab Menu Start -->
							<div class="col-lg-3 col-12">
								<div class="myaccount-tab-menu nav" role="tablist">
									<a href="#myprofile" class="active" data-toggle="tab">Profile</a>
									<a href="#updateprofile" data-toggle="tab">Update Profile</a>
									<a href="#changepassword" data-toggle="tab">Change Password</a>
									<a href="logout.php" >Logout</a>
								</div>
							</div>
							<!-- My Account Tab Menu End -->
							<!-- My Account Tab Content Start -->
							<div class="col-lg-9 col-12 mt--30 mt-lg--0">
								<div class="tab-content" id="myaccountContent">
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade show active" id="myprofile" role="tabpanel">
										<div class="myaccount-content">
											<h3>My Profile</h3>
											<table class="table">
												<!-- Head Row -->
												<tbody>
													<tr>
														<th>Name:</th>
														<th><?php echo $login_name?></th>
													</tr>
													<tr>
														<th>Email:</th>
														<th><?php echo $login_email?></th>
													</tr>
													<tr>
														<th>City:</th>
														<th><?php echo $login_city?></th>
													</tr>
													<tr>
														<th>Phone no. :</th>
														<th><?php echo $login_phone_no?></th>
													</tr>
													<tr>
														<th>Type:</th>
														<th><?php echo $login_type?></th>
													</tr>
													<tr>
														<th></th>
														<th></th>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="updateprofile" role="tabpanel">
										<div class="myaccount-content">
											<h3>Update Profile</h3>
											<table class="table">
												<!-- Head Row -->
												<form action="" method="post">
												<tbody>
													<tr>
														<th>Name:</th>
														<th><input type="text" name="name" class="mb-0 form-control" required></th>
													</tr>
													<tr>
														<th>City:</th>
														<th><select class="mb-0 form-control" name="city" id="city" required>
																<option value="" disabled selected>Select The City</option>
																<option value="Islamabad">Islamabad</option>
																<option value="" disabled>Punjab Cities</option>
																<option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
																<option value="Ahmadpur East">Ahmadpur East</option>
																<option value="Ali Khan Abad">Ali Khan Abad</option>
																<option value="Alipur">Alipur</option>
																<option value="Arifwala">Arifwala</option>
																<option value="Attock">Attock</option>
																<option value="Bhera">Bhera</option>
																<option value="Bhalwal">Bhalwal</option>
																<option value="Bahawalnagar">Bahawalnagar</option>
																<option value="Bahawalpur">Bahawalpur</option>
																<option value="Bhakkar">Bhakkar</option>
																<option value="Burewala">Burewala</option>
																<option value="Chillianwala">Chillianwala</option>
																<option value="Chakwal">Chakwal</option>
																<option value="Chichawatni">Chichawatni</option>
																<option value="Chiniot">Chiniot</option>
																<option value="Chishtian">Chishtian</option>
																<option value="Daska">Daska</option>
																<option value="Darya Khan">Darya Khan</option>
																<option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
																<option value="Dhaular">Dhaular</option>
																<option value="Dina">Dina</option>
																<option value="Dinga">Dinga</option>
																<option value="Dipalpur">Dipalpur</option>
																<option value="Faisalabad">Faisalabad</option>
																<option value="Fateh Jhang">Fateh Jang</option>
																<option value="Ghakhar Mandi">Ghakhar Mandi</option>
																<option value="Gojra">Gojra</option>
																<option value="Gujranwala">Gujranwala</option>
																<option value="Gujrat">Gujrat</option>
																<option value="Gujar Khan">Gujar Khan</option>
																<option value="Hafizabad">Hafizabad</option>
																<option value="Haroonabad">Haroonabad</option>
																<option value="Hasilpur">Hasilpur</option>
																<option value="Haveli">Haveli</option>
																<option value="Lakha">Lakha</option>
																<option value="Jalalpur">Jalalpur</option>
																<option value="Jattan">Jattan</option>
																<option value="Jampur">Jampur</option>
																<option value="Jaranwala">Jaranwala</option>
																<option value="Jhang">Jhang</option>
																<option value="Jhelum">Jhelum</option>
																<option value="Kalabagh">Kalabagh</option>
																<option value="Karor Lal Esan">Karor Lal Esan</option>
																<option value="Kasur">Kasur</option>
																<option value="Kamalia">Kamalia</option>
																<option value="Kamoke">Kamoke</option>
																<option value="Khanewal">Khanewal</option>
																<option value="Khanpur">Khanpur</option>
																<option value="Kharian">Kharian</option>
																<option value="Khushab">Khushab</option>
																<option value="Kot Adu">Kot Adu</option>
																<option value="Jauharabad">Jauharabad</option>
																<option value="Lahore">Lahore</option>
																<option value="Lalamusa">Lalamusa</option>
																<option value="Layyah">Layyah</option>
																<option value="Liaquat Pur">Liaquat Pur</option>
																<option value="Lodhran">Lodhran</option>
																<option value="Malakwal">Malakwal</option>
																<option value="Mamoori">Mamoori</option>
																<option value="Mailsi">Mailsi</option>
																<option value="Mandi Bahauddin">Mandi Bahauddin</option>
																<option value="mian Channu">Mian Channu</option>
																<option value="Mianwali">Mianwali</option>
																<option value="Multan">Multan</option>
																<option value="Murree">Murree</option>
																<option value="Muridke">Muridke</option>
																<option value="Mianwali Bangla">Mianwali Bangla</option>
																<option value="Muzaffargarh">Muzaffargarh</option>
																<option value="Narowal">Narowal</option>
																<option value="Okara">Okara</option>
																<option value="Renala Khurd">Renala Khurd</option>
																<option value="Pakpattan">Pakpattan</option>
																<option value="Pattoki">Pattoki</option>
																<option value="Pir Mahal">Pir Mahal</option>
																<option value="Qaimpur">Qaimpur</option>
																<option value="Qila Didar Singh">Qila Didar Singh</option>
																<option value="Rabwah">Rabwah</option>
																<option value="Raiwind">Raiwind</option>
																<option value="Rajanpur">Rajanpur</option>
																<option value="Rahim Yar Khan">Rahim Yar Khan</option>
																<option value="Rawalpindi">Rawalpindi</option>
																<option value="Sadiqabad">Sadiqabad</option>
																<option value="Safdarabad">Safdarabad</option>
																<option value="Sahiwal">Sahiwal</option>
																<option value="Sangla Hill">Sangla Hill</option>
																<option value="Sarai Alamgir">Sarai Alamgir</option>
																<option value="Sargodha">Sargodha</option>
																<option value="Shakargarh">Shakargarh</option>
																<option value="Sheikhupura">Sheikhupura</option>
																<option value="Sialkot">Sialkot</option>
																<option value="Sohawa">Sohawa</option>
																<option value="Soianwala">Soianwala</option>
																<option value="Siranwali">Siranwali</option>
																<option value="Talagang">Talagang</option>
																<option value="Taxila">Taxila</option>
																<option value="Toba Tek  Singh">Toba Tek Singh</option>
																<option value="Vehari">Vehari</option>
																<option value="Wah Cantonment">Wah Cantonment</option>
																<option value="Wazirabad">Wazirabad</option>
																<option value="" disabled>Sindh Cities</option>
																<option value="Badin">Badin</option>
																<option value="Bhirkan">Bhirkan</option>
																<option value="Rajo Khanani">Rajo Khanani</option>
																<option value="Chak">Chak</option>
																<option value="Dadu">Dadu</option>
																<option value="Digri">Digri</option>
																<option value="Diplo">Diplo</option>
																<option value="Dokri">Dokri</option>
																<option value="Ghotki">Ghotki</option>
																<option value="Haala">Haala</option>
																<option value="Hyderabad">Hyderabad</option>
																<option value="Islamkot">Islamkot</option>
																<option value="Jacobabad">Jacobabad</option>
																<option value="Jamshoro">Jamshoro</option>
																<option value="Jungshahi">Jungshahi</option>
																<option value="Kandhkot">Kandhkot</option>
																<option value="Kandiaro">Kandiaro</option>
																<option value="Karachi">Karachi</option>
																<option value="Kashmore">Kashmore</option>
																<option value="Keti Bandar">Keti Bandar</option>
																<option value="Khairpur">Khairpur</option>
																<option value="Kotri">Kotri</option>
																<option value="Larkana">Larkana</option>
																<option value="Matiari">Matiari</option>
																<option value="Mehar">Mehar</option>
																<option value="Mirpur Khas">Mirpur Khas</option>
																<option value="Mithani">Mithani</option>
																<option value="Mithi">Mithi</option>
																<option value="Mehrabpur">Mehrabpur</option>
																<option value="Moro">Moro</option>
																<option value="Nagarparkar">Nagarparkar</option>
																<option value="Naudero">Naudero</option>
																<option value="Naushahro Feroze">Naushahro Feroze</option>
																<option value="Naushara">Naushara</option>
																<option value="Nawabshah">Nawabshah</option>
																<option value="Nazimabad">Nazimabad</option>
																<option value="Qambar">Qambar</option>
																<option value="Qasimabad">Qasimabad</option>
																<option value="Ranipur">Ranipur</option>
																<option value="Ratodero">Ratodero</option>
																<option value="Rohri">Rohri</option>
																<option value="Sakrand">Sakrand</option>
																<option value="Sanghar">Sanghar</option>
																<option value="Shahbandar">Shahbandar</option>
																<option value="Shahdadkot">Shahdadkot</option>
																<option value="Shahdadpur">Shahdadpur</option>
																<option value="Shahpur Chakar">Shahpur Chakar</option>
																<option value="Shikarpaur">Shikarpaur</option>
																<option value="Sukkur">Sukkur</option>
																<option value="Tangwani">Tangwani</option>
																<option value="Tando Adam Khan">Tando Adam Khan</option>
																<option value="Tando Allahyar">Tando Allahyar</option>
																<option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
																<option value="Thatta">Thatta</option>
																<option value="Umerkot">Umerkot</option>
																<option value="Warah">Warah</option>
																<option value="" disabled>Khyber Cities</option>
																<option value="Abbottabad">Abbottabad</option>
																<option value="Adezai">Adezai</option>
																<option value="Alpuri">Alpuri</option>
																<option value="Akora Khattak">Akora Khattak</option>
																<option value="Ayubia">Ayubia</option>
																<option value="Banda Daud Shah">Banda Daud Shah</option>
																<option value="Bannu">Bannu</option>
																<option value="Batkhela">Batkhela</option>
																<option value="Battagram">Battagram</option>
																<option value="Birote">Birote</option>
																<option value="Chakdara">Chakdara</option>
																<option value="Charsadda">Charsadda</option>
																<option value="Chitral">Chitral</option>
																<option value="Daggar">Daggar</option>
																<option value="Dargai">Dargai</option>
																<option value="Darya Khan">Darya Khan</option>
																<option value="dera Ismail Khan">Dera Ismail Khan</option>
																<option value="Doaba">Doaba</option>
																<option value="Dir">Dir</option>
																<option value="Drosh">Drosh</option>
																<option value="Hangu">Hangu</option>
																<option value="Haripur">Haripur</option>
																<option value="Karak">Karak</option>
																<option value="Kohat">Kohat</option>
																<option value="Kulachi">Kulachi</option>
																<option value="Lakki Marwat">Lakki Marwat</option>
																<option value="Latamber">Latamber</option>
																<option value="Madyan">Madyan</option>
																<option value="Mansehra">Mansehra</option>
																<option value="Mardan">Mardan</option>
																<option value="Mastuj">Mastuj</option>
																<option value="Mingora">Mingora</option>
																<option value="Nowshera">Nowshera</option>
																<option value="Paharpur">Paharpur</option>
																<option value="Pabbi">Pabbi</option>
																<option value="Peshawar">Peshawar</option>
																<option value="Saidu Sharif">Saidu Sharif</option>
																<option value="Shorkot">Shorkot</option>
																<option value="Shewa Adda">Shewa Adda</option>
																<option value="Swabi">Swabi</option>
																<option value="Swat">Swat</option>
																<option value="Tangi">Tangi</option>
																<option value="Tank">Tank</option>
																<option value="Thall">Thall</option>
																<option value="Timergara">Timergara</option>
																<option value="Tordher">Tordher</option>
																<option value="" disabled>Balochistan Cities</option>
																<option value="Awaran">Awaran</option>
																<option value="Barkhan">Barkhan</option>
																<option value="Chagai">Chagai</option>
																<option value="Dera Bugti">Dera Bugti</option>
																<option value="Gwadar">Gwadar</option>
																<option value="Harnai">Harnai</option>
																<option value="Jafarabad">Jafarabad</option>
																<option value="Jhal Magsi">Jhal Magsi</option>
																<option value="Kacchi">Kacchi</option>
																<option value="Kalat">Kalat</option>
																<option value="Kech">Kech</option>
																<option value="Kharan">Kharan</option>
																<option value="Khuzdar">Khuzdar</option>
																<option value="Killa Abdullah">Killa Abdullah</option>
																<option value="Killa Saifullah">Killa Saifullah</option>
																<option value="Kohlu">Kohlu</option>
																<option value="Lasbela">Lasbela</option>
																<option value="Lehri">Lehri</option>
																<option value="Loralai">Loralai</option>
																<option value="Mastung">Mastung</option>
																<option value="Musakhel">Musakhel</option>
																<option value="Nasirabad">Nasirabad</option>
																<option value="Nushki">Nushki</option>
																<option value="Panjgur">Panjgur</option>
																<option value="Pishin valley">Pishin Valley</option>
																<option value="Quetta">Quetta</option>
																<option value="Sherani">Sherani</option>
																<option value="Sibi">Sibi</option>
																<option value="Sohbatpur">Sohbatpur</option>
																<option value="Washuk">Washuk</option>
																<option value="Zhob">Zhob</option>
																<option value="Ziarat">Ziarat</option>
															</select></th>
													</tr>
													<tr>
														<th>Phone no. :</th>
														<th><input type="text" name="phone_no" class="mb-0 form-control" required></th>
													</tr>
													<tr>
														<th><button type="submit" class="btn btn-outlined">Update</button></th>
														<th></th>
													</tr>
												</tbody>
												</form>
											</table>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="changepassword" role="tabpanel">
										<div class="myaccount-content">
											<h3>Change Password</h3>
											<table class="table">
												<!-- Head Row -->
												<form action="changepassword.php" method="get">
												<tbody>
													<tr>
														<th>New Password:</th>
														<th><input type="text" name="password" class="mb-0 form-control" required></th>
													</tr>
													<tr>
														<th><button type="submit" class="btn btn-outlined">Change Password</button></th>
														<th></th>
													</tr>
												</tbody>
												</form>
											</table>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="payment-method" role="tabpanel">
										<div class="myaccount-content">
											<h3>Payment Method</h3>
											<p class="saved-message">You Can't Saved Your Payment Method yet.</p>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="address-edit" role="tabpanel">
										<div class="myaccount-content">
											<h3>Billing Address</h3>
											<address>
												<p><strong>Alex Tuntuni</strong></p>
												<p>1355 Market St, Suite 900 <br>
													San Francisco, CA 94103</p>
												<p>Mobile: (123) 456-7890</p>
											</address>
											<a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
												Address</a>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="account-info" role="tabpanel">
										<div class="myaccount-content">
											<h3>Account Details</h3>
											<div class="account-details-form">
												<form action="#">
													<div class="row">
														<div class="col-lg-6 col-12  mb--30">
															<input id="first-name" placeholder="First Name" type="text">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="last-name" placeholder="Last Name" type="text">
														</div>
														<div class="col-12  mb--30">
															<input id="display-name" placeholder="Display Name"
																type="text">
														</div>
														<div class="col-12  mb--30">
															<input id="email" placeholder="Email Address" type="email">
														</div>
														<div class="col-12  mb--30">
															<h4>Password change</h4>
														</div>
														<div class="col-12  mb--30">
															<input id="current-pwd" placeholder="Current Password"
																type="password">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="new-pwd" placeholder="New Password"
																type="password">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="confirm-pwd" placeholder="Confirm Password"
																type="password">
														</div>
														<div class="col-12">
															<button class="btn btn--primary">Save Changes</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
								</div>
							</div>
							<!-- My Account Tab Content End -->
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
		>
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


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 09:31:33 GMT -->
</html>