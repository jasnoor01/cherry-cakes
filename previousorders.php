<?php
session_start();
	error_reporting(0);
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
	}
	if(!isset($_SESSION['userial_num']))
	{
		$_SESSION['userial_num']="0";
	}


?>
<!DOCTYPE html>
<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

@media only screen and (max-width: 1149px),
  {

	
	
	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
		
	}
	
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		display:none;
	}
	
	tr { border: 5px solid #fa416a; margin-bottom:30px;}
	

	

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		text-align:left;
		left: 12px;
		width: 40%; 
		 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Invoice No:"; }
	td:nth-of-type(2):before { content: "Name:"; }
	td:nth-of-type(3):before { content: "Address:"; }
	td:nth-of-type(4):before { content: "Contact:"; }
	td:nth-of-type(5):before { content: "Date of Order:"; }
	td:nth-of-type(6):before { content: "Order Status:"; }
	td:nth-of-type(7):before { content: "Amount:"; }
	
}
</style>
</head>
<body>
<?php
include("header.php");
?>
<table>
<thead>
<th>Invoice No.</th>
<th>Name</th>
<th>Address</th>
<th>Contact</th>
<th>Date of Order</th>
<th>Order status</th>
<th>Amount</th>
<th>View</th>
</thead>
<tbody>
	 <?php

include("connect.php");
	$sql1="select * from place_order where Serial_num='$_SESSION[userial_num]' ";

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
<td><?php echo $row['status']; ?></td>
<td>Rs <?php echo $row['net_amount']; ?> /-</td>
<td><a  href="pinvoiceview.php?id=<?php echo $row['invoice_num']; ?>">View</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
<?php
include("menubottom.php");
?>
<?php
include("footer.php");
?>
</body>
</html>