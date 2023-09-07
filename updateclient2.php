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

// update data in mysql database
$clientid = $_POST['clientid'];
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$sql="UPDATE $tbl_name SET firstname='$firstname',lastname='$lastname', sex='$sex',address='$address',phone='$phone' WHERE clientid='$clientid'";
$result=mysql_query($sql);

// if successfully updated.
if($result){	
include("updatemessage.php");
echo "<BR>";
//echo "<a href='updatearrival.php'>View result</a>";
include("updateclient.php");
}

else {
echo "ERROR";
}

?>