<?php
include'common.php';

$email=mysqli_real_escape_string($con,$_POST['email']);
$first_name =mysqli_real_escape_string($con,$_POST['first_name']);
$last_name =mysqli_real_escape_string($con,$_POST['last_name']);
$phone = $_POST['phone'];
$password=mysqli_real_escape_string($con,$_POST['password']);

$pass=md5($password);
$user_registration_query = "insert into users(email,password, name, lastname, contact) values ('$email','$pass', '$first_name', '$last_name', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";

$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
 header("location: home.php");


?>
