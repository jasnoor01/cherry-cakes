<?php
	session_start();
	error_reporting(0);
	$mess1="";
	if(isset($_POST['loginbtn']))
	{
		$unm=$_POST['uname'];
		$pass=$_POST['psd'];
		
		include("connect.php");
		$sql = "SELECT * FROM registration_form where user_name='$unm' and  password='$pass'";
		
		$sql2 = "SELECT * FROM banned_users where user_name='$unm'";
		
		
		$result = mysqli_query($conn, $sql);
		$result2 = mysqli_query($conn, $sql2);

		if (mysqli_num_rows($result) ==1 && mysqli_num_rows($result2)==0) 
		{
			$row = mysqli_fetch_assoc($result);
			$_SESSION['usr_nm1']= $row['first_name']." ".$row['last_name'];
			$_SESSION['userial_num']=$row['Serial_num'];
			
			header("Location:ipg.php");
			//header("Location:index.php");
		
		}
		else
		{
			echo '<script>alert("Invalid username or password!")</script>';

					$mess1="*invalid username or password!";


		}
		
		//echo $sql2;
	} 


?>
<!DOCTYPE html>
<html>
    <head>     
        <title>Cherry Cakes</title>	<link rel="shortcut icon" href="pics/logoico.ico" />
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
margin-top:130px;

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
  @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
}

@media only screen and (max-width: 1149px)
  {

	
	table, thead, tbody,tr,td { 
		display:block; 
	  margin:0 auto;
	  
	}
	
	tr,td{width:100%;}
	td{margin-bottom:10px;text-align:center;}
	div.form{float:none;margin-left:auto;margin-right:auto;}

.parent1{width:100%;border-radius:0;}

  .pic{display:none;}
}

	</style>
    </head>
<body> 		<?php
            	//include("menufile.php");
				include("header.php")
		
            ?>

<center><div class="parent1 ">
<div class=" pic col-5"><img src="pics/loginimg.jpg" width="300px" height="450px" style="border-radius: 0 0 0 50px"> </div>
<h4 class="invalid" ><?php  echo $mess1; ?></h4>
<div class="form col-7"> 
<center><h1  id="welcome"> Welcome To Cherry Cakes!</h1>

<form action="#" method="post">
<table>

 <tr><td> <input class="in" type="text" id="uname" name="uname" placeholder="Username"></td></tr>
  
  <tr><td><input class="in" type="password" id="psd" name="psd"  placeholder="Password"></td></tr>
  </table>
  <a href="forgot_pass.php" style="color:red;font-size:13px;margin-right:190px;">Forgot Password?</a>
  <br>
  
  <input class="loginbut" type="submit" name="loginbtn" value="LOG-IN">
</form> 
<a class="clicktoreg" href="registration_form.php">Not a user? Click to register</a>
</center>
</div>
</div></center>
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
