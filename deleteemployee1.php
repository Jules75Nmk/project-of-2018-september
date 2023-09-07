<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="EMPLOYEE"; // Table name

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$idnumber=$_GET['idnumber'];

// Delete data in mysql from row that has this id
$sql="DELETE FROM $tbl_name WHERE idnumber='$idnumber'";
$result=mysql_query($sql);
// if successfully deleted
if($result){
include("deletemessage.php");
echo "<BR>";
//echo "<a href='deleteform1.php'>Back to main page</a>";
include("deleteemployee.php");
}

else {
echo "ERROR";
}
// close connection
//mysql_close();

?>
