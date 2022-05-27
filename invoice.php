<?php
	session_start();
	error_reporting(0);
	$tinv_no='0';

	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
	}
	if(isset($_SESSION['inv_no']))
	{
		$tinv_no=$_SESSION['inv_no'];
		
	}
	//echo $tinv_no;


?>
<!DOCTYPE html>
<html>
  <head>
  
 <style>
 

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  
    counter-reset: Serial;
   
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 120px;
}

#company {
  float: right;
  text-align: right;
  margin-top:20px;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
  width: 100%;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.4em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #fa416a;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #fa416a;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #fa416a;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}
tr td.no:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content: "0" counter(Serial); /* Display the counter */
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: relative;
  bottom: -100px;
  border-top: 1px solid #AAAAAA;

  text-align: center;
}
.oborder{border:2px solid black;height:auto;padding:10px;margin-top:100px;width:100%}
.deletea{
	text-decoration:none;
	color:black;
	border-radius:50px;
	border:1px solid #fa416a;
	
	background-color:whitesmoke;
	padding:10px 20px 10px 20px;
}
.deletea:hover{cursor:pointer;color:white;background-color:#fa416a;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);transition:0.5s ease;}

.tempbill{
	background-color:whitesmoke;
	border:2px solid #ccc;
	margin-top:50px;
	background-image:url('pics/bgpng.png');
	padding:30px;
 margin-right:20px;
width:800px;
float:right;}

@media print{
	body *{visibility:hidden;}
	.print-container,.print-container *{visibility:visible;}
	.print-container{position:absolute;top:0px;}
	body {-webkit-print-color-adjust: exact;}
    
}
@media only screen and (max-width: 1149px),
  {
	  th{display:none;}
	table, thead, tbody,tr,td { 
		display:block; 
	  margin:0 auto;
	  
	}
	
	
	
	tr{margin-bottom:40px;}
	tr,td{width:100%;}
	
	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
		
	}
	
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		display:none;
	}
	
	

	

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		text-align:left;
		left: 22px;
		font-size:18px;
		width: 40%; 
		 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td.:nth-of-type(1):before { content: "Invoice No.:"; }
	td.desc:nth-of-type(2):before { content: "Product:"; }
	td.unit:nth-of-type(3):before { content: "Price:"; }
	td:nth-of-type(4):before { content: "Quantity:"; }
	td:nth-of-type(5):before { content: "Sub-Total:"; }
	
	table .desc{text-align:right;}
	
	.regf,.regbut{padding:23px 100px;width:100%;position: static !important;}
	.regform{float:none;margin-left:auto;margin-right:auto;  position: static !important;
	padding:30px;}

  
}
 

 
 </style>
  </head>
  <body>

  
  
  <div>
        	<?php
            	//include("menufile.php");
				include("header.php")
		
            ?>
			
			
         </div><center>
  <div class="oborder print-container" ">
    <header class="clearfix">
      <div id="logo">
        <img src="pics/cherrycakes.png">
      </div>
      <div id="company">
        <h2 class="name">Cherry Cakes</h2>
        <div>25, Ishmeet Singh Rd, Shastri Nagar, Model Town, <br>Ludhiana, Punjab 141001, India</div>
        <div>+91-81461-20667, 98149-20667</div>
        <div><a href="mailto:info@cherrycakes.in">info@cherrycakes.in</a></div>
      </div>
     
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
		<?php
		include("connect.php");
	$sql2="select * from place_order where invoice_num=$tinv_no ";

$data2=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($data2))
{
	
	
	?>
          <div class="to" style="text-align:left;">INVOICE TO:</div>
          <h2 class="name" style="text-align:left;"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h2>
          <div class="address" style="text-align:left;"><?php echo $row['address']; ?></div>
		  <div class="address" style="text-align:left;"><?php echo $row['city']; ?> <?php echo $row['state']; ?> <?php echo $row['pincode']; ?></div>
          <div class="address" style="text-align:left;">Contact: <?php echo $row['contact']; ?></div>
        </div>
        <div id="invoice">
          <h1>INVOICE NO.<?php echo $row['invoice_num']; ?></h1>
          <div class="date">Date of Invoice: <?php echo $row['invoice_date']; ?></div>
        </div>
      </div>
	  <?php
}
?>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
		  <?php

include("connect.php");
	$sql1="select * from order_details where invoice_num=$tinv_no  ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
	
	
	?>
            <td class="no"></td>
            <td class="desc"><h3><?php echo $row['pro_nm']; ?></</h3><span style="color:black;font-size:15px;"><br>Type:<?php echo $row['pro_type']; ?></span></td>
            <td class="unit"><?php echo $row['pro_price']; ?></</td>
            <td class="qty"><?php echo $row['pro_qty']; ?></</td>
            <td class="total">Rs <?php echo $row['pro_amt']; ?></td>
          </tr>
<?php

}
		  ?>
          
        </tbody>
        <tfoot>
          <tr><?php

include("connect.php");
	$sql1="select SUM(pro_amt) , SUM(pro_qty) from order_details where invoice_num=$tinv_no  ";

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
	?>
            <td colspan="2"></td>
            <td colspan="2">TOTAL QUANTITY</td>
            <td><?php echo  $row['SUM(pro_qty)']; ?></td>
          </tr>
          
          <tr>
            <td colspan="2"></td>
            <td colspan="2" style="color:#fa416a;">GRAND TOTAL</td>
            <td style="color:#fa416a;">Rs <?php echo  $row['SUM(pro_amt)']; ?> /-</td>
          </tr>
		  <?php
}
?>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div style="text-align:left;">NOTICE:</div>
        <div class="notice" style="text-align:left;">Invoice was created on a computer and is valid without the signature and seal.</div>
      </div>
	  	<br><br><button onclick="window.print()" class="deletea">Print invoice</button>
		

    </main>
    
	</div></center>
	<div>
        	<?php
				include("menubottom.php")
		
            ?>
			
     
		 
        	<?php
				include("footer.php")
		
            ?>
			
         </div>
 
  </body>
</html>