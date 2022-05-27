<?php
	session_start();
	error_reporting(0);
	$mess1="";
	if(isset($_POST['loginbtn']))
	{
		$unm=$_POST['uname'];
		$pass=$_POST['psd'];
		
		if($unm=='admin' and $pass=='123')
		{
			$_SESSION['usr_nm1']="user";
				//header("Location:ipg.php");
				header("Location:index.php");
		}
		else
		{
			$mess1="invalid";
		}
	}
?>