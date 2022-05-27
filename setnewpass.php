<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="pics/logoico.ico" />
<style>
* {
  box-sizing: border-box;
}	
.pic,.form{
float:left;

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
  @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
}
#welcome{
color:#fa416a;font-family:playfair;
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
<body>
<div>
        	<?php
            	
				include("header.php")
		
            ?>
			
         </div>

<center><div class="parent1 ">
<div class=" pic col-5"><img src="pics/sert1.jpeg" width="300px" height="450px" style="border-radius: 0 0 0 50px"> </div>

<div class="form col-7"> 
<center><h1  id="welcome"> Welcome To Cherry Cakes!</h1><br>
<form action="#" method="post">
<input type="password" class="in"name="psd" value="" placeholder="New password"><br><br>
<input type="password"class="in" name="cpsd" value="" placeholder="Confirm password"><br><br>
<input type="submit" name="submit" class="loginbut" value="Submit" >
</form>
</center>
</div>
</div></center>
 <div>
<?php
$stcat="";
	

if(isset($_REQUEST['submit']))
{
	
	$stcat= $_REQUEST['submit'];
	$psd=$_POST['psd'];
	$cpsd=$_POST['cpsd'];
	
$usn1=$_GET['us1'];
	//echo $usn;
	//$usn=$_POST['usn'];
	//$npsd=$_POST['npsd'];
	//echo $usn1;
	
include("connect.php");
if($psd==$cpsd)
{
	$sql3="UPDATE registration_form SET password='$psd' WHERE user_name='$usn1'";
	//echo $sql3;
	mysqli_query($conn, $sql3);
	//header("Location:setnewpass.php");
 echo "<SCRIPT> //not showing me this
        alert('Passoword reset successful')
        window.location.replace('Login_page.php');
    </SCRIPT>";	
	
}
else{
	
	echo '<script>alert("Password does not match")</script>';
}
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