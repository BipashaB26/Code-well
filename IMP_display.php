<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Important Dates</title>
<style>
.button {
	background-color:#FF0004;	
	border:thick;
	border-color:#F8FF00;
	color:black;
	padding:3px 10px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:16px; 
	margin:auto;
   }
</style>
</head>
<center>
<?php
require("conn.php");
$q="select * from imp_date";
$result=mysql_query($q);
?>
<body bgcolor="#B1FF87">
<br /><br />
<h1> IMPORTANT DATES </h1>
<br /><br /><br />
<table border="4" bgcolor="#CCCCCC" cellpadding="4" cellspacing="3">
<tr>
<th>ID</th>
<th>ACTIVITY</th>
<th>DATE</th>
<th>ACT DATE</th>
<th>STATUS</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
	$id=$row[0];
    $act=$row[1];
    $date=$row[2];
    $actd=$row[3];
	$stat=$row[4];

?>
<tr>
<td><?php echo $id ?></td>
<td><?php echo $act?></td>
<td><?php echo $date ?></td>
<td><?php echo $actd?></td>
<td><?php echo $stat?></td>
</tr>
<?php
}
?>
</table>
<?php
mysql_close($con);
?>


<body>

<form><pre>

<p align="center"><a href="start12.php" class="button"><font size="+2" color="#FFFFFF" face="brush-script-std"><strong><em>Back</em></strong></font></a></p>

</pre></form>

</body>
</center>
</html>