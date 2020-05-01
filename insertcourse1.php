<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>
<?php
require("conn.php");
    $cn=$_POST["cname"];

 $q="insert into course_master values('".$cn."')";
 $r=mysql_query($q);
 if(!$r)
 {
	 echo"<h1>COURSE ALREADY EXISTS</h1>";
 }
 else
 {
	 echo"<h1>RECORD SUCCESSFULLY INSERTED:-</h1>";
	 header("Refresh:4;URL=adminhome.php");
 }
mysql_close($con);
?>
</center>
<body bgcolor="#FFFFCC" text="#FF0000">
</body>
</html>