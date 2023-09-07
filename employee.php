<center><br><br><br><br><br>
<body bgcolor="white"><font size="45">
<?php
$link= mysql_connect("localhost","root","");
mysql_select_db("project",$link);
$h=$_POST['idnumber'];
$q=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['identity'];
$d=$_POST['address'];
$e=$_POST['phone'];
$x=$_POST['email'];
if($submit);
{
$link=mysql_query("insert into EMPLOYEE values('h','$q','$b','$c','$d','$e','$x')");
if($link)
	{
echo"Employee has been saved! <br>";
echo "thanks";
	}
	else{
echo"record not saved <br> <br>";
echo "please re-write again and then submit <br><br>";
echo "thanks!";
}
}
?><br>
<br>
<br>
<a href="employee.html">Back</a>
</center>
</font>
</body>