<?php
	session_start();
	error_reporting(0);
	$_SESSION['usr_nm1']="guest";
	header("Location:index.php");
?>