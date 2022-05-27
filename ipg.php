<?php 
session_start();
$userial=$_SESSION['userial_num'];
$ip= $_SERVER['REMOTE_ADDR'];

$json = file_get_contents( 'http://ip-api.com/json//'); // this one service we gonna use to obtain timezone by IP
// maybe it's good to add some checks (if/else you've got an answer and if json could be decoded, etc.)
$ipData = json_decode( $json, true);
date_default_timezone_set("Asia/Kolkata");
    $country=$ipData['country'];
    $region=$ipData['regionName'];
    $timezone=$ipData['timezone'];
    $query=$ipData['query'];
    $timestamp=date("Y-m-d h:i:sa");
	
	$browser=$_SERVER['HTTP_USER_AGENT'];
	 //echo $query;
	 echo $country. $region.$timezone.$query.$timestamp.$ip.$browser;
	 include("connect.php");

$sql = "INSERT INTO userlogs (Serial_num,ip_address,browser,country,region,timezone,query,timestamp)
VALUES ($userial,'$ip','$browser','$country','$region','$timezone','$query','$timestamp')";


if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
  header("Location:index.php");
}
 else
	 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
?>

