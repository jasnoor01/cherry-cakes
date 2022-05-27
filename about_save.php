<?php


$aboutus=$_POST['aboutus'];
$about_image =$_POST['about_image'];
$tfile=$_FILES["about_pic"]["tmp_name"];
//echo $tfile;

include("connect.php");

$sql = "INSERT INTO about_us1 (about_us,about_pic)
VALUES ('$aboutus','pics/aboutus/$about_image.jpg')";

move_uploaded_file($tfile, "pics/aboutus/$about_image.jpg");


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
   header("Location:about_us.php");
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
