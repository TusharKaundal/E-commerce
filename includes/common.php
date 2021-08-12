<?php
$servername="localhost";
$username="root";
$database="store";
$pass="";
$port="3308";
$con = mysqli_connect($servername,$username, $pass, $database,$port)or die($mysqli_error($con));
session_start();
?>
