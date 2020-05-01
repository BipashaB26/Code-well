<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>

<?php
require("conn.php");
$code=$_POST["code"];
$cat=$_POST["cat"];
$tot=$_POST["tot"];
$best=$_POST["best"];


$q="insert into cutoff_marks values('".$code."','".$cat."',".$tot.",".$best.")";
$n=mysql_query($q);
if(!$n){
alert ( "Record insertion failed");
}
else{
	echo "Record insertion sucessful";
	header("Refresh:4;URL=adminhome.php");
}
mysql_close($con);
?>
</center>
<body bgcolor="#CCCCCC" text="#FF0000">
</body>
</html>