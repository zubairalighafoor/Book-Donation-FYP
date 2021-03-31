<?php
    session_start();
    $con=mysqli_connect('localhost:3308','root','');
    mysqli_select_db($con,'bookdonation');
    $name= $_POST['name'];
    $pass= $_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone_no'];
    $city=$_POST['city'];
    $type=$_POST['type'];

    $s=" select * from users where email='$email' ";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo"Email already used"; ?>
        <a href="register.php">Register Again</a><?php
    }else{
        $reg="insert into users(name,email,pasword,phone_no,city,type) values('$name','$email','$pass','$phone','$city','$type') ";
        mysqli_query($con,$reg);
        echo"Registration Successful";
        header('location:login.php');
    }
?>