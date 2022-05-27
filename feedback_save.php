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
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$serial=$_POST['serial'];
			$feed=$_POST['fback'];
			include("connect.php");
 $sql1="INSERT INTO `feedback`(`first_name`, `last_name`, `feedback`, `Serial_num`) VALUES ('$fname','$lname','$feed','$serial')";
if (mysqli_query($conn, $sql1)) {
  echo "New record created successfully";

  header("Location:index.php");
} else {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
			echo $sql1;
			
		}
	}
	

?>