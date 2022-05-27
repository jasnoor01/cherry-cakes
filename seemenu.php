<?php
	session_start();
	error_reporting(0);
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
	}
?>

<!DOCTYPE html>
<head>

<title>Cherry Cakes</title>

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
		  
        	
			
         </div>
			
			 <div>
        	<?php
            	
				include("menubottom.php")
		
            ?>
			
         </div>
			
			
         </div>
		 
		  
		  
		
		
		
         <div>
        	<?php
            	include("footer.php");
            ?>
         </div>
         
        
      
        
</div>
</body>
</html>