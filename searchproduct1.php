<body background="dap2.png">
<center><?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="product"; // Table name
$Id=$_POST['search'];

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
<body bgcolor="skyblue"><br><br><br>
<center><strong><font color="white"size='35'>Information of Searched product</font></strong></center><br><br>
<center><table width="1000" border="0" cellspacing="1" cellpadding="4">
<tr>
<td><table width="1000" border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
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
<br><br><br><br><br><br>
<a href="navigation.html">BACK TO HOME PAGE</a><br>
<br>
</center>
</body>