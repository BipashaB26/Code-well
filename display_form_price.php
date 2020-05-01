<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Form Price| IGU | Admin</title>
</head>
<center>
<br />
<br />
<br />
<br />
<br />
<br />
<div align="center" style="height:500px; width:500px; margin-left:30px">
<fieldset >
<legend align="center" ><h1>Course Form Price</h1></legend>
<?php
require("conn.php");
$q="select * from form_price";
$res=mysql_query($q);
?>

<table border="0">
<tr> <th> COURSE CODE </th><td></td><th>PRICE</th></tr>
<?php
while($row=mysql_fetch_array($res))
{
	$code=$row[0];
$price=$row[1];


?>
<tr><td><center><?php echo $code ?></center></td><td> </td>
<td ><center><?php echo $price ?></center></td>
</tr>
<?php } ?>
</table>
<?php 
mysql_close($con); ?>
</center>
</fieldset>
</div>
<body bgcolor="#99FFCC">

<form><pre>



</pre></form>
</body>
</html>