<?php
require './includes/common.php';
$id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$sql = "DELETE FROM users_items WHERE user_id='$user_id' AND item_id = $id";
$query_result = mysqli_query($con,$sql) or die(mysqli_error($con));
header('location:cart.php');
?>
