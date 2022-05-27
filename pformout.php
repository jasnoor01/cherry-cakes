<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<table><tr>
<th>Name</th>
<th>Roll_no</th>
<th>branch</th>
<th>DOB</th>
<th>serial number</th></tr>
<?php 
include("connect.php");
$sql="SELECT * from pform";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['Roll_no'];?></td>
<td><?php echo $row['branch']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['serial']; ?></td></tr>
<?php
}
?>
</table>
</body>

</html>