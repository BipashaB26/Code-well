<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("Could not connect:".mysql_error());
}
mysql_select_db("project",$con);
?>

<body>
</body>
</html>