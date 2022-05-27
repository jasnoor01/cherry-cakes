<?php
include("connect.php");
$banserial=$_GET['ser'];
$em=$_GET['em'];
$em=$_GET['em'];
$um=$_GET['un'];


$sql1="select * from userlogs where Serial_num=$banserial";
$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
	
	 $ip=$row['ip_address'];
	 //echo $ip;
}

$con=$_GET['cosn'];
$sql="INSERT INTO `banned_users`(`Serial_num`, `ip`, `email`, `contact`,user_name) VALUES ($banserial,'$ip','$em',$con,'$um')";

$sql2="UPDATE `registration_form` SET `status`='Banned' WHERE Serial_num=$banserial";

echo $sql;
//echo "ss".$con;
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
	header("location: userinfo_admin.php");	

?>
