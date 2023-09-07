<img src="RWANDA COAT.jpg"><br>
<strong>REPUBLIC OF RWANDA</strong></br>
<strong>WEST PROVINCE</strong></br>
<strong>KARONGI DISTRICT</strong></br>
<strong>RUBENGERA SECTOR</strong></br>
<strong>CYIMANA VILLAGE</strong></br>
<center> <font size="35" face="Imprint MT Shadow">
LIST of Sold Product</font></center>
</body></html>
<center>
<?php
$connection = mysql_connect("localhost", "root", "") or die("could not connect to localhost ".mysql_error());
$db = mysql_select_db("project") or die("database selection failed ".mysql_error());
 $sql = mysql_query("select * from product ");
 if(mysql_num_rows($sql)<=0){include("norecord.html");include("reportproduct.html");}
else
	if($sql)
	{
 echo"<br>".$date;
  echo"<br>".$HOUR;
echo "<table border='1' align=center";
echo "<tr><th>Id</th><th>Name</th><th>Quantity</th><th>Price</th><th> 
Paidmoney</th><th>clientid</th><th>Date</th></th></tr>";
while ($row= mysql_fetch_array($sql)){
	 echo "<tr><td>"; 
    echo $row['Id'];
	echo "</td><td>";
    echo $row['Name'];
	echo "</td><td>";
    echo $row['Quantity'];
	echo "</td><td>";
    echo $row['Price'];
	echo "</td><td>";
    echo $row['Paidmoney'];
	echo "</td><td>";
 echo $row['clientid'];
  echo "</td><td>";
echo $row['Date'];
	echo "</td></tr>";
 }
	}
 echo"</table>";
?>
</script>
 <div id="footer_banner">
 </div> 
<font size="3"><b>.</b></font>
</div>
</div>
 </body>
<div id="footer" align="center">
<font size="3" color="black">
<h2 align="center">
Done at Rubengera, Intrant Shop on....../......./........<br>
Employee's names:.............................<br>
Stamp and signature..................</u></h2>

</i>
<?php
echo"<center><a href=\"javascript:window.print();\">Print This Page</a></center>";
?>
<br>
</div>
<center><a href="navigation.html">BACK TO HOME PAGE</a><br></center>
</html>
</center>