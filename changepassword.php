<?php
    include("session.php");
    if($_SERVER["REQUEST_METHOD"] == "GET") {
		$pass= mysqli_real_escape_string($db,$_GET['password']);

		$s=" UPDATE users SET pasword='$pass' where email='$user_check' ";
        mysqli_query($db,$s);
        header('location:myaccount.php');
	}
?>