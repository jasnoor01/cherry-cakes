<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {margin:0;font-family: Arial,sans-serif;}
.topnavp{
background-color: whitesmoke;
position:relative;
	top:-10px;
	
}

.topnav {
  overflow: hidden;
  background-color: whitesmoke;
  width:770px;
  z-index:1;
  
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
   margin-left:20px;
}

.active {
  background-color: whitesmoke;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  
}

.dropdown .dropbtn {
  font-size: 18px;    
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  
  
  background-color: inherit;

  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  cursor:pointer;
  color: #fa416a;
  
}

.dropdown-content a:hover {
  background-color: #ddd;
  color:#fa416a;
  background-color:whitesmoke;
  
}

.dropdown:hover .dropdown-content {
  display: block;
  
}

@media screen and (max-width: 750px) {
	.topnav{width:100%;margin-left:0;}
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
	
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 750px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align:center;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align:center;
	margin-left:10px;
  }
}
</style>
</head>
<body>
<div class="topnavp"><center>
<div class="topnav" id="myTopnav">
 <a href="index.php" class="active">HOME</a>
  
  <a href="about_user.php">ABOUT US</a>
  <div class="dropdown" >
    <button class="dropbtn" style="font-family: Arial,sans-serif;">MENU
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a  href="product_gallery1.php?id=Cakes">Cakes</a>
      <a href="product_gallery1.php?id=Pastries">Pastries</a>
      <a href="product_gallery1.php?id=Cookies">Cookies</a>
	  <a href="product_gallery1.php?id=Snacks">Snacks</a>
    </div>
  </div> 
  
  <?php
  if($_SESSION['usr_nm1']!='guest')
  {
	  ?>
	  

  <div class="dropdown" >
    <button class="dropbtn" style="font-family: Arial,sans-serif;">MY ORDERS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a  href="myorders.php">View Cart</a>
      <a  href="previousorders.php">Previous Orders</a>
    </div>
  </div> 
  <?php
  }
  else{
	 
  ?>
   <a href="alert.php">MY ORDERS</a>
   
   <?php
  }
  ?>
  <div class="dropdown">
    <button class="dropbtn" style="font-family: Arial,sans-serif;">CONTACT
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Ph:+91-81461-20667</a>
      <a href="mailto:info@cherrycakes.in" target="_blank">info@cherrycakes.in</a>
      <a href="https://www.instagram.com/" target="_blank">Instagram</a>
            <a href="https://www.twitter.com/" target="_blank">Twitter</a>
    </div>
  </div> 
    <?php
		if($_SESSION['usr_nm1']=="guest")
		{
	       ?>
		<a  href="Login_page.php">LOGIN</a>
		<?php
		}
		else
		{
	?>
	<div class="dropdown">
    <button class="dropbtn" style="font-family: Arial,sans-serif;">PROFILE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    
      <a href="index1.php">Logout</a>
      <a href="viewprofile.php">View Profile</a>
          
    </div>
  </div> 
    
    <?php
		}
	?>
  
  
  <a href="javascript:void(0);" style="font-size:15px;color:black;" class="icon" onclick="myFunction()">&#9776;</a>
</div></center>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
