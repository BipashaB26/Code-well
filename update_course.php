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
    $cname=$_POST["cname"];
	$com1=$_POST["com1"];
	$com2=$_POST["com2"];
	$com3=$_POST["com3"];
	$fee=$_POST["fee"];
	$seat=$_POST["seat"];
	
	
$sql="update course set C_NAME='".$cname."',C_SUB1='".$com1."',C_SUB2='".$com2."',C_SUB3='".$com3."',FEES=".$fee.",NO_OF_SEATS=".$seat." where C_CODE='".$code."'";
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