<style type="text/css">
A:link{
text-decoration:none;
}
</style>
<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="Product"; // Table name

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

?><body background="white" size="center"><br><br><br><br>
<strong><center><font size="6" color="white">Delete data in product Table</font></center></strong>
<center>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><table width="1300" border="0" cellpadding="3" cellspacing="1" bgcolor="blue">

<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Quantity</strong></td>
<td align="center"><strong>Price per unit</strong></td>
<td align="center"><strong>Paidmoney</strong></td>
<td align="center"><strong>clientid</strong></td>
<td align="center"><strong>Date</strong></td>
<td align="center"><strong>Action</strong></td>

</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="white"><? echo $rows['Id']; ?></td>
<td bgcolor="white"><? echo $rows['Name']; ?></td>
<td bgcolor="white"><? echo $rows['Quantity']; ?></td>
<td bgcolor="white"><? echo $rows['Price']; ?></td>
<td bgcolor="white"><? echo $rows['Paidmoney']; ?></td>
<td bgcolor="white"><? echo $rows['clientid']; ?></td>
<td bgcolor="white"><? echo $rows['Date']; ?></td>
<td bgcolor="white"><a href="deleteProduct1.php?Id=<? echo $rows['Id']; ?>"><input type='button' value='delete'name='submit'bgcolor="red"></a></td>
</tr></center>
<?

// close while loop
}

// close connection;
mysql_close();

?>
</table></td>
</tr>
<br>
</table>
<br>
<br><a href="navigation.html">Back</a></body>
