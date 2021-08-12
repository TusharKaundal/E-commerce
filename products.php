
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
       include './includes/common.php';
       include 'check-if-added.php';
       include './includes/header.php';
     ?>
    <!---navbar end--->
            <!---produxts container-->


        <div class="container">

              <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
              </div>

              <div class="row text-center" id="cameras">
                    <div class="col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                        <img src="./img1/5.jpg" alt="Cannon EOS">
                        <div class="caption">
                          <h3>Cannon EOS</h3>
                          <p>Price:Rs.36000.00</p>
                          <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                          <?php
                          } else {
                                   //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(1,$con,$_SESSION['user_id'])) {
                                  //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else { ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php
                               }
                         } ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                        <img src="./img1/2.jpg" alt="Sony DSLR">
                        <div class="caption">
                          <h3>Sony DSLR</h3>
                          <p>Price:Rs.40000.00</p>
                          <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                          <?php
                          } else {
                                   //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(2,$con,$_SESSION['user_id'])) {
                                  //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else { ?>
                               <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php
                               }
                         } ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                        <img src="./img1/3.jpg" alt="Sony DSLR">
                        <div class="caption">
                          <h3>Sony DSLR</h3>
                          <p>Price:Rs.45000.00</p>
                          <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                          <?php
                          } else {
                                   //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(3,$con,$_SESSION['user_id'])) {
                                  //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else { ?>
                               <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php
                               }
                         } ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                        <img src="./img1/4.jpg" alt="Olympus DSLR">
                        <div class="caption">
                          <h3>Olympus DSLR</h3>
                          <p>Price:Rs.50000.00</p>
                          <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                          <?php
                          } else {
                                   //We have created a function to check whether this particular product is added to cart or not.
                               if (check_if_added_to_cart(4,$con,$_SESSION['user_id'])) {
                                  //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else { ?>
                               <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php
                               }
                         } ?>
                        </div>
                      </div>
                    </div>
              </div>

              <div class="row text-center" id="watches">
                        <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                            <img src="./img1/9.jpg" alt="Titan Model #301">
                            <div class="caption">
                              <h3>Titan Model #301</h3>
                              <p>Price:Rs.13000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                       //We have created a function to check whether this particular product is added to cart or not.
                                   if (check_if_added_to_cart(5,$con,$_SESSION['user_id'])) {
                                      //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { ?>
                                   <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                   <?php
                                   }
                             } ?>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                            <img src="./img1/10.jpg" alt="Titan Model #201">
                            <div class="caption">
                              <h3>Titan Model #201</h3>
                              <p>Price:Rs.3000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                       //We have created a function to check whether this particular product is added to cart or not.
                                   if (check_if_added_to_cart(6,$con,$_SESSION['user_id'])) {
                                      //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { ?>
                                   <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                   <?php
                                   }
                             } ?>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                            <img src="./img1/11.jpg" alt="HMT Milan">
                            <div class="caption">
                              <h3>HMT Milan</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                       //We have created a function to check whether this particular product is added to cart or not.
                                   if (check_if_added_to_cart(7,$con,$_SESSION['user_id'])) {
                                      //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { ?>
                                   <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                   <?php
                                   }
                             } ?>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                            <img src="./img1/12.jpg" alt="Faber Lubba #111">
                            <div class="caption">
                              <h3>Faber Lubba #111</h3>
                              <p>Price:Rs.18000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                              <?php
                              } else {
                                       //We have created a function to check whether this particular product is added to cart or not.
                                   if (check_if_added_to_cart(8,$con,$_SESSION['user_id'])) {
                                      //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { ?>
                                   <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                   <?php
                                   }
                             } ?>
                            </div>
                          </div>
                        </div>
              </div>

              <div class="row text-center" id="shirts">
                          <div class="col-md-3 col-sm-6 ">
                            <div class="thumbnail">
                              <img src="./img1/8_1.jpg" alt="H&W">
                              <div class="caption">
                                <h3>H&W</h3>
                                <p>Price:Rs.800.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                  <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                } else {
                                         //We have created a function to check whether this particular product is added to cart or not.
                                     if (check_if_added_to_cart(9,$con,$_SESSION['user_id'])) {
                                        //This is same as if(check_if_added_to_cart != 0)
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else { ?>
                                     <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                               } ?>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3 col-sm-6 ">
                            <div class="thumbnail">
                              <img src="./img1/6.jpg" alt="Luis Phil">
                              <div class="caption">
                                <h3>Luis Phil</h3>
                                <p>Price:Rs.1000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                  <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                } else {
                                         //We have created a function to check whether this particular product is added to cart or not.
                                     if (check_if_added_to_cart(10,$con,$_SESSION['user_id'])) {
                                        //This is same as if(check_if_added_to_cart != 0)
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else { ?>
                                     <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                               } ?>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3 col-sm-6 ">
                            <div class="thumbnail">
                              <img src="./img1/13.jpg" alt="John Zok">
                              <div class="caption">
                                <h3>John Zok</h3>
                                <p>Price:Rs.1500.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                  <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                } else {
                                         //We have created a function to check whether this particular product is added to cart or not.
                                     if (check_if_added_to_cart(11,$con,$_SESSION['user_id'])) {
                                        //This is same as if(check_if_added_to_cart != 0)
                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else { ?>
                                     <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                               } ?>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3 col-sm-6 ">
                            <div class="thumbnail">
                              <img src="./img1/14.jpg" alt="Jhalsani">
                              <div class="caption">
                                <h3>Jhalsani</h3>
                                <p>Price:Rs.1300.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                  <p><a href="login.php?error=" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                } else {

                                     if (check_if_added_to_cart(12,$con,$_SESSION['user_id'])) {

                                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else { ?>
                                     <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                               } ?>
                              </div>
                            </div>
                          </div>
                  </div>
            </div>
            <!---product container end--->

            <!---footer start--->
            <?php
               include './includes/footer.php';
             ?>
             <!---footer end--->
  </body>
</html>
