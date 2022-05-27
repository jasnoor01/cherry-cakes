<?php 

include("connect.php");
$about= $_GET['id'];
echo "delete from about_us  where about_us1 = '$about'";
mysqli_query($conn,"delete from about_us1 where about_us = '$about'");
 
header('location:about_us.php');
?>