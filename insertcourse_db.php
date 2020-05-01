<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>
<?php
require("conn.php");
$ccode=$_POST["cid"];
$cname=$_POST["cname"];
$sub1=$_POST["com1"];
$sub2=$_POST["com2"];
$sub3=$_POST["com3"];
$fee=$_POST["fees"];
$seat=$_POST["seats"];
$status="ACTIVE";

$q="insert into course values('".$ccode."','".$cname."','".$sub1."','".$sub2."','".$sub3."',".$fee.",".$seat.",'".$status."')";
$n=mysql_query($q);
if(!$n){
echo "<h1>Record insertion failed</h1>";
}
else{
	echo "<h1>Record insertion sucessful</h1>";
	header("Refresh:4;URL=adminhome.php");
}
mysql_close($con);
?>
</center> 
<body bgcolor="#CCCCCC" text="#FF0000">
</body>
</html>