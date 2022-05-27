<?php 

include("connect.php");
$category= $_GET['id'];
echo "delete from category  where category_name = '$category'";
mysqli_query($conn,"delete from categories  where category_name = '$category'");

header('location:categories.php');
?>