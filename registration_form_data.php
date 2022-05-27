<?php

$firstname= $_POST['fname1'];
$lastname= $_POST['lname1'];
$dob= $_POST['dob1'];
$contact=$_POST['cont1'];
$username1=$_POST['uname1'];
$email1= $_POST['email1'];
$password1= $_POST['pswd1'];
$address=$_POST['address'];
$city=$_POST['city'];
$state= $_POST['state'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$ip= $_SERVER['REMOTE_ADDR'];

include("connect.php");

$sql = "INSERT INTO registration_form (first_name,last_name,date_of_birth,contact,user_name,email,password,address,city,state,pincode,country)
VALUES ('$firstname','$lastname','$dob','$contact','$username1','$email1','$password1','$address','$city','$state','$pincode','$country')";

$sql1="SELECT * FROM banned_users where ip='::2'";
$sql2="SELECT * FROM banned_users where email='$email1'";
$sql3="SELECT * FROM banned_users where contact=$contact";


$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);


if (mysqli_num_rows($result1)==0 && mysqli_num_rows($result2)==0 && mysqli_num_rows($result3)==0) {
	mysqli_query($conn, $sql);
	echo $sql1.$sql2.$sql3;
	
 // echo "New record created successfully";
  echo "<SCRIPT> //not showing me this 
      alert('Registeration successful')
        window.location.replace('Login_page.php');</SCRIPT>";

  //header("Location:registration_form.php");
} else {
	
	$error=mysqli_error($conn);

  echo  "wqsq".$error;
  if($error="Duplicate entry '$username1' for key 'user_name'"){
	  echo 'hy';
	//  echo '<script>alert("Username already exsists")</script>';
	  
  }
  
  
}
	

?>