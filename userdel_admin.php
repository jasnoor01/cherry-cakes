<?php
include("connect.php");
$del=$_GET['id'];
$sql="DELETE FROM registration_form WHERE Serial_num= $del";
mysqli_query($conn,$sql);
		header("location: userinfo_admin.php");	

?>