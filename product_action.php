<?php

$cat_name= $_POST['cat_name'];
$pro_name= $_POST['pro_name'];
$weight1= $_POST['weight1'];
$type=$_POST['type'];
$price= $_POST['price'];
$description= $_POST['description'];

$tfile=$_FILES["image"]["tmp_name"];
//echo $tfile;

include("connect.php");

$sql = "INSERT INTO product_info (category_name,product_name,weight,type,price,product_description,product_image)
VALUES ('$cat_name','$pro_name',$weight1,'$type',$price,'$description','pics/$cat_name/$pro_name.jpg')";

move_uploaded_file($tfile, "pics/$cat_name/$pro_name.jpg");


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

  header("Location:product_information.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>