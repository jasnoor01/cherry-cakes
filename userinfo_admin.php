
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
<body>
<?php include("admin.php"); ?>
<table>
<tr>
<th class="no">S no.</th>
<th>First name</th>
<th>Last name</th>
<th>DOB</th>
<th>Contact</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>Address</th>
<th>Status</th>
<th>City</th>
<th>State</th>
<th>Pincode</th>
<th>Country</th>
<th>Registration number</th>
<th>Action</th>

</tr>

	 <?php

include("connect.php");
	$sql1="select * from registration_form  ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{

	?>
	<tr>
<td class="no"></td>	
<td><?php echo $row['first_name']; ?></td>
<td><?php echo $row['last_name']; ?></td>
<td> <?php echo $row['date_of_birth']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['user_name']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['state']; ?></td>
<td><?php echo $row['pincode']; ?></td>
<td><?php echo $row['country']; ?></td>
<td><?php echo $row['Serial_num']; ?></td>

<td><a href="userdel_admin.php?id=<?php echo $row['Serial_num']; ?>">Delete</a><br><a href="userban_admin.php?ser=<?php echo $row['Serial_num'];?>&em=<?php echo $row['email']; ?>&cosn=<?php echo $row['contact']; ?>&un=<?php echo $row['user_name'];?>">Ban</a></td>

</tr>
<?php
}
?>

</table>

</body>
</html>