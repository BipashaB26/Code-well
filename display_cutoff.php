<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Cut-Offs| IGU | Admin</title>
</head>
<style type="text/css">
#admsn1{
	width:100%;
	margin-top:200px;
	height:auto;
	border:thick;
	border-color:#336;	
	
}
</style>
<br />
<br />
<br />
<br />
<br />
<br />
<div align="center" style="height:500px; width:500px; margin-left:400px">
<fieldset >
<legend align="center" ><h1>Cut Off Data</h1></legend>
<?php
require("conn.php");
$q="select * from cutoff_marks";
$res=mysql_query($q);
?>

<table width="500px" height="90%">
<tr> <th> C_CODE </th><th>CATEGORY</th><th>SUB_MARKS</th><th>BEST OF FOUR</th></tr>
<?php
while($row=mysql_fetch_array($res))
{
	$code=$row[0];
$cat=$row[1];
$tot=$row[2];
$best=$row[3];

?>
<tr><td align="center"><?php echo $code ?></td>
<td align="center"><?php echo $cat ?></td>
<td align="center"><?php echo $tot ?></td>
<td align="center"><?php echo $best ?></td>
</tr>
<?php } ?>
</table>

<h3 align="center"></h3>
<?php
mysql_close($con); ?>
</fieldset>
</div>
<body bgcolor="#FFFDC8">
</body>
</html>