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

<!DOCTYPE html>
<head>

<title>Cherry Cakes</title>
<link rel="shortcut icon" href="pics/logoico.ico" />

<style>

</style>
</head>

<body>


<div>
		
        
        <div>
        	<?php
            	//include("menufile.php");
				include("header.php")
		
            ?>
			
         </div>
		  <div>
        	<?php
           
				include("bakery.php")
		
            ?>
			 </div>
        	
			
         
			
			 <div>
        	<?php
            	
				include("menubottomi.php")
		
            ?>
			
         </div>
			  
		   
			
        	
			 <div>
        	<?php
            	
				include("quality.php")
		
            ?>
			
         </div>
		  <div>
        	<?php
            	
				include("ourheritage.php")
		
            ?>
			
         </div>
		 <div>
        	<?php
            	
				include("feedback_view.php")
		
            ?>
			
         </div>
        <div>
        	<?php
            	
				include("feedback.php")
		
            ?>
			
         </div>
         <div>
        	<?php
            	include("footer.php");
            ?>
         </div>
         
        
      
        
</div>
</body>
</html>