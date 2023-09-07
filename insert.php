<!DOCTYPE html>
<head>
<body bgcolor="white"><br><br><br><center><font color="blue" size="50" style="elephant"><br><br><br>
<?php
$link= mysql_connect("localhost","root","");
mysql_select_db("project",$link);
$a=$_POST['clientid'];
$b=$_POST['firstname'];
$c=$_POST['lastname'];
$d=$_POST['sex'];
$e=$_POST['address'];
$f=$_POST['phone'];
if($submit);
{
$link=mysql_query("insert into client values('$a','$b','$c','$d','$e','$f')");
if($link)
	{
echo"record has been saved!<br>";
echo "Client is surelly registered and saved in data base!<br>";
echo "Thank you so much!!! ";
	}
	else{
echo"record not saved";
}
}
?>
</font>
<br><br><br><br><br><br>
<a href="client.html" color="red">BACK</a>
</center>
</head>
</body>
</html>