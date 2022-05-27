
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="pics/logoico.ico" />
<style>
*{ box-sizing:border-box;}


.aboutp{float:left;}
.aboutd{font-size:20px;
float:left;
text-align:center;
position:relative;
left:-10px;
top:0;
line-height:27px;
}
.aboutparent{margin-top:100px;height:800px;width:1200px;border-radius:0px 50px 0px 50px;
background-color:whitesmoke;}


    @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
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

@media only screen and (max-width:1149px){
	
	.col-6{width: 100%;}
  .aboutp{display:none;}
  .aboutd{position: static !important;float:none;margin-right:auto;margin-left:auto;text-align:left}

	.aboutparent{width:100%;height:950px; border-radius:0;}
	
}
</style>
</style>
</head>
<body>
 <div>
        	
			
			 <div>
        	<?php
            	
				include("header.php")
		
            ?>
			
         </div>
		 
        	
			
         
			  
		   

<?php
include("connect.php");
$sql2="select * from about_us1 ";

$data=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($data))
{
?>
<center><div class="aboutparent ">
<div class="aboutp col-6"><img style="border-radius:0px 0px 0px 50px;position:relative;top:-15px;left:-15px;"src="<?php echo $row['about_pic']; ?>"  width="100%" height="800px"></div>
 <div class="aboutd col-6">
 <h1 style="color:#fa416a;font-family:playfair;font-size:65px;">About us</h1>
 
 <p class="ohp2"><?php echo $row['about_us']; ?></p></div>


</center>
<?php
}
?>
 <div>
        	<?php
            	
				include("ourheritage.php")
		
            ?>
			
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