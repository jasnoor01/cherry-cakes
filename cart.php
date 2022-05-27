<?php 
	session_start();
	//error_reporting(0);
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
		
	}
	else{
		if($_SESSION['usr_nm1']=="guest")
		{
			header("location: alert.php ");
		}
		else{
			$pname=$_GET['pnm'];
			//echo $pname;
			
			include("connect.php");
			$sql2="select * from product_info where product_name='$pname'";

			$data=mysqli_query($conn,$sql2);
			$row=mysqli_fetch_array($data);
			$tcat=$row['category_name'];
			$cart_pimg= $row['product_image'];
			$cart_pnm= $row['product_name'];
			$cart_wt= $row['weight'];
			$cart_pr= $row['price'];
			$cart_pty= $row['type'];
			$sql3="select * from cart_info where pro_nm ='".$cart_pnm."'";
			echo $sql3;
			$result3 = mysqli_query($conn, $sql3);
			
			
			if(mysqli_num_rows($result3) >=1)
			{
				$sql1 ="update cart_info set pro_qty= pro_qty +1,pro_amt= pro_price*pro_qty where pro_nm='". $cart_pnm."'";
			}
			else
			{
			
			$sql1="insert into cart_info(userSerial_no,pro_nm,pro_img,pro_weight,pro_price,pro_type,pro_amt,pro_qty)values(".$_SESSION['userial_num'].",'".$cart_pnm."','".$cart_pimg."',".$cart_wt.",".$cart_pr.",'".$cart_pty."',".$cart_pr.",1)";
			}

echo $sql1;
if (mysqli_query($conn, $sql1)) {
  echo "New record created successfully";

  header("Location:product_gallery1.php?id=$tcat");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
			echo $sql1;
			
		}
	}
	

?>
