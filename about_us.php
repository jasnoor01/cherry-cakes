<?php
$stcat="";
if(isset($_REQUEST['save']))
{
	$stcat= $_REQUEST['save'];
	echo $stcat;
}
?>

<!DOCTYPE html >
<html >
<head>
<style>table,th,td{border:1px solid black; margin-top:20px;}</style>
<title>ABOUT US</title>
</head>
<body><?php include("admin.php"); ?>
<form action="about_save.php" method="post"enctype="multipart/form-data">

<table style="border:2px solid black;">
<tr ><th colspan="2">WRITE ABOUT US</th></tr>
<tr><td ><textarea name="aboutus" value="" placeholder="ABOUT US" rows="20" cols="60"> </textarea></td><td>
<input type="file" name="about_pic" value=""><br>
<input type="text" name="about_image" value="ABOUT_US_PIC"></td></td>
</tr>

  
<br />

 <tr><td colspan="2">
<input type="submit" name="save"  value="Add AboutUs" />

 </td></tr>
 
 
 <?php
include("connect.php");
$data=mysqli_query($conn,"select * from  about_us1  ");


?>


<table border='1'  cellspacing="5">
<tr><th  style="padding:10px;">ABOUT US</th>
<th  style="padding:10px;">Image</th>
<th style="padding:10px;">Delete ABOUT US</th>
</tr>
<?php
while($row=mysqli_fetch_array($data))
{
?> 
<tr>

<td style="padding:10px;"> <b> <?php echo $row['about_us']; ?> </b></td>
<td style="padding:10px;"><img src="<?php echo $row['about_pic']; ?>" width="200px"> </td>


<td><a href="about_delete.php?id=<?php echo $row['about_us']; ?>" ><img src="pics/close.png" width="20" height="20"/></a></td>

</tr>
<?php } ?>
</form>



</body>
</html>
