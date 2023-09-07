<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="client"; // Table name

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$clientid=$_GET['clientid'];

// Delete data in mysql from row that has this id
$sql="DELETE FROM $tbl_name WHERE clientid='$clientid'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
include("deletemessage.php");
echo "<BR>";
//echo "<a href='deleteform1.php'>Back to main page</a>";
include("deleteclient.php");
}

else {
echo "ERROR";
}
// close connection
//mysql_close();

?>
