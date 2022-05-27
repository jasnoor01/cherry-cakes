<?php

$category= $_POST['category'];


include("connect.php");

$sql = "INSERT INTO categories (category_name)
VALUES ('$category')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

  header("Location:categories.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>