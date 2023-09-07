<?php
$link= mysql_connect("localhost","root","");
mysql_select_db("project",$link);
$a=$_POST['Username'];
$b=$_POST['password'];
$c=$_POST['password1'];
$d=$_POST['Email'];
if($submit);
{
$link=mysql_query("insert into signin values('$a','$b','$c','$d')");
if($link)
	{
echo"record has been saved!";
	}
	else{
echo"record not saved";
}
}
?>