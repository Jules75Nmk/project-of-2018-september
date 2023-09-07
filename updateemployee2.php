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

// update data in mysql database
$idnumber = $_POST['idnumber'];
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$identity = $_POST['identity'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql="UPDATE $tbl_name SET idnumber='$idnumber',firstname='$firstname', lastname='$lastname',identity='$identity',address='$address',phone='$phone',email='$email' WHERE idnumber='$idnumber'";
$result=mysql_query($sql);

// if successfully updated.
if($result){	
include("updatemessage.php");
echo "<BR>";
//echo "<a href='updatearrival.php'>View result</a>";
include("updateemployee.php");
}

else {
echo "ERROR";
}

?>