<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="client"; // Table name
$clientid=$_POST['search'];

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql
$sql="SELECT * FROM $tbl_name where clientid='$clientid'";
$result=mysql_query($sql);
$nber=mysql_num_rows($result);
if($nber<1)
{
?>
	<script type="text/javascript">
	alert("Sorry,record not found!");
</script>
<?php
	include("searchclient1.html");
}

else{
?>
<body background="137803.JPG"><br><br><br>
<center><strong><font color="cyan"size='5'>Information of Searched  client</font></strong></center><br><br>
<center><table width="400" border="0" cellspacing="4" cellpadding="1">
<tr>
<td><table width="800" border="1" cellpadding="1" cellspacing="2" bgcolor="white">
<tr>
<td align="center"><strong>clientid</strong></td>
<td align="center"><strong>firstname</strong></td>
<td align="center"><strong>lastname</strong></td>
<td align="center"><strong>sex</strong></td>
<td align="center"><strong>address</strong></td>
<td align="center"><strong>phone</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="white"><? echo $rows['clientid']; ?></td>
<td bgcolor="white"><? echo $rows['firstname']; ?></td>
<td bgcolor="white"><? echo $rows['lastname']; ?></td>
<td bgcolor="white"><? echo $rows['sex']; ?></td>
<td bgcolor="white"><? echo $rows['address']; ?></td>
<td bgcolor="white"><? echo $rows['phone']; ?></td>
</tr>
<?
}
?>
</table></td>
</tr>
</table></center><br><?php
echo"<center><a href=\"javascript:window.print();\">Print This Page</a></center>";

}?>
<br><br>
<center><a href="navigation.html">BACK TO HOME PAGE</a><br></center>