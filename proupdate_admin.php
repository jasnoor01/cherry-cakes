<?php
$stcat="";
if(isset($_REQUEST['save']))
{
	$edit2=$_GET['id'];
	$stcat= $_REQUEST['save'];
	//echo $stcat;
	$cat_name= $_POST['cat_name'];
$pro_name= $_POST['pro_name'];
$weight1= $_POST['weight1'];
$type=$_POST['type'];
$price= $_POST['price'];
$description= $_POST['description'];
$tfile=$_FILES["image"]["tmp_name"];
//echo $tfile;
include("connect.php");

$sql = "UPDATE product_info SET category_name='$cat_name',product_name='$pro_name',weight=$weight1,type='$type',price=$price,product_description='$description',product_image='pics/$cat_name/$pro_name.jpg' where product_name='$edit2'";
//echo $sql;
move_uploaded_file($tfile, "pics/$cat_name/$pro_name.jpg");
mysqli_query($conn, $sql);
}
?>	

<!DOCTYPE html>
<html>
<head>
<style>

table {
	margin-top:70px;
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 10px;
  background: #EEEEEE;
  font-size:18px;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align:center;
}
table th{background:#fa416a;
color:white;
font-size:20px;}




td{padding:10px 40px;}
table,td,th{border:1px solid white;}
input,textarea{font-size:15px;padding:5px;}
</style>
</head>
<body>
<table><tr>
<th>Category</th>
<th>Product Name</th>
<th>Weight</th>
<th>Type</th>
<th>Price</th>
<th>Description</th>
<th>Image</th>
<th>Upload Image</th>



</tr>
<form action="#" method="post" enctype="multipart/form-data">
<tr>
<td> <select style="font-size:20px;" name="cat_name">
    <!--<option value="Cakes">Cakes</option>
    <option value="Pastries">Pastries</option>
    <option value="Cookies">Cookies</option>
    <option value="Snacks">Snacks</option>
  -->
  <?php
  include("connect.php");
$data=mysqli_query($conn,"select * from  categories order by category_name");
while($row=mysqli_fetch_array($data))
{
  ?>
  <option value="<?php echo $row['category_name']; ?>"> <?php echo $row['category_name']; ?></option>
<?php
}
?>
  </select></td>
<?php
include("connect.php");
$edit=$_GET['id'];
$sql="SELECT * FROM `product_info` WHERE product_name='$edit' ";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
?>



<td><input type="text" value="<?php echo $row['product_name'];?>" name="pro_name"></td>
<td><input type="text" value="<?php echo $row['weight'];?>" name="weight1"></td>
<td><input type="text" value="<?php echo $row['type'];?>" name="type"></td>
<td><input type="text" value="<?php echo $row['price'];?> " name="price"></td>
<td><textarea type="text" cols="40" rows="5" name="description"><?php echo $row['product_description'];?></textarea></td>
<td><img src="<?php echo $row['product_image'];?>" width="70px"></td>
<td><label>Image:</label><input type="file" value=""  name="image" placeholder="Image" /></td>
</tr>

<tr><td colspan="8"><input style="width:700px;cursor:pointer;" name="save" type="submit" value="Save"></td></tr>
</form>
<?php
}
?>
<tr><td colspan="8"><i>*Kindly reupload the image if you have changed Product name or Category*</i></td><tr>


</table>
</body>
</html>