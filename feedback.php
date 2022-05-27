

<?php
session_start();
	error_reporting(0);
	
	if(!isset($_SESSION['userial_num']))
	{
		$_SESSION['userial_num']="0";
	}


?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}	
body{margin:0}

.regf{width: 800px;
    height: 68px;
    border: none;
	margin:13px;
    padding: 0 30px;
 font-size:15px;
    border-radius: 10px;
	background-color:whitesmoke;
	position:relative;
	}
	
	.regbut{
		width:98.65px;
		height:68px;
		border:1px solid #fa416a;
		border-radius:10px;
		float:left;
		
		
	}
	.regbut:hover{background-color:whitesmoke;cursor:pointer;transition:1s ease; color:black;}
	.regf:hover,.uname1:hover{cursor:pointer;}
	.regform{
		background-color:#fa416a;
			
			height:120px;
	}
	.parentform{position:relative;}
	    @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
}
.opi{font-size:40px;}
		
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
@media only screen and (max-width: 1149px){
	.opi{font-size:25px;}
	.regf{width: 100px;padding:0px 10px;}
}
	</style>
</head>

<body>
 <?php

include("connect.php");
	$sql1="select * from registration_form where Serial_num=".$_SESSION['userial_num']."  ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
?>
<div class="parentform">

<div class="regform "> 
<form action="feedback_save.php" method="post" >
<table style="float:right;margin-right:10px;">
	<tr>
    	<td style="color:white;font-family:playfair;" class="opi">  <span style="margin-left:10px;">Your Opinion Matters!</span></td>
        <td> <input class="regf"type="text" name="fback" value="" placeholder="Feedback" /></td>

	         <input class="regf"type="hidden" name="fname" value="<?php echo $row['first_name']; ?>"  />
			 <input class="regf"type="hidden" name="lname" value="<?php echo $row['last_name']; ?>"  />
			 <input class="regf"type="hidden" name="serial" value="<?php echo $row['Serial_num']; ?>"  />
    	<td>  <input class="regbut" type="submit" name="submit" value="Submit" /></td>
    </tr>

</table>
</form>

</div>
</div>

<?php
}
?>



 </body>
 </html>