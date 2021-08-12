<?php
require './includes/common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=enter correct email&password_error=&/');
}
$password = $_POST['password'];
if (strlen($password) < 8){
  header('location: signup.php?email_error=&password_error=enter correct password&/');
}
$email = mysqli_real_escape_string($con,$_POST['email']);
$name =mysqli_real_escape_string( $con ,$_POST['name']);
$phone = $_POST['contact'];
$password =md5($_POST['password']);
$city=$_POST['city'];
$address = mysqli_real_escape_string($con,$_POST["address"]);
$select = "SELECT id from users where email='$email'";
$query_result = mysqli_query($con,$select) or die(mysqli_error($con));
$rows = mysqli_num_rows($query_result);
if ($rows > 0){
  header('location: signup.php?email_error=email id already exists.&password_error=&/');
}
else{
  $user_registration_query = "insert into users(name,email,password,contact,city,address) values ('$name', '$email', '$password','$phone','$city','$address')";
  $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
  $_SESSION['email'] = $email;
  $_SESSION['name'] = $name;
  $_SESSION['user_id'] = mysqli_insert_id($con);
  header('location: products.php');
}
?>
