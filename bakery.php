<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

<style>
.mySlides {display:none;}
 @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
}

.quality{
	position:relative;
top:-600px;
left:55px;
color:white;
font-size:80px;
font-family:playfair ;}

.seemenu a {color:black;
text-decoration:none;
background-color:whitesmoke;
padding:10px;
border:1px solid #fa416a;
border-radius:50px;
font-size:40px;}

.seemenu a:hover{color:white;background-color:#fa416a;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);transition:0.5s ease;}
.parentslide{height:700px;overflow-x:hidden;overflow-y:hidden;}

@media only screen and (max-width: 416px){
	.quality{
	font-size:30px;
	position:relative;
	left:15px;

top:-200px;}
	.parentslide{height:300px;}
	.mySlides{height:300px;}
	.seemenu{margin-top:10px}
	.seemenu a{font-size:20px;}
	
}
</style>
</head>

<body>


<div class="parentslide" style="width:100%;">
  <img class="mySlides" src="pics/slide1.jpg" style="width:100%" height="700px">
  <img class="mySlides" src="pics/slide2.jpg" style="width:100%" height="700px">
  <img class="mySlides" src="pics/slide3.jpg" style="width:100%" height="700px">  
  <img class="mySlides" src="pics/slide4.jpg" style="width:100%" height="700px">
  <img class="mySlides" src="pics/slide5.jpg" style="width:100%" height="700px">
  <h1 class="quality"> Quality Cakes <br>with best taste, <br>designs, freshness and sweetness!<br>
  <div class="seemenu"> <a href="seemenu.php">See Menu</a></div>
  </h1>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>


</body>
</html>
