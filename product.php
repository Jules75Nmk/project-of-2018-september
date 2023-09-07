<body bgcolor="white"><center><font size="45" color="blue"><br><br><br><br><br>
<?php
$link= mysql_connect("localhost","root","");
mysql_select_db("project",$link);
$x=$_POST['Id'];
$xa=$_POST['Name'];
$ss=$_POST['Quantity'];
$xc=$_POST['Price'];
$xd=$_POST['Paidmoney'];
$xd=$ss*$xc;
$xe=$_POST['clientid'];
$xf=$_POST['Date'];
if($submit);
{
$link=mysql_query("insert into product values('$x','$xa','$ss','$xc','$xd','$xe','$xf')");
if($link)
	{
echo"record has been saved! <br>";
echo "thanks for adding Product";
	}
	else{
echo"record not saved";
}
}
?>
</font>
<br><a href="product.html">Back to add new product</a><br><br><br><br></center>
</body>