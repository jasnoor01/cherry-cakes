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

<head>
<link rel="shortcut icon" href="pics/logoico.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
  box-sizing: border-box;
}	

.parent6{width:800px;height:285px;border:2px solid #ccc;
margin:50px 5px; padding:10px;}
.cartpic{
	float:left;
	width:33.33%
	
	
}
.parent6:hover{box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);transition:0.3s ease;border:2px solid black;cursor:pointer;}
.pinfo{font-size:18px;
float:left;
line-height:30px;
margin-left:10px;}

.deletea{
	text-decoration:none;
	color:black;
	border-radius:50px;
	border:1px solid #fa416a;
	
	background-color:whitesmoke;
	padding:10px 20px 10px 20px;
}
.deletea:hover{cursor:pointer;color:white;background-color:#fa416a;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);transition:0.5s ease;}
.myorderparent{width:850px;float:left;}
.tempbill{
	background-color:whitesmoke;
	border:2px solid #ccc;
	margin-top:50px;
	background-image:url('pics/bgpng.png');
	padding:30px;
 margin-right:20px;
width:800px;
float:right;}
.tempbilltxt{font-size:18px;}
td{padding:10px 40px;}


.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
@media screen and (max-width:1149px) {
	

  .parent6{width:100%;height:375px;
float:none; margin:0 auto;padding:20px;}
 .myorderparent{width:100%}
 
  .tempbill{float:left;margin:0px auto;margin-top:50px;width:100%;}
  .tempbilltxt{font-size:10px;width:100%;}
td{padding:10px 10px;}
}

</style>
</head>
<body>
<div>
        	<?php
            	//include("menufile.php");
				include("header.php")
		
            ?>
			
         </div>
		 
<div class="delete" style="margin:70px 5px;font-size:25px;"> <a href="order_info.php"" class="deletea"style="padding-left:100px;padding-right:100px;"><b>Place Order</b></a></div>

<div class="myorderparent">	 
<?php

include("connect.php");
	$sql1="select * from cart_info where userSerial_no=".$_SESSION['userial_num']."  ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
	$type= $row['pro_type'];
	$wt=$row['pro_weight'];
?>

<div class="parent6">
  <a href="product_desc.php?pron=<?php echo $row['pro_nm']; ?>">
    <img src="<?php echo $row['pro_img']; ?>" alt="<?php echo $row['pro_img']; ?>"  class="cartpic ">
  </a>
  <div class="pinfo" style="margin-top:10px";>
	<b style="font-size:25px;"><?php echo $row['pro_nm']; ?></b>
	<?php
	if($type=='VEG')
	{
	?>
	<img src="pics/veg.png" width="15px">
	<?php } 
	else
	{
		?>
		<img src="pics/nveg.png" width="15px">
	<?php 
	}
	?>
	<br>
	<?php 
	if($wt==0.5 OR $wt==1)
	{
		?>
	<b>Weight:</b><?php echo $row['pro_weight']; ?>kg<br>
<?php
}
?>
	
	
	<b>Price :</b>Rs<?php echo $row['pro_price']; ?>/-
	<br>
	<form action="cart_calc.php" method="post">
	<label ><b>Quantity:</b></label>
	
	  <input style="font-size:18px;" type="number"  name="qty" min="1" max="25" value="<?php echo $row['pro_qty']; ?>" >
	  <input type="hidden" name="proname" value="<?php echo $row['pro_nm']; ?>">
<input type="hidden" name="proprice" value="<?php echo $row['pro_price']; ?>">
					<input type="submit" value="Update" class="deletea" style="font-size:15px;" >

  </form>
  <b>Sub-Total:</b>Rs<?php echo $row['pro_amt']; ?></b>/-
  
<br>
<div class="delete" style="margin-top:10px;"> <a class="deletea" href="prodelete.php?id=<?php echo $row['pro_nm']; ?>" >Delete</a></div>

  </div>
  
</div>
<?php
}
?>








</div>

<center><div class="tempbill">
<div class="tempbilltxt"><h1>ORDER SUMMARY</h1>
<table style="border:2px solid black;">
<tr><th>Product Name(s)</th>
<th>Type</th>
<th>Quatity</th>
<th>Price(Rs)</th>
<th>Subtotal(Rs)</th>

</tr>
<?php

include("connect.php");
	$sql1="select * from cart_info where userSerial_no=".$_SESSION['userial_num']."  ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{	
	?>
	
	<tr><td><?php echo $row['pro_nm']; ?></td>
	<td><?php echo $row['pro_type']; ?></td>
	<td><?php echo $row['pro_qty']; ?></td>
	<td> <?php echo $row['pro_price']; ?>/-</td>
	<td> <?php echo $row['pro_amt']; ?>/-</td>
	</tr>
	
	<?php
}
	?>
</table>
<?php

include("connect.php");
	$sql1="select SUM(pro_amt) , SUM(pro_qty) from cart_info where userSerial_no=".$_SESSION['userial_num']."  ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{

	 
	
	?>
	
		<h4 style="text-align:left;font-size:20px"><b>Total Quantity: </b><?php echo  $row['SUM(pro_qty)']; ?></h4>

	<h4 style="text-align:left;font-size:20px" ><b>Total Price:</b><?php echo " Rs " . $row['SUM(pro_amt)']; ?>/-</h4>
	
	
	<?php
}
	?>





<h3 style="text-align:left;">Note:</h3>
<ul>
<li style="text-align:left;">Your order would be delivered for free if net amount exceeds Rs 999/-.</li>
<li style="text-align:left;">Cancellation request must be made through phone call.(<i>Details below</i>).</li>
<li style="text-align:left;">Cancellation request must be made within 10 minutes of placing order.</li>
<li style="text-align:left;">No refund will be given if cancellation request is made after 10 minutes.</li>

</ul>





</div>
</center>
 <div>
        	<?php
            	
				include("menubottom.php")
		
            ?>
			
         </div>
		 <div>
        	<?php
            	
				include("footer.php")
		
            ?>
			
         </div>
</body>

</html>
