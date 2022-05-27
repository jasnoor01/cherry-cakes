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
<?php

$firstname= $_POST['fname1'];
$lastname= $_POST['lname1'];
$dob= $_POST['dob1'];
$contact=$_POST['cont1'];
$email1= $_POST['email1'];
$address=$_POST['address'];
$city=$_POST['city'];
$state= $_POST['state'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];

include("connect.php");
$sql="UPDATE `registration_form` SET `first_name`='$firstname',`last_name`='$lastname',`date_of_birth`='$dob',`contact`='$contact',`email`='$email1',`address`='$address',`city`='$city',`state`='$state',`pincode`='$pincode',`country`='$country' WHERE `Serial_num`=".$_SESSION['userial_num']." ";


if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
 // echo '<script>alert("Profile updated successfully")</script>'; 
  echo "<SCRIPT> //not showing me this
        alert('Profile updated successfully')
        window.location.replace('viewprofile.php');
    </SCRIPT>";


  //header("Location:registration_form.php");
} else {
	
	$error=mysqli_error($conn);
//  echo  $error;
  if($error="Duplicate entry '$username1' for key 'user_name'"){
	  //echo 'hy';
	  echo '<script>alert("Username already exsists")</script>';
	  
  }
  
  
}
	

?>