<?php
include("connect.php");
$host="127.0.0.1"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name
$tbl_name="product"; // Table name

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");

// update data in mysql database
$Id = $_POST['Id'];
$Name= $_POST['Name'];
$Quantity= $_POST['Quantity'];
$Price = $_POST['Price'];
$Paidmoney = $_POST['Paidmoney'];
$clientid = $_POST['clientid'];
$Date = $_POST['Date'];
$Paidmoney=$Quantity*$Price;

$sql="UPDATE $tbl_name SET Name='$Name',Quantity='$Quantity', Price='$Price',Paidmoney='$Paidmoney',clientid='$clientid',Date='$Date' WHERE Id='$Id'";
$result=mysql_query($sql);

// if successfully updated.
if($result){	
include("updatemessage.php");
echo "<BR>";
//echo "<a href='updatearrival.php'>View result</a>";
include("updateproduct.php");
}

else {
echo "ERROR";
}

?>