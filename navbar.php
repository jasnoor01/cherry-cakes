<?php
	session_start();
	error_reporting(0);
	
?>
<!DOCTYPE html>
<head>

<style>
    body{
        margin: 0;
        padding: 0;
		
    }
	.navbar{
position:relative;
    top:-60px;
	width:100%;
	

}
    ul.navul{
        background-color: whitesmoke;
        
    }
    li.navcon{
        display: inline-block;
        
        padding: 20px 30px 20px 30px;
        font-weight: bold;
        margin-left: 20px;
        margin-right: 20px;
        
    }
    a{
        text-decoration:none;
        color: black;
		
    }
    
li:hover a.nava{
        color:#fa416a;
        cursor:pointer;
		
    }
    li:hover{cursor:pointer;  color:#fa416a;}
    
.dropdown-content ,.dropdown-content1{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-weight:normal;
  font-size:16px;
  
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;   color:#fa416a;
}

.dropdown:hover .dropdown-content {
  display: block;
   
}
    .dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content1 a:hover {background-color: #f1f1f1;   color:#fa416a;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
   
}
   a.nava{
   padding: 20px 30px 20px 30px;}
    </style>

</head>
<body>
<div class="navbar">
    <center><ul class="navul">
        <li class="navcon"><a class="nava" href="index.php"><span style="color: #fa416a;">HOME</span></a></li>
        <li class="navcon"><a class="nava" href="#">ABOUT</a></li>
        <li class="navcon dropdown">MENU <div class="dropdown-content">
      <a  href="#">Cake</a>
      <a href="#">Pastries</a>
      <a href="#">Cookies</a>
	  <a href="#">Snacks</a>
    </div></li>
        <li class="navcon"><a class="nava" href="#">ORDER ONLINE</a></li>
        <li class="navcon dropdown1">CONTACT
        <div class="dropdown-content1">
      <a href="#">Ph:+91-81461-20667</a>
      <a href="https://www.google.com/intl/en-GB/gmail/about/#" target="_blank">info@cherrycakes.in</a>
      <a href="https://www.instagram.com/" target="_blank">Instagram</a>
            <a href="https://www.twitter.com/" target="_blank">Twitter</a></div>       
        </li>
        <li class="navcon">
		
		  <?php
		if($_SESSION['usr_nm1']=="guest")
		{
	       ?>
		<a  class="nava"href="Login_page.php">LOGIN</a>
		<?php
		}
		else
		{
	?> <a class="nava" href="index1.php"><span style="font-size:16px;">LOGOUT</span></a>
    
    <?php
		}
	?>
    
		
		
		</li>
    
    </ul></center>
    
    </div>

</body>