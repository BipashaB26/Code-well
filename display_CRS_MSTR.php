<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Course | IGU | Admin</title>
</head>
<center>
<?php
require("conn.php");
$q="select * from course_master";
$result=mysql_query($q);
?>
<body>
<center>
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div align="center" style="height:500px; width:500px; margin-left:70px">
<fieldset >
<legend align="center" ><h2>COURSES</h2></legend>

<table WIDTH="300" cellpadding="2" cellspacing="1">
<tr>
<th>COURSE NAME</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
	$cn=$row[0];

?>
<tr align="center">
<td><?php echo $cn ?></td>
</tr>
<?php
}
?>
</table>

</fieldset>
</div>
</center>
<body bgcolor="#FFCCCC">

</body>
</html>