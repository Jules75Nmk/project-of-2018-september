<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("project",$connection)or die('database not found'.mysql_error());
$z=$_POST['username'];
$k=$_POST['password'];
if($_POST['save']);
{
$save=mysql_query("insert into  user values('$z','$k')");
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

