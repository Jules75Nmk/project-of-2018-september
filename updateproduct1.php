<body background="urea.png"position="no-repeat">
<center>
<br>
<br>
<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="product"; // Table name

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$Id=$_GET['Id'];


// Retrieve data from database
$sql="SELECT * FROM $tbl_name WHERE Id='$Id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<br>
<br><br>
<br><br>
<br><strong>Update data in product Table</strong><br><br>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="updateproduct2.php">
<td>
<table border="0" cellspacing="1" cellpadding="0"bgcolor=#ffc107>
<tr>
<td><strong>Id</strong></td><td><input name="Id" type="text" IdNumber="Id" readonly='readonly' value="<? echo $rows['Id']; ?>"size="47"></td></tr>
<tr>
<td><strong>Name</strong></td><td><input name="Name" type="text" IdNumber="Name" value="<? echo $rows['Name']; ?>" size="47"></td></tr>
<tr>
<td><strong>Quantity</strong></td><td><input name="Quantity" type="text" IdNumber="Quantity" value="<? echo $rows['Quantity']; ?>" size="47"></td></tr>
<tr>
<td><strong>Price</strong></td><td><input name="Price" type="text" IdNumber="Price" value="<? echo $rows['Price']; ?>" size="47"></td></tr>
<tr>
<td><strong>Paidmoney</strong></td><td><input name="Paidmoney" type="text" IdNumber="Paidmoney" value="<? echo $rows['Paidmoney']; ?>" size="47"></td></tr>
<tr>
<td><strong>clientid</strong></td><td><input name="clientid" type="text" IdNumber="clientid" value="<? echo $rows['clientid']; ?>" size="47"></td></tr>
<tr>
<td><strong>Date</strong></td><td><input name="Date" type="text" IdNumber="Date" value="<? echo $rows['Date']; ?>" size="47"></td></tr>
<tr>
<td>&nbsp;</td>

<td><input type="submit" name="Submit" value="Submit"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?

// close connection
mysql_close();

?>
</center></body>