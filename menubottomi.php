<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
.menubottom{float:left;}

.img2{margin:15px;
border:2px solid #ccc;
border-radius:50px;
height:250px; width:250px;
}
.pp{height:500px;}

.img2:hover{border:2px solid black;
opacity:0.9;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);}
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
@media only screen and (max-width: 1149px){
.pp{height:700px;}

}
@media only screen and (max-width: 655px){
.pp{height:1300px;}

}
</style>
</head>
<body>



<div class="pp">
<div class="menubottom col-12">
<h1 style="margin-left:100px;color:#fa416a;font-family:playfair;font-size:45px;">Menu :</h1><br>
<center>

<abbr title="Cakes"><a href="product_gallery1.php?id=Cakes"><img src="pics/uni1.jpeg" class="img2"></abbr></a>
<abbr title="Pastries"><a href="product_gallery1.php?id=Pastries"><img src="pics/pastry.jpg"   class="img2"></abbr></a>
<abbr title="Cookies"><a href="product_gallery1.php?id=Cookies"><img src="pics/cookie1.jpeg"   class="img2"></abbr></a>
<abbr title="Snacks"><a href="product_gallery1.php?id=Snacks"><img src="pics/burger1.jpeg" class="img2"></abbr></a>

</center>

</div>

</div>
</body>
</html>