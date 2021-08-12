<?php
require './includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5($_POST['password']);
$select = "SELECT * from users where email='$email'";
$query_result = mysqli_query($con,$select) or die(mysqli_error($con));
$rows = mysqli_num_rows($query_result);
if ($rows == 0){?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <div class="container ">
  <div class="row">
    <div class="col-xs-4 col-xs-offset-4">
      <h2><span class = "glyphicon glyphicon-warning-sign"></span>  We cannot find an account with that email address </h1><br>
      <?php
       echo "Redirecting.....";
       header('refresh:2 ; url =login.php?error='); ?>
    </div>
   </div>
  </div>
<?php
}
else{
  $array_result = mysqli_fetch_array($query_result);

  if($array_result['password'] == $password){
    $_SESSION['email']=$array_result['email'];
    $_SESSION['user_id']=$array_result['id'];
    $_SESSION['name'] = $array_result['name'];
    header('location: products.php');
  }
  else{
    header('location:login.php?error=wrong password');
  }

}
?>
