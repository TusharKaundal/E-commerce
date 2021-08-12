<?php
require './includes/common.php';
if (!isset($_SESSION['email'])){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="CSS1/index1.css">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <!---navbar start---->
    <?php
       include './includes/header.php';
     ?>
    <!---navbar end--->
  <!---setting container--->
    <div class="container" id=content>
           <div class="row">
                   <div class="col-lg-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                       <h2>Change Password</h2>
                       <form method="post" action="setting_script.php">
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="Old Password" name="old_password" required = "true">
                               <p style="color:red"><?php echo $_GET['password_error1'] ?></p>
                           </div>
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="New Password" name="new_password" required = "true">
                           </div>
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="Re-type Password" name="re-type_password" required = "true">
                               <p style="color:red"><?php echo $_GET['password_error'] ?></p>
                           </div>
                           <button type="submit" name="submit" class="btn btn-primary">Change</button>
                       </form>
                   </div>
               </div>
           </div>
  <!---setting container end--->


          <!---footer start--->
          <?php
             include './includes/footer.php';
           ?>
           <!---footer end--->
  </body>
</html>
