<?php
require './includes/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$sql = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$query_result = mysqli_query($con,$sql) or die(mysqli_error($con));
echo "Added to the cart";
header('location: products.php');
?>
