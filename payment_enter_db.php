<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

require("connection.php");

if(isset($_POST['proceed1']))
{
$paytype=$_POST["pt"];	
$bank=$_POST["bank"];
}

$q1="insert into payment values('".$paytype."','".$bank."')";

$r1=mysql_query($q1);

if(!$r1)
{
	echo "Could not connect"."<br>";
}
else
{
	//echo "inserted successfully";
	header('location:payment2.php');
}
mysql_close($con);
?>

<body>
</body>
</html>