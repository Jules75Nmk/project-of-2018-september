<center>
	<br><br><br><br>
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

// get value of id that sent from address bar
$idnumber=$_GET['idnumber'];


// Retrieve data from database
$sql="SELECT * FROM $tbl_name WHERE idnumber='$idnumber'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<strong>Update data in employee Table</strong><br><br>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="updateemployee2.php">
<td>
<table border="0" cellspacing="1" cellpadding="0"bgcolor=#3EA99F>

<tr>
<td><strong>idnumber</strong></td><td><input name="idnumber" type="text" IdNumber="idnumber" readonly='readonly' value="<? echo $rows['idnumber']; ?>"size="50"></td></tr>
<tr>
<td><strong>firstname</strong></td><td><input name="firstname" type="text" IdNumber="firstname" value="<? echo $rows['firstname']; ?>" size="50"></td></tr>
<tr>
<td><strong>lastname</strong></td><td><input name="lastname" type="text" IdNumber="lastname" value="<? echo $rows['lastname']; ?>" size="50"></td></tr>
<tr>
<td><strong>identity</strong></td><td><input name="identity" type="text" IdNumber="identity" value="<? echo $rows['identity']; ?>" size="50"></td></tr>
<tr>
<td><strong>address</strong></td><td><input name="address" type="text" IdNumber="address" value="<? echo $rows['address']; ?>" size="50"></td></tr>
<tr>
<td><strong>phone</strong></td><td><input name="phone" type="text" IdNumber="phone" value="<? echo $rows['phone']; ?>" size="50"></td></tr>
<tr>
<td><strong>email</strong></td><td><input name="email" type="text" IdNumber="email" value="<? echo $rows['email']; ?>" size="50"></td></tr>
</tr>
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

</center>