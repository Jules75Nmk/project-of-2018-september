<img src="RWANDA COAT.jpg"><br>
<strong>REPUBLIC OF RWANDA</strong></br>
<strong>WEST PROVINCE</strong></br>
<strong>KARONGI DISTRICT</strong></br>
<strong>RUBENGERA SECTOR</strong></br>
<strong>CYIMANA VILLAGE</strong></br>
<center><font size="25" face="Constantia">Employee's list</font></center>
</body></html>
<center>
<?php
$connection = mysql_connect("localhost", "root", "") or die("could not connect to localhost ".mysql_error());
$db = mysql_select_db("project") or die("database selection failed ".mysql_error());
 $sql = mysql_query("select * from employee ");
 if(mysql_num_rows($sql)<=0){include("norecord.html");include("reportclient.html");}
else
	if($sql)
	{
 echo"<br>".$date;
  echo"<br>".$HOUR;
echo "<table border='1' align=center";
echo "<tr><th>clientid</th><th>firstname</th><th>lastname</th><th>sex</th><th> 
address</th><th>phone</th></th></tr>";
while ($row= mysql_fetch_array($sql)){
	 echo "<tr><td>"; 
    echo $row['idnumber'];
	echo "</td><td>";
    echo $row['firstname'];
	echo "</td><td>";
    echo $row['lastname'];
	echo "</td><td>";
    echo $row['identity'];
	echo "</td><td>";
    echo $row['address'];
	echo "</td><td>";
    echo $row['phone'];
	echo "</td></tr>";
	echo $row['email '];
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