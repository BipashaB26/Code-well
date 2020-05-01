<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Combinations | IGU | Admin</title>
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
<legend align="center" ><h1>Course Details</h1></legend>
<?php
require("conn.php");
$q="select * from course";
$res=mysql_query($q);
?>

<table width="500px" height="90%" cellpadding="5px" cellspacing="5px">
<tr> <th> COURSE CODE </th><th>COURSE NAME</th><th>C_SUB1</th><th>C_SUB2</th><th>C_SUB3</th><th>FEE</th><th>NO OF SEAT</th><th>STATUS</th></tr>
<?php
while($row=mysql_fetch_array($res))
{
	$code=$row[0];
$cid=$row[1];
$sub1=$row[2];
$sub2=$row[3];
$sub3=$row[4];
$fee=$row[5];
$seat=$row[6];
$status=$row[7];

?>
<tr><td><?php echo $code ?></td>
<td><?php echo $cid ?></td>
<td><?php echo $sub1 ?></td>
<td><?php echo $sub2 ?></td>
<td><?php echo $sub3 ?></td>
<td><?php echo $fee ?></td>
<td><?php echo $seat ?></td>
<td><?php echo $status ?></td></tr>
<?php } ?>
</table>
<?php
mysql_close($con); ?>
</fieldset>
</div>
<body bgcolor="#BEFF84">
</body>
</html>