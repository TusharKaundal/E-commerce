<?php
require './includes/common.php';
if (!isset($_SESSION['email'])){
  header('location:index.php');
}
$user_id=$_SESSION['user_id'];
$oldpassword = md5($_POST['old_password']);
$newpassword = md5($_POST['new_password']);
$retypepassword = md5($_POST['re-type_password']);
$sql1="select password from users where id=$user_id";
$sql1_result = mysqli_query($con,$sql1) or die(mysqli_error($con));
$sqli_fetch = mysqli_fetch_array($sql1_result);
if ($newpassword == $retypepassword) {
  if ($oldpassword == $sqli_fetch['password']){
    $sql2 = "update users set password='$newpassword' where id=$user_id";
    $sql2_result = mysqli_query($con,$sql2) or die(mysqli_error($con));
    echo "<script>alert('Updated password');window.location.href = 'products.php';</script>";
  }
  else{
    header('location: setting.php?password_error=&password_error1=Wrong Password &/');
  }
}
else {

  header('location: setting.php?password_error=password do not match&password_error1=&/');
}


?>
