<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>

<?php
require("conn.php");
 $code=$_POST["ccode"];
    $cat=$_POST["cname"];
	$ctot=$_POST["com1"];
	$cbof=$_POST["com2"];
	
	
	
$sql="update cutoff_marks set CATEGORY='".$cat."',SUB_MARKS='".$ctot."',BEST_OF_FOUR='".$cbof."' where C_CODE='".$code."'";
$r=mysql_query($sql);
if(!$r)
{
	
	echo"Record Updation Failed:-";
}
else
{
	echo"Record Successfully Updated:-";
	header("Refresh:4;URL=adminhome.php");
}
mysql_close($con);	
?></center>
<body bgcolor="#CCCCCC" text="#FF0000">

</body>
</html>