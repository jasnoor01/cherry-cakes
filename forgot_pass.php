<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="pics/logoico.ico" />
<style>
* {
  box-sizing: border-box;
}	
.pic,.form{
float:left;

}  @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
}
.pic{
	position:relative;
left:-20px;
	top:-15px;
}
.form{
position:relative;
top:-20px;
text-align:left;
}	

#welcome{
color:#fa416a;
font-family:playfair;
}
.in{
width:300px;
    height: 68px;
    border: none;
    padding: 0 30px;
        background-color: rgba(57, 57, 57, 0.07);
    border-radius:10px;
}
.in:hover{cursor:pointer;}
.loginbut
{
 background-color: rgba(57, 57, 57, 0.07);
position:relative;
right:-100px;
border-radius:20px;
font-weight:bold;
padding:25px;
border:1px solid   #fa416a;
text-align:center;
}
.loginbut:hover{
color:white;
cursor:pointer;
background-color: #fa416a;
transition:1s ease;
}
.parent1{
border-radius:0 50px 0 50px;
height:450px;
background-color:whitesmoke;
position:relative;
width:730px;
margin-top:80px;

}
.clicktoreg{
	position:relative;
	top:20px;
}
.clicktoreg:hover{
	color:#fa416a;
}
.invalid{position:relative;
top:20px;
color:red;}

 input[type="date"]:before {
    content: attr(placeholder) !important;
    color: #aaa;
    margin-right: 0.5em;
  }
  input[type="date"]:focus:before,
  input[type="date"]:valid:before {
    content: "";
  }
	
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
@media only screen and (max-width: 1149px)
  {
	div.form{float:none;margin-left:auto;margin-right:auto;}
	[class*="col-"] {
    width: 100%;
  }
	

.parent1{width:100%;border-radius:0;}

  .pic{display:none;}
}
</style>
</head>
 <div>
        	<?php
            	include("header.php");
            ?>
         </div>

<body>
<center><div class="parent1 ">
<div class=" pic col-5"><img src="pics/set2.jpeg" width="300px" height="450px" style="border-radius: 0 0 0 50px"> </div>

<div class="form col-7"> 
<center><h1  id="welcome"> Welcome To Cherry Cakes!</h1>

<form action="#" method="post">

<input type="text" class="in" value="" placeholder="User name" name="usn" required><br><br>
<input type="text" class="in" value="" placeholder="Contact Number" name="con" required><br><br>

<input type="date" class="in" style="  text-transform: uppercase;" value="" placeholder="Date of birth" name="dob" ><br><br>
<input type="submit" class="loginbut" value="Submit" name="submit" >

</center>
</div>
</div></center>
 <div>
<?php

$stcat="";
if(isset($_REQUEST['submit']))
{
	
	$stcat= $_REQUEST['submit'];
	$con=$_POST['con'];
	$dob=$_POST['dob'];
	$usn=$_POST['usn'];
	//$npsd=$_POST['npsd'];
	//echo $usn;
	
include("connect.php");

$sql = "SELECT * FROM `registration_form` WHERE user_name='$usn' ";
//echo $sql;
$data=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($data);
$con2=$row['contact'];
$dob2=$row['date_of_birth'];
//echo $dob;
//echo $dob2;
if($con==$con2 AND $dob==$dob2)
{
	//echo "jbk";
	//$sql2="UPDATE registration_form SET password='$npsd' WHERE user_name='$usn'";
	//mysqli_query($conn, $sql2);
	//header("Location:setnewpass.php?us1=$usn");
	//header("Location:index.php");
echo "<script type='text/javascript'> document.location = 'setnewpass.php?us1=$usn'; </script>";
}

else{echo '<script>alert("Incorrect information")</script>'; }
}
?>
<div>
        	<?php
            	
				include("menubottom.php")
		
            ?>
			
         </div>
  <div>
        	<?php
            	include("footer.php");
            ?>
         </div>

</body>
</html>