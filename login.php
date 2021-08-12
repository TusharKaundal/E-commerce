<?php
require './includes/common.php';
if (isset($_SESSION['email'])) {
  header('location: products.php');
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
      <!---Login panel--->
      <div class="container" id="content">
          <div class="row ">
              <div class="col-xs-4 col-xs-offset-4">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h4>LOGIN</h4>
                      </div>
                      <div class="panel-body">
                          <p class="text-warning">Login to make a purchase</p>
                          <form method="post" action="login_submit.php">
                              <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" required="true">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                <p style="color:red"><?php echo $_GET['error'] ?></p>
                              </div>
                              <button type="submit" class="btn btn-primary">Login</button><br><br>
                          </form><br>
                      </div>
                      <div class="panel-footer">
                        <p>Don't have a account?<a href="signup.php?email_error=&password_error=&/">Register</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!---login panel end--->

      <!---footer start--->
      <?php
         include './includes/footer.php';
       ?>
       <!---footer end--->
  </body>

</html>
