<?php
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<style>
*{text-decoration:none;}
    body {
    margin: 0;
    padding: 0;
	
    
}
.header{
position:relative;
    top:0;
	width:100%;
height:250px;

}
.parent{
height:280px; 
background-color:whitesmoke;
background-image:url('pics/back.png');
    width:100%;
    margin:0;
}
.cup{
	position:relative;
top:-250px;}
.wels{color:#fa416a;
 position:absolute; 
 right:12px;
 top:200px;
 font-family:playfair;
 font-size:18px;}
 
</style>


</head>
<body>
<div class="parent">
<div class="header">
<center>
<img src="pics/cherrycakes.png" width="350px"></center>
	<?php if( $_SESSION['usr_nm1'] != "guest"){ ?>
<span class="wels"> 	
		<br><h3><?php echo "Welcome  ".$_SESSION['usr_nm1']." !"; ?></h3>

</span>

<?php
	}
            	//include("menufile.php");
				include("navbar2.php")
		
            ?>
			


</div>
</body>
</html>