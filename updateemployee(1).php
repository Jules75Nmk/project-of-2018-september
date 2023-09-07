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
$tbl_name="employee"; // Table name

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>
<body background="updt1.JPG"><br><br><br>
<table width="500" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="1200" border="1" cellspacing="0" cellpadding="3"bgcolor="violet">
<tr>
<td colspan="10"><strong><center>List data from employee table</center> </strong> </td>
</tr>

<tr>
<td align="center"><strong>idnumber</strong></td>
<td align="center"><strong>firstname</strong></td>
<td align="center"><strong>lastname</strong></td>
<td align="center"><strong>identity</strong></td>
<td align="center"><strong>address</strong></td>
<td align="center"><strong>phone</strong></td>
<td align="center"><strong>email</strong></td>
<td align="center"><strong>Action</strong></td>



</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><? echo $rows['idnumber']; ?></td>
<td><? echo $rows['firstname']; ?></td>
<td><? echo $rows['lastname']; ?></td>
<td><? echo $rows['identity']; ?></td>
<td><? echo $rows['address']; ?></td>
<td><? echo $rows['phone']; ?></td>
<td><? echo $rows['email']; ?></td>
<td align="center"><a href="updateemployee1.php?idnumber=<? echo $rows['idnumber']; ?>"><input type='button'value='update'></a></td>
</tr>


<?php
}

?>
</table>
</td>
</tr>
</table></body>

<?php
mysql_close();
echo"<a href=\"javascript:window.print();\">Print This Page</a>";
?><br><br><br>
<a href="navigation.html">BACK</a></center>