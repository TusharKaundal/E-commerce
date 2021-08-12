<?php
require './includes/common.php';
if (!isset($_SESSION['email'])){
  header('location:index.php');
}
$user_id = $_SESSION['user_id'];
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
     <div class="container-fluid" id="content">
       <!---navbar start---->
       <?php
          include './includes/header.php';
        ?>
       <!---navbar end--->

                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                          <?php
                            $sql = "SELECT * FROM  users_items ui INNER JOIN items i WHERE ui.user_id='$user_id' and i.pid=ui.item_id and status = 'Added to cart'";
                            $sql_query=mysqli_query($con,$sql) or die(mysqli_error($con));
                            if(mysqli_num_rows($sql_query) == 0){
                              echo "<script>alert('Add items to the cart first!.');window.location.href = 'products.php';</script>";
                            }
                            else{
                              $sum = 0;
                              $id=$itemname=$price=array();
                              while ($row=mysqli_fetch_array($sql_query)) {
                                $sum = $sum + $row['price'];
                                array_push($id,$row['pid']);
                                echo "<tr><td>" .$row['pid'] ."</td><td>".$row['name'] . "</td><td>Rs " .$row['price'] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'> Remove</a></td></tr>" ;
                              }
                             $id=implode(",",$id);
                             echo "<tr><td></td><td>Total</td><td>Rs ". $sum."/- </td><td><a href='success.php?id={$id}' class='btn btn-primary'>Confirm Order</a></td></tr>";
                          } ?>
                        </tbody>
                    </table>
                </div>
        </div>
        <!---footer start--->
        <?php
           include './includes/footer.php';
         ?>
         <!---footer end--->
  </body>
</html>
