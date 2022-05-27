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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cherry Cakes</title>
<link rel="shortcut icon" href="pics/logoico.ico" />
<style>
* {
  box-sizing: border-box;
}	

.regf{width: 300px;
   height:68px;
    border: none;

    padding:0 30px;
    background-color: rgba(57, 57, 57, 0.07);
    border-radius: 10px;
	text-transform: capitalize;

		
		
		
	
	}
	.uname1{width:685px;
	}
	 a.regbut{
		padding:23px 100px;
		float:right;
		border:1px solid #fa416a;
		border-radius:10px;
		text-align:center;
		color:black;
		text-decoration:none;
		
	}
	.regbut:hover{background-color:#fa416a;cursor:pointer;transition:1s ease; color:white;}
	
	.regform{
		background-color:whitesmoke;
		
	}
	table {
  border-collapse: separate;
  border-spacing: 15px 15px;
}
	.regform,.regpic{float:left;}
	.regpic{border-radius: 0 0 0 50px;}
	
	.regform{position:relative;top:23px;left:20px;}
	
	
			.parentform{margin:0 auto;
			position:relative;top:80px;
			height:676px;	
			width:1150px;
			border-radius: 0 50px 0 50px; 
			background-color: whitesmoke;
			margin-bottom:80px;}
			
		.regfoot{position:relative;top:115px;}
	
			
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
@media only screen and (max-width: 1149px),
  {

	/* Force table to not be like tables anymore */
	table, thead, tbody,tr,td { 
		display:block; 
	  margin:0 auto;
	  
	}
	
	tr,td{width:100%;}
	td{margin-bottom:10px;text-align:left;}
	.regf,.regbut{float:none;margin-left:auto;margin-right:auto;padding:23px 100px;width:100%;}
	.regform{float:none;margin-left:auto;margin-right:auto;  position: static !important;
	padding:30px;}

.parentform{width:100%;height:1000px; border-radius:0;}

  .regpic{display:none;}
  
}
	</style>
</head>

<body>
<div>
        	<?php
            	
				include("header.php")
		
            ?>
			
         </div>
<?php
include("connect.php");
$sql="SELECT *from registration_form where Serial_num= ".$_SESSION['userial_num']."";
//echo $sql;
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
?>
<div class="parentform">
<div class=" regpic "><img src="pics/viewpro.jpeg" width="450px" height="674px" style="border-radius: 0 0 0 50px"> </div>
<div class="regform ">

<table >
<tbody>
	<tr > 
    	
        <td  class="regf"><?php echo $row['first_name']; ?></td>
    
    	
<td class="regf"><?php echo $row['last_name']; ?></td>    </tr>
	<tr>
    	
        <td class="regf"><?php echo $row['date_of_birth']; ?></td>
    
    	
<td class="regf"><?php echo $row['contact']; ?></td>    </tr>
	<tr>
    	
    <td class="regf" style="text-transform: none"><?php echo $row['user_name']; ?></td>	 
	<td class="regf" style="text-transform: none"><?php echo $row['email']; ?></td>
    </tr>
	<tr>
    	<td class="regf" colspan="2"><?php echo $row['address']; ?></td>
        
    </tr>
	<tr>
    	
        
		<td class="regf" ><?php echo $row['city']; ?></td>
		<td class="regf" ><?php echo $row['state']; ?></td>
    </tr>
	<tr>
	<td class="regf" ><?php echo $row['pincode']; ?></td>
	<td class="regf" ><?php echo $row['country']; ?></td>
	</tr>
	
		
	<tr>
    	<td colspan="2"  style="padding:0;">  <a  class="regbut" href="updateprofile.php">Update Profile</a></td>
    </tr>
	
</tbody>
</table>

<?php
}
?>
</div>
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
