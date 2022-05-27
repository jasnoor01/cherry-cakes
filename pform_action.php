<?php 
include("connect.php");
$name=$_POST['name'];
$branch=$_POST['branch'];
$dob=$_POST['date'];
$roll=$_POST['roll'];
$serial=$_POST['sno'];

 $sql1="INSERT INTO `pform`(`Name`, `Roll_no`, `branch`, `dob`,serial) VALUES ('$name',$roll,'$branch','$dob',$serial)";
if (mysqli_query($conn, $sql1)) {
  echo "New record created successfully";

 header("Location:pform.php");
}
 else
	 {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
			echo $sql1;
			
		
	


?>