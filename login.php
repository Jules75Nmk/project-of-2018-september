<?php
$link= mysql_connect("localhost","root","");
mysql_select_db("project",$link);
$a=$_POST['User-email'];
$b=$_POST['Password'];
if($submit);
{
$link=mysql_query("insert into new message values('$a',b')");
if($link)
	{
echo"record has been saved!";
	}
	else{
echo"record not saved";
}
}
?>