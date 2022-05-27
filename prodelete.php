	<?php 

include("connect.php");
$pro_nm= $_GET['id'];
echo "delete from cart_info where pro_nm = '$pro_nm'";
mysqli_query($conn,"delete from cart_info where pro_nm = '$pro_nm'");
header('location:myorders.php');
?>