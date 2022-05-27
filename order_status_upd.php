<?php
include("connect.php");
$status=$_GET['idst'];
//$invoice=$_GET['id'];
$inv=$_GET['idin'];
//$inv=1035;

echo $status;

 date_default_timezone_set("Asia/Calcutta");

 $status_time=date("h:i:sa");
 $status_date=date("Y-m-d");

if($status == 'dispatched'){
	$sql1="UPDATE `place_order` SET  `status`='Dispatched',status_date='$status_date',status_time='$status_time' where invoice_num='$inv' ";
	mysqli_query($conn, $sql1);
		
		header("location: admin_invoice.php");		
}
else if( $status == 'delivered') {
  $sql2="UPDATE `place_order` SET  status='Delivered',status_date='$status_date',status_time='$status_time' where invoice_num='$inv' ";
	mysqli_query($conn, $sql2);
	header("location: admin_invoice.php");	
}
else if ($status=='cancel'){
	$sql3="UPDATE `place_order` SET  `status`='Cancelled',status_date='$status_date',status_time='$status_time' where invoice_num='$inv' ";
	mysqli_query($conn, $sql3);
				header("location: admin_invoice.php");	
}

		
//echo $status;
//echo $inv;
?>