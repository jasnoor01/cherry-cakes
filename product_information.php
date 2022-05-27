<?php
$stcat="";
if(isset($_REQUEST['save']))
{
	$stcat= $_REQUEST['save'];
	echo $stcat;
}
?>	

<!DOCTYPE html>
<head>
<title>Product Info</title>
<style>
table{margin:20px;}
input{padding:20px;font-size:20px;}

.desc,label{width:525px;height:200px;font-size:20px;}
option{
font-size:20px;
padding:10px;
}
</style>
</head>
<body>
<?php include("admin.php"); ?>
<form action="product_action.php"  method="post" enctype="multipart/form-data">
<table>

<tr><th colspan="7" style="font-size:20px;">PRODUCT INFORMATION</th></tr>
<tr><td><label>Choose a category:</label>
  <select style="font-size:20px;" name="cat_name">
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
  </select></td></tr>
<tr>
<td><input type="text" value=""  name="pro_name" placeholder="Product name" /></td></tr>
<tr>
<td><br><label style="font-size:20px;">Weight:</label><br>
<input type="radio" id="half" name="weight1" value="0.5">
  <label for="1/2">1/2kg</label><br>
  <input type="radio" name="weight1" value="1">
  <label for="1">1kg</label><br>
  <input type="radio"  name="weight1" value="0">
  <label for="no">No-weight</label><br><br>
</td></tr>

<tr>
<td><label>Image:</label><input type="file" value=""  name="image" placeholder="Image" /></td></tr>

<tr>
<td><br><label style="font-size:20px;">Type:</label><br>

<input type="radio" id="veg" name="type" value="VEG">
  <label for="veg">VEG</label><br>
  <input type="radio" id="non-veg" name="type" value="NON-VEG">
  <label for="non-veg">NON-VEG</label><br><br>
</td></tr>
<tr><td><label style="font-size:20px;">RS:</label><input type="text" value="" name="price" placeholder="Price" /></td></tr>
<tr><td colspan="2"><textarea class="desc"  type="text" value="" name="description" placeholder="Description" /></textarea>


<tr><td><input name="save" type="submit" value="Save"></td></tr>

</table>
</body>
</html>