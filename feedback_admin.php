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
  padding: 15px;
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
<body><?php include("admin.php"); ?>
<table>
<tr>
<th class="no">S.no.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Feedback</th>
<th>Registration no.</th>
<th>Delete</th>
</tr>
<?php
include("connect.php"); 
$sql="select * from feedback";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($data))
{
?>
<tr>
<td class="no"> </td>
<td><?php echo $row['first_name']; ?></td>
<td><?php echo $row['last_name']; ?></td>
<td><?php echo $row['feedback']; ?></td>
<td><?php echo $row['Serial_num']; ?></td>
<td><a href="feedback_admin.php?id=del&iddel=<?php echo $row['Serial_num']; ?>">Delete</a></td>
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
$sql1="delete from feedback where Serial_num=$del1";
mysqli_query($conn,$sql1);
}
?>


</table>
</body>
</html>