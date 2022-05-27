<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head> 
<style>
table {
	margin-top:70px;
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  font-size:18px;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align:center;
}
table th{background:#fa416a;
color:white;
font-size:20px;}


td{padding:10px 40px;}
table,td,th{border:1px solid white;}
.filtera{
	padding:20px;
	font-size:18px;
}
</style>
</head>
<body><?php include("admin.php"); ?>
<div class="filter">
<h1>Filter by:</h1>
<a href="admin_invoice.php?id=all" class="filtera deletea">All</a>
<a href="admin_invoice.php?id=dis" class="filtera deletea">Dispatched</a>
<a href="admin_invoice.php?id=deli" class="filtera deletea">Delivered</a>
<a href="admin_invoice.php?id=can" class="filtera deletea">Cancelled</a><br>
<?php
include("connect.php");
$sql="select  SUM(net_amount) from place_order where status='Delivered'";

$data=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($data))
{
?>

<h2>Total amount delivered:Rs <?php echo $row['SUM(net_amount)']; ?>/-</h2>

<?php
}
?>


<?php
include("connect.php");
$sql="select  SUM(net_amount) from place_order where status='Cancelled'";

$data=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($data))
{
?>

<h2>Total amount cancelled:Rs <?php echo $row['SUM(net_amount)']; ?>/-</h2>
<?php
}
?>
</div>
<table>
<tr>
<th>Invoice No.</th>
<th>Name</th>
<th>Address</th>
<th>Contact</th>
<th>Date of Order</th>
<th>Order status</th>
<th>Amount</th>
<th>View</th>
<th>Dispatch</th>
<th>Delivery</th>
<th>Cancel order</th>
</tr>

	 <?php

include("connect.php");

	
			$srt=$_GET['id'];
			//echo $srt;
			if($srt=='all')
			{
				$sql1="select * from place_order order by first_name ";
               // echo $sql1;
			}
			else if($srt=='dis')
			{
				$sql1="select * from place_order where status='Dispatched' ";	
				//echo $sql1;
			}
	else if($srt=='deli')
			{
				$sql1="select * from place_order where status='Delivered' ";	
				//echo $sql1;
			}
	else if($srt=='can')
			{
				$sql1="select * from place_order where status='Cancelled' ";	
				//echo $sql1;
			}
		
	else{
		$sql1="select * from place_order ";
               // echo $sql1;
	}
	
$data=mysqli_query($conn,$sql1);

while($row=mysqli_fetch_array($data))
{

	?>
	<tr>
	
<td><?php echo $row['invoice_num']; ?></td>
<td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
<td> <?php echo $row['address']; ?><br> <?php echo $row['city']; ?>,  <?php echo $row['state']; ?>, <?php echo $row['pincode']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['invoice_date']; ?></td>
<td><?php echo $row['status']; ?><br><?php echo $row['status_date']; ?><br><?php echo $row['status_time']; ?></td>
<td>Rs <?php echo $row['net_amount']; ?> /-</td>
<td><a  href="pinvoiceview.php?id=<?php echo $row['invoice_num']; ?>">View</a></td>
<td><a  href="order_status_upd.php?idst=dispatched&idin=<?php echo $row['invoice_num']; ?>">Update</a></td>
<td><a  href="order_status_upd.php?idst=delivered&idin=<?php echo $row['invoice_num']; ?>">Update</a></td>
<td><a  href="order_status_upd.php?idst=cancel&idin=<?php echo $row['invoice_num']; ?>">Cancel order</a></td>



</tr>
<?php
}
?>

</table>

</body>
</html>