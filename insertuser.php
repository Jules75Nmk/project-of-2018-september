<body bgcolor="yellow"><center><font color="blue" size="45"></font>

<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("mobisol",$connection)or die('database not found'.mysql_error());
$x=$_POST['ID'];
$y=$_POST['USERTYPE'];
$z=$_POST['NAME'];
$k=$_POST['PASSWORD'];
if($_POST['save']);
{
$save=mysql_query("insert into user values('$x','$y','$z','$k)");
}
if($save)
{
	echo"record has been saved!!";
}
else
{
	echo"record not saved try again";
}
?>
</center>
</body>