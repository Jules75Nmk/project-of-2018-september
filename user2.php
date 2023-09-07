<?php
//session_start();
//if(empty($username) ||empty($password))
{
//echo"please insert full";
///include('home.html');
//exit();
//}
//else{
$link=mysql_connect("localhost","root","","mode");
  mysql_select_db("project",$link);
  	if(!$link){echo" error ".mysql_error();}
	$username=$_POST['username'];
	$password=$_POST['password'];
	
$result=mysql_query("Select * from user WHERE username='$username' AND password='$password'");
	if(!$result){echo "error".mysql_error();}
	while($rows=mysql_fetch_array($result))
		{
		session_start();
$_SESSION['username']=$rows['username'];
$_SESSION['password']=$rows['password'];
	}

if( $_SESSION['username']=="User")
{
	Header("location:navigation.html");
}
else
{
include("wrongusernamemessage.html");
include("user.html");
}
}
?>