<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="pics/logoico.ico" />
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body{margin:0px;}

*{ box-sizing:border-box;}

div.gallery {
  margin:20px 10px;
  border: 1px solid #ccc;
   width:300px;
	height:450px;
	float:left;
}
div.gallery:hover {
  border: 1px solid black;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.imgg {
  width: 100%;
  height: auto;
}
.fl{ display:none; }
div.pname{
  padding: 15px;
  text-align: center;
  font-size:18px;
}
div.gallerypos{padding:5px 70px;float:right;}

ul.sidenavul{list-style-type: none;}

a.sidenavli{padding:20px;}
.sidenavli{
color:black;
text-decoration:none;
font-size:18px;
padding:10px;
}
.sidenavli  a{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-size:18px;
  border-bottom:2px solid #ccc; 
}
.sidenavli a:hover {background-color: #f1f1f1;   color:#fa416a; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);}

.sidenavli:hover{color:#fa416a;}

.parent5{height:3000px;margin-top:45px;}

.sidenav{float:left;
background-color:whitesmoke;
background-image:url('pics/back.png');
height:100%;

}
.sidenavul{position:sticky;top:10px;}


.cart a {color:black;
text-decoration:none;
background-color:whitesmoke;
padding:10px;
border:1px solid #fa416a;
border-radius:50px;}

.cart a:hover{color:white;background-color:#fa416a;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);transition:0.5s ease;}

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
.fl{font-size:18px;background-color:whitesmoke;
color:black;
padding:15px;
padding-left:36px;
position:relative;
top:-5px;
}
.fl:hover{color:#fa416a;}
	.parent5{position:relative;top:5px;}
	
	
	
@media only screen and (max-width: 1149px){
	.sidenav{ display:none;height:800px; }
	.fl{ display:block; }	
	
	div.gallery{margin:0 auto;width:100%;margin-bottom:20px;height:auto;}
	
}
</style>
</head>
<body>

 <div>
        	<?php
            	
				include("header.php")
			
            ?>
			
         </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".fl").click(function(){
    $(".sidenav").toggle();
  });
});
</script>
<div class="parent5">
 
	
	
	<a href="#" class="fl">FILTER</a>
	
	
	<div class="sidenav col-3">
	<ul class="sidenavul">
 

 
   <li><b style="font-size:20px;color:#fa416a;">MENU:</b> 
     <?php
  include("connect.php");
$data=mysqli_query($conn,"select * from  categories order by category_name");
while($row=mysqli_fetch_array($data))
{
  ?>
  
    <li class="sidenavli" ><a style="font-size:18px;text-transform: uppercase;" href="product_gallery1.php?id=<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></a></li>
<?php
}
?>

  <li><b style="font-size:20px;color:#fa416a;">SORT BY:</b> 
      
       <li class=" sidenavli" > <a  href="product_gallery1.php?id=<?php echo $_GET['id']; ?>&st=1"><b>PRICE:</b>Low to high</a></li>
      <li class=" sidenavli"> <a href="product_gallery1.php?id=<?php echo $_GET['id']; ?>&st=2"><b>PRICE:</b>High to low</a></li></li>
	 
	 <?php
		
	 if($_GET['id']=='Cakes'){ ?>
      <li class=" sidenavli"> <a href="product_gallery1.php?id=<?php echo $_GET['id']; ?>&st=3"><b>WEIGHT:</b>1kg</a></li>
	  <li class=" sidenavli"> <a href="product_gallery1.php?id=<?php echo $_GET['id']; ?>&st=4"><b>WEIGHT:</b>1/2kg</a></li>
	 <?php } ?>
	  
	  <li class=" sidenavli"> <a href="product_gallery1.php?id=<?php echo $_GET['id']; ?>&st=5"><b>TYPE:</b>VEG</a></li>
	  	  <li class=" sidenavli"> <a href="product_gallery1.php?id=<?php echo $_GET['id']; ?>&st=6"><b>TYPE:</b>NON-VEG</a></li>
    </li>
  

</ul>
	</div>
	
		<div class="gallerypos col-8 ">
	
<?php
include("connect.php");
	
		
if(isset($_GET['id']))
{
	if(isset($_GET['st']))
	{
			$srt= $_GET['st'];
			if($srt==1)
			{
				$sql1="select * from product_info  where category_name='".$_GET['id']."' order by Price";
			}
			else if($srt==2)
			{
				$sql1="select * from product_info  where category_name='".$_GET['id']."' order by Price DESC";
			}
			else if($srt==3)
			{
				$sql1="select * from product_info  where category_name='".$_GET['id']."' and weight=1 order by Price";
			}
			else if($srt==4)
			{
				$sql1="select * from product_info  where category_name='".$_GET['id']."' and weight=0.5 order by Price";
			}
			
			else if($srt==5)
			{
				$sql1="select * from product_info  where category_name='".$_GET['id']."' and type='VEG' order by Price";
			}
			else if($srt==6)
			{
				$sql1="select * from product_info  where category_name='".$_GET['id']."' and type='NON-VEG' order by Price";
			}
	}
	else
	{

		$sql1="select * from product_info  where category_name='".$_GET['id']."' order by category_name";
	}
}
else
{
	$sql1="select * from product_info order by category_name";
}
$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
	$type= $row['type'];
?>

<div class="gallery">
  <a href="product_desc.php?pron=<?php echo $row['product_name']; ?>">
    <img class="imgg" src="<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_image']; ?>" >
	
  </a>
 
  <div class="pname">
	<b style="font-size:20px;"><?php echo $row['product_name']; ?>
	 <?php
	if($type=='VEG')
	{
	?>
	<img src="pics/veg.png" width="15px" >
	<?php } 
	else
	{
		?>
		<img src="pics/nveg.png" width="15px">
	<?php 
	}
	?></b>

	
	
	
	
	<br>
	Price :<?php echo $row['price']; ?>/-
	<br><br>
	<span class="cart"> <a href="cart.php?pnm=<?php echo $row['product_name']; ?>">Add to Cart</a></span><br><br>
	
  </div>

</div>
<?php
}
?>

	</div>
	</div>
	 <div>
        	<?php
            	
				include("footer.php")
			
            ?>
			
         </div>
	</body>
	</html>