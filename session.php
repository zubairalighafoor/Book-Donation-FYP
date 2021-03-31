<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_name = $row['name'];
   $login_email = $row['email'];
   $login_city = $row['city'];
   $login_phone_no = $row['phone_no'];
   $login_type = $row['type'];
   $login_interest=$row['interest'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>