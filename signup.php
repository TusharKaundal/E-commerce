<?php
require './includes/common.php';
if (isset($_SESSION['email'])){
  header('location:products.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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

  <!---signup form container--->
    <div class="container" id="content">
           <div class="row">
                   <div class="col-lg-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                       <h2>SIGN UP</h2>
                       <form method="post" action="signup_script.php">
                           <div class="form-group">
                               <input class="form-control" placeholder="Name" name="name"  required = "true">
                           </div>
                           <div class="form-group">
                               <input type="email" class="form-control"  placeholder="Email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required = "true">
                               <div>
                                 <?php
                                   echo $_GET['email_error'];
                                 ?>
                               </div>

                           </div>
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  required = "true">
                                <div>
                                  <?php
                                    echo $_GET['password_error'];
                                  ?>
                                </div>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                           </div>
                           <div class="form-group">
                               <input class="form-control"  placeholder="City" name="city" required = "true">
                           </div>
                           <div class="form-group">
                               <input class="form-control"  placeholder="Address" name="address" required = "true">
                           </div>
                           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                       </form>
                   </div>
               </div>
           </div>
           <!---signup form container end--->


           <!---footer start--->
           <?php
              include './includes/footer.php';
            ?>
            <!---footer end--->
       </body>

  </body>
</html>
