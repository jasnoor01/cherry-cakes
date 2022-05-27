<?php
include("connect.php");

$sql1="select * from invoice_set  ";
$invoice=0;
$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{	
$invoice=$row['invoice_num'];
$invoice++;
echo $invoice;
}

?>