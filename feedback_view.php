<!DOCTYPE html>
<html>
<head>

<style>
.mySlides1 {display:none;height:100px;}
body{margin:0;overflow-x:hidden;}
.feed
{width:800px;
margin: auto;
color:white;

}

.feedp{border:2px solid #62c3e7 ;width:100%;
height:500px;
background-color:#62c3e7;position:relative;}
	    @font-face {
  font-family:playfair;
  src: url("fonts/DancingScript-Regular.ttf");
}
.what{
font-size:45px;}
@media only screen and (max-width: 1149px){
	.what{font-size:40px;}
.feed,.mySlides1
{width:350px;
margin: auto;
}
.feedt{font-size:18px;}
.name{font-size:25px;}
.feedp{
height:500px;}
}
</style>
</head>
<body>
<div class="feedp">
<?php

include("connect.php");
	$sql1="select * from feedback   ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
?>


  <div class="mySlides1 feed">
   <h1 style="font-family:playfair;" class="what">What Customers Say :</h1>
    <h2 class="feedt"><i>"<?php echo $row['feedback']; ?>"</i></h2>
	<br>
	 <h1 style="float:right;" class="name">-<?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h1>
  </div>

<?php
}
?>
</div>
<script>
var slideIndex1 = 0;
carousel1();

function carousel1() {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex1++;
  if (slideIndex1 > x.length) {slideIndex1 = 1} 
  x[slideIndex1-1].style.display = "block"; 
  setTimeout(carousel1, 3000); 
}
</script>

</body>
</html>
