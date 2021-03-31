<?php
   include("session.php");
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $interest=mysqli_real_escape_string($db,$_POST['interest']);

    $s="UPDATE users SET interest='$interest' WHERE email='$user_check'";
    mysqli_query($db,$s);
    header('location:doneehome.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Book Donation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <main class="page-section inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
                        <!-- Register Form s-->
                        <form action="" method="post">
                            <div class="login-form">
                                <h4 class="login-title">Interest</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                        <label for="name">Select Interest</label>
                                        <select class="mb-0 form-control" name="interest" id="interest" required>
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
                                    <div class="col-md-12">
										<button type="submit" class="btn btn-outlined">Select</button>
									</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>