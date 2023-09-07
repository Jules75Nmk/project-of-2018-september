<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="employee"; // Table name
$idnumber=$_POST['search'];

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql
$sql="SELECT * FROM $tbl_name where idnumber='$idnumber'";
$result=mysql_query($sql);
$nber=mysql_num_rows($result);
if($nber<1)
{
?>
	<script type="text/javascript">
	alert("Sorry,record not found!");
</script>
<?php
	include("searchemployee.html");
}

else{
?>
<body background="white"><br><br><br>
<center><strong><font color="skyblue"size='5'>employee result Information</font></strong></center><br><br>
<center><table width="1000" border="0" cellspacing="4" cellpadding="1">
<tr>
<td><table width="1000" border="1" cellpadding="1" cellspacing="0" bgcolor="#CCCCCC">
<tr>
<td align="center"><strong>idnumber</strong></td>
<td align="center"><strong>firstname</strong></td>
<td align="center"><strong>lastname</strong></td>
<td align="center"><strong>identity</strong></td>
<td align="center"><strong>address</strong></td>
<td align="center"><strong>phone</strong></td>
<td align="center"><strong>email</strong></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><? echo $rows['idnumber']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['firstname']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['lastname']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['identity']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['address']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['phone']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['email']; ?></td>
</tr>
<?
}
?>
</table></td>
</tr>
</table></center><br><?php
echo"<center><a href=\"javascript:window.print();\">Print This Page</a></center>";

}?>
<center><font color="#cccccc" size="35" face="elephant"><a href="navigation.html">BAck to home page</font></center>