<?php
require './includes/common.php';
if (isset($_SESSION['email'])){
  header('location:products.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="CSS1/index1.css">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
  </head>
  <body style="padding-top:50px">
    <!---navbar start---->
    <?php
       include './includes/header.php';
     ?>
    <!---navbar end--->

    <!---background banner--->
          <div id="banner_image">
                          <div class="container">
                            <center>
                              <div id="banner_content">
                                <h1>We sell lifestyle.</h1>
                                <p>Flat 40% OFF on premium brands </p>
                                <br/>
                                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>

                              </div>
                            </center>
                          </div>
          </div><br>
    <!---background banner end--->

          <div class="container">
                          <center>
                                <div class="row text-center" id="products">
                                  <div class="col-md-4 col-sm-6 ">
                                      <a href="products.php">
                                        <div class="thumbnail">
                                            <img src="./img1/1.jpg" alt="Cameras">
                                            <div class="caption">
                                                <h2>Cameras</h2>
                                                <p>Choose among the best available in the world.</p>
                                            </div>

                                      </div>
                                    </a>

                                  </div>

                                  <div class="col-md-4 col-sm-6 " >
                                    <a href="products.php#watches">
                                      <div class="thumbnail">
                                            <img src="./img1/7.jpg" alt="watches" >
                                            <div class="caption">
                                                <h2>Watches</h2>
                                                <p>Original watches from the best brands.</p>
                                            </div>
                                      </div>
                                    </a>
                                  </div>

                                  <div class="col-md-4 col-sm-6 ">
                                    <a href="products.php#shirts">
                                      <div class="thumbnail">
                                          <img src="./img1/8.jpg" alt="shirts">
                                          <div class="caption">
                                              <h2>Shirts</h2>
                                              <p>Our exquisite collection of shirts.</p>
                                          </div>

                                    </div></a>
                                  </div>
                                </div>
                          </center>
          </div>
          <!---footer start--->
          <?php
             include './includes/footer.php';
           ?>
           <!---footer end--->
  </body>
</html>
