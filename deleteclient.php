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
$tbl_name="client"; // Table name

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

?><body><br><br><br><br>
<strong><center><font size="8" color="blue">Delete data in client Table</font></center></strong>
<center>
<table width="1200" border="0" cellspacing="2" cellpadding="0">
<tr>
<td><table width="1200" border="0" cellpadding="3" cellspacing="2" bgcolor="rgb(0,255,0)">

<tr>
<td align="center"><strong>clientid</strong></td>
<td align="center"><strong>firstname</strong></td>
<td align="center"><strong>lastname</strong></td>
<td align="center"><strong>sex</strong></td>
<td align="center"><strong>address</strong></td>
<td align="center"><strong>phone</strong></td>
<td align="center"><strong>Action</strong></td>

</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#ffc107"><? echo $rows['clientid']; ?></td>
<td bgcolor="#ffc107"><? echo $rows['firstname']; ?></td>
<td bgcolor="#ffc107"><? echo $rows['lastname']; ?></td>
<td bgcolor="#ffc107"><? echo $rows['sex']; ?></td>
<td bgcolor="#ffc107"><? echo $rows['address']; ?></td>
<td bgcolor="#ffc107"><? echo $rows['phone']; ?></td>
<td bgcolor="#ffc107"><a href="deleteclient1.php?clientid=<? echo $rows['clientid']; ?>"><input type='button' value='delete'name='submit'bgcolor="red"></a></td>
</tr></center>
<?

// close while loop
}

// close connection;
mysql_close();

?>
</table></td>
</tr>
</table><br><br><br>
<a href="navigation.html" color="red">BACK</a></body>