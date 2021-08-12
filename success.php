<?php
require './includes/common.php';
if (!isset($_SESSION['email'])){
  header('location:index.php');
}
$item_id = explode(",",$_GET['id']);
$user_id = $_SESSION['user_id'];
$counter = 0;

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


    <!--confirm message container--->
        <div class="container" id="content">
          <center>
            <?php
                while($counter < count($item_id)){
                  $sql="UPDATE users_items SET  status = 'Confirmed' where user_id='$user_id' and item_id= $item_id[$counter]";
                  $query_result=mysqli_query($con,$sql) or die(mysqli_error($con));
                  $counter++;
                }
                echo '<p style="font-size:25px">Your order is confirmed.Thank you for shopping with us.<br><a href="products.php">Click here</a> to purchase any other item.</p>';
             ?>

          </center>
        </div>
        <!---confirm message container end--->

        <!---footer start--->
        <?php
           include './includes/footer.php';
         ?>
         <!---footer end--->
  </body>
</html>
