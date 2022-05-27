<!DOCTYPE html>
<html>
<head>
<style>
body{counter-reset: Serial;}
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

 tr td.no:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content: "0" counter(Serial); /* Display the counter */
}


td{padding:10px 40px;}
table,td,th{border:1px solid white;}
</style>
</head>
<body>
<?php include("admin.php"); ?>
<table>
<tr>
<th class="no">S.No.</th>
<th>Category</th>
<th>Product Name</th>
<th>Weight</th>
<th>Type</th>
<th>Price</th>
<th>Description</th>
<th>Image</th>
<th>Delete</th>
<th>Edit</th>
</tr>
<?php
include("connect.php");
$sql="SELECT * FROM `product_info`";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
?>
<tr>
<td class="no"></td>
<td><?php echo $row['category_name'];?></td>
<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['weight'];?> kg</td>
<td><?php echo $row['type'];?></td>
<td>Rs<?php echo $row['price'];?>/-</td>
<td><?php echo $row['product_description'];?></td>
<td><img src="<?php echo $row['product_image'];?>" width="70px"></td>
<td><a href="proedit_admin.php?id=del&iddel=<?php echo $row['product_name'];?>">Delete</a></td>
<td><a href="proupdate_admin.php?id=<?php echo $row['product_name'];?>">Edit</a></td>


</tr>

<?php
}
?>
<?php
include("connect.php"); 
error_reporting(0);
$del=$_GET['id'];
$del1=$_GET['iddel'];
if($del=='del'){
$sql1="delete from product_info where product_name='$del1'";

mysqli_query($conn,$sql1);
}
?>


</table>
</body>
</html>