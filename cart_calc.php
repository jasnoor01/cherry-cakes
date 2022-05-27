<?php
 include("connect.php");

	$qty=$_POST['qty'];
	$pro_nm=$_POST['proname'];
	$proprice=$_POST['proprice'];
	$netamt=$proprice* $qty;
$sql1= "UPDATE `cart_info` SET `pro_qty`='$qty',`pro_amt`='$netamt'  WHERE `pro_nm`='$pro_nm' ";
$data=mysqli_query($conn,$sql1);

	header("Location:myorders.php");
?>