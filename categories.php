<!DOCTYPE html>
<html>
<head>
<style>
body{font-size:20px;}
table{width:300px;}
</style>
</head>
<body><?php include("admin.php"); ?>
<form action="category_action.php" method="post">
<table>
<tr>
<th>
Product Category 

</th>
</tr>
<tr><td>
Type the name of category to insert<input style="padding:20px;font-size:20px;" type="text" value="" name="category" /></td>
</tr>
<tr><td>
<input name="Save" type="submit" style="padding:20px;cursor:pointer;width:100px;" value="Save">
</td></tr>
</table>
</form>


<?php
include("connect.php");
$data=mysqli_query($conn,"select * from  categories order by category_name");


?>

<h4>List of categories</h4>
<table border='1'  cellspacing="5">
<tr><th colspan="3" style="padding:10px;">Category Name</th></tr>
<?php
while($row=mysqli_fetch_array($data))
{
?> 
<tr>
<td style="padding:10px;"> <b> <?php echo $row['category_name']; ?> </b></td><td><a href="category_delete.php?id=<?php echo $row['category_name']; ?>" ><img src="pics/close.png" width="20" height="20"/></a></td>
</tr>
<?php } ?>
</table>

</body>
</html>