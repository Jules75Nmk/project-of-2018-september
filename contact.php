<?php
$link= mysql_connect("localhost","root","");
mysql_select_db("project",$link);
$a=$_POST['name'];
$b=$_POST['e-mail'];
$c=$_POST['message'];
if($button);
{
$link=mysql_query("insert into new message values('$a','$b','$c')");
if($link)
	{
echo"record has been saved!";
	}
	else{
echo"record not saved";
}
}
?>