<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="product"; // Table name
$clientid=$_POST['search'];

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql
$sql="SELECT * FROM $tbl_name where Id='$Id'";
$result=mysql_query($sql);
$nber=mysql_num_rows($result);
if($nber<1)
{
?>
	<script type="text/javascript">
	alert("Sorry,record not found!");
</script>
<?php
	include("searchproduct1.html");
}

else{
?>
<body background="137803.JPG"><br><br><br>
<center><strong><font color="cyan"size='5'>Information of Searched  product</font></strong></center><br><br>
<center><table width="400" border="1" cellspacing="4" cellpadding="1">
<tr>
<td><table width="800" border="1" cellpadding="1" cellspacing="0" bgcolor="#CCCCCC">
<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Quantity</strong></td>
<td align="center"><strong>Price</strong></td>
<td align="center"><strong>Paidmoney</strong></td>
<td align="center"><strong>clientid</strong></td>
<td align="center"><strong>Date</strong></td>

</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><? echo $rows['Id']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['Name']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['Quantity']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['Price']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['Paidmoney']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['clientid']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['Date']; ?></td>
</tr>
<?
}
?>
</table></td>
</tr>
</table></center><br><?php
echo"<center><a href=\"javascript:window.print();\">Print This Page</a></center>";
}?>
