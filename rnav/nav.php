<?php
	session_start();
	//error_reporting(0);
	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<style>
	
nav{
	
	position:relative;
	top:-60px;
  background: whitesmoke;
  height: 80px;
  width: 100%;
}
.navbut {padding:30px; }
	a.navbut{padding:20px;}
nav ul{
  
  margin-right: 20px;
}
nav ul li{
	
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
  margin-left:10px;
}
nav ul li a{
  color: black;
  font-size: 18px;
  padding: 7px 13px;
  border-radius: 3px;
 
}
a.active,a:hover{
  
  transition: .5s;
  color: #fa416a;
}
.checkbtn{
  font-size: 30px;
  color: black;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}

#check{
  display: none;
}
.dropdown-content ,.dropdown-content1{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-weight:normal;
  font-size:18px;
  
}

.dropdown-content a {
  color: black;
  line-height:40px;
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
  line-height:40px;
}

.dropdown-content1 a:hover {background-color: #f1f1f1;   color:#fa416a;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
   
}
@media (max-width: 952px){
	
	body{margin:0;padding:0;}
  nav{position:relative;
  top:-60px;}
  nav ul{
	  }
  nav ul li a{
    font-size: 16px;
	
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
nav{position:relative;
  top:-95px;}
  ul{
    position:relative;
	
    width: 100%;
    height: 100vh;
    background: whitesmoke;
    top: 50px;
    left: -100%;
    text-align: center;
    transition: all .5s;
	z-index: 1;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 50px;
	
	
  }
  
  nav ul li a{
    font-size: 20px;
	
  }
  a:hover,a.active{
    background: none;
    color: #fa416a;
  }
  #check:checked ~ ul{
    left: 0;
  }
}

	</style>
	
	
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
 <center>   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      
      <ul>
        <li ><a class="active navbut" href="index.php">HOME</a></li>
        <li ><a  class="navbut" href="#">ABOUT US</a></li>
        <li class="dropdown"><a class="navbut"  href="#">MENU</a>
		<div class="dropdown-content">
      <a  href="#">Cake</a>
      <a href="#">Pastries</a>
      <a href="#">Cookies</a>
	  <a href="#">Snacks</a>
    </div>
		
		</li>
        <li ><a class="navbut" href="#">ORDER ONLINE</a></li>
        <li class="dropdown1"><a class="navbut"  href="#">CONTACT</a>
		  <div class="dropdown-content1">
      <a href="#">Ph:+91-81461-20667</a>
      <a href="https://www.google.com/intl/en-GB/gmail/about/#" target="_blank">info@cherrycakes.in</a>
      <a href="https://www.instagram.com/" target="_blank">Instagram</a>
            <a href="https://www.twitter.com/" target="_blank">Twitter</a></div>  
		</li>
          <li>	
		  <?php
		if($_SESSION['usr_nm1']=="guest")
		{
	       ?>
		<a  class="navbut"href="Login_page.php">LOGIN</a>
		<?php
		}
		else
		{
	?> <a class="navbut" href="index1.php"><span style="font-size:16px;">LOGOUT</span></a>
    
    <?php
		}
	?></li>
      </ul>
    </nav></center>
  
  </body>
</html>
