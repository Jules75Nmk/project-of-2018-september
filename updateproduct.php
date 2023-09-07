<center>
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
$tbl_name="product"; // Table name

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>
<body background="updt1.JPG"><br><br><br>
<table width="1000" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="1000" border="1" cellspacing="0" cellpadding="3"bgcolor="white">
<tr>
<td colspan="10"><strong><center>List data from product table</center> </strong> </td>
</tr>

<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Quantity</strong></td>
<td align="center"><strong>Price</strong></td>
<td align="center"><strong>Paidmoney</strong></td>
<td align="center"><strong>clientid</strong></td>
<td align="center"><strong>Date</strong></td>
<td align="center"><strong>Action</strong></td>



</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><? echo $rows['Id']; ?></td>
<td><? echo $rows['Name']; ?></td>
<td><? echo $rows['Quantity']; ?></td>
<td><? echo $rows['Price']; ?></td>
<td><? echo $rows['Paidmoney']; ?></td>
<td><? echo $rows['clientid']; ?></td>
<td><? echo $rows['Date']; ?></td>
<td align="center"><a href="updateproduct1.php?Id=<? echo $rows['Id']; ?>"><input type='button'value='update'></a></td>
</tr>


<?php
}

?>
</table>
</td>
</tr>
</table></body>

<center><?php
mysql_close();
echo"<a href=\"javascript:window.print();\">Print This Page</a>";
?><br><br>
<a href="navigation.html">BACK</a>
</center>

