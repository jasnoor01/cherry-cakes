<!DOCTYPE html>
<html lang="en">
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<style>
* {
  box-sizing: border-box;
}
.proimg7,.prodesc7{float:left;}
.prodesc7{padding:20px;}
.proparent7{padding:50px;height:600px;

margin-top:100px;

}

  @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
}

.ppic{
	width:100%;
	height:auto;
}
 
  .cart a {color:black;
text-decoration:none;
background-color:whitesmoke;
padding:10px;
border:1px solid #fa416a;
border-radius:50px;}


.cart a:hover{color:white;background-color:#fa416a;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);transition:0.5s ease;}

.deletea{
	text-decoration:none;
	color:black;
	border-radius:50px;
	border:1px solid #fa416a;
	
	background-color:whitesmoke;
	padding:10px 20px 10px 20px;
}
.deletea:hover{cursor:pointer;color:white;background-color:#fa416a;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);transition:0.5s ease;}

.nn{padding:50px;margin-top:50px;}

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
  
@media only screen and (max-width:740px) {
  [class*="col-"] {
  width: 100%;
}
.proparent7{padding:20px;height:1000px;}
}

@media only screen and (min-width:489px) and (max-width:738px) {


.proparent7{padding:80px;}

}
</style>
<body>
<div>
        	<?php
            	
				include("header.php")
			
            ?>
			
         </div>

<?php
include("connect.php");
$pn=$_GET['pron'];
$sql="select* from product_info where product_name='$pn'";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
	$type= $row['type'];
	$wt=$row['weight'];
?>
<div class="proparent7 col-12">
<div class="proimg7 col-4"><img class="ppic"  src="<?php echo $row['product_image']; ?>" ></div>

<div class="prodesc7 col-6"><center><span style="font-size:50px;color:#fa416a;font-weight:bold;font-family:playfair"><?php echo $row['product_name']; ?> </span> 
	<?php
	if($type=='VEG')
	{
	?>
	<img src="pics/veg.png" width="35px">
	<?php } 
	else
	{
		?>
		<img src="pics/nveg.png" width="35px">
	<?php 
	}
	?>
</center><hr>
<span style="font-size:20px;"><?php echo $row['product_description']; ?></span><br><br>



	<br>
	<?php 
	if($wt==0.5 OR $wt==1)
	{
		?>
	<span style="font-size:25px;"><b>Weight:</b><?php echo $row['weight']; ?>kg<br></span><br>
<?php
}
?>
<span style="font-size:25px;"><b>Price:</b> Rs <?php echo $row['price']; ?>/-</span><br><br><br>



	<span class="cart"> <a href="cart.php?pnm=<?php echo $row['product_name']; ?>">Add to Cart</a></span>


</div>

</div>
<?php
}
?>
<div >

<ul class="nn">
<li style="text-align:left;font-family:playfair;font-size:30px;color:#fa416a"><b>NOTE</b></li>
<li style="text-align:left;">Your order would be delivered for free if net amount exceeds Rs 999/-.</li>
<li style="text-align:left;">Cancellation request must be made through phone call.(<i>Details below</i>).</li>
<li style="text-align:left;">Cancellation request must be made within 10 minutes of placing order.</li>
<li style="text-align:left;">No refund will be given if cancellation request is made after 10 minutes.</li>

</ul>
</div>

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
