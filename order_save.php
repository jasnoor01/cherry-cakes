<?php
 session_start();
	error_reporting(0);
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
	}
	if(!isset($_SESSION['inv_no']))
	{
		$_SESSION['inv_no']="0";
	}
  include("connect.php");
 $invoice=0;
 $data=mysqli_query($conn,"select * from  invoice_set order by invoice_num");
 while($row=mysqli_fetch_array($data))
 {
	
	 $invoice= $row['invoice_num'];
	  // echo $invoice;
	 $invoice++;
	
 }
 $_SESSION['inv_no']=$invoice;
 echo $invoice;
 date_default_timezone_set("Asia/Calcutta");

 $fname= $_POST['fname2'];
 $lname= $_POST['lname2'];
 $add2= $_POST['add2'];
 $city2= $_POST['city2'];
 $state2= $_POST['state2'];
 $pincode2= $_POST['pincode2'];
 $contact2= $_POST['cont2'];
 $mop= $_POST['paymentmode'];
 $cardno= $_POST['card_num'];
 $cardexpiry= $_POST['expd'];
 $cardcvv= $_POST['cvv'];
 $quantity=0;
 $amount=0;
 $invoice_date=date("Y-m-d");
 $invoice_time=date("h:i:sa");
 $status='Pending';
 $status_time=date("h:i:sa");
 $status_date=date("Y-m-d");
$sql ="insert into place_order(invoice_num,Serial_num,first_name, last_name,address,city,state,pincode,contact,payment_mode, card_num, card_expiry, card_cvv, total_qty, net_amount,invoice_date,invoice_time,status,status_date,status_time )
values ($invoice,".$_SESSION['userial_num'].",'$fname','$lname','$add2','$city2','$state2','$pincode2','$contact2','$mop','$cardno','$cardexpiry','$cardcvv',$quantity,$amount,'$invoice_date','$invoice_time','$status','$status_date','$status_time')";
if (mysqli_query($conn, $sql))
			{
				//echo $sql;
				$tot_net_amt=0;
				$tot_qty=0;
			$data1=mysqli_query($conn,"select * from  cart_info where userSerial_no='$_SESSION[userial_num]' ");
			while($row=mysqli_fetch_array($data1))
			{
				
			$productname= $row['pro_nm'];
			$quantity= $row['pro_qty'];
			$image= $row['pro_img'];
			$price= $row['pro_price'];
			$weight= $row['pro_weight'];
			$type= $row['pro_type'];
			$amount= $row['pro_amt'];
			$sqll="insert into order_details(invoice_num, Serial_num, pro_nm, pro_img,pro_price,pro_qty,pro_amt,pro_type,pro_weight)
			       values ($invoice,".$_SESSION['userial_num'].", '$productname','$image',$price,$quantity,$amount,'$type',$weight)"; 
			//$net_amt= ($price-($price*$discount)/100)* $quantity;
			$tot_net_amt=$tot_net_amt + $row['pro_amt'];
		$tot_qty=$tot_qty + $row['pro_qty'];
			if (mysqli_query($conn, $sqll))
			{
			echo "<br>";
			echo $sqll;
			}
			}				
		
			echo $tot_net_amt;
			echo "<br>";
			echo $tot_qty;
			$result= "update place_order set net_amount='$tot_net_amt' , total_qty='$tot_qty'
			          where invoice_num='$invoice'";
			if (mysqli_query($conn, $result))
			{
			echo "<br>";
			echo $result;
			$del= "delete from cart_info where userSerial_no='$_SESSION[userial_num]'";
			if (mysqli_query($conn, $del))
			{
			echo "<br>";
			echo $del;
			}
			}
			$inv= $invoice + 1;
			$upd= "update invoice_set set invoice_num='$inv'";
			if (mysqli_query($conn, $upd))
			{
			echo "<br>";
			echo $upd;
			}
			
			
							header("location: invoice.php");

			}
			
			
			
			
			
			
			
			else{
				 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
 ?>