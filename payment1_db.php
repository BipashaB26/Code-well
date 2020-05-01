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

if(isset($_POST['proceed221']))
{
	$_SESSION["paytype"]=$_POST["pt"];
    $_SESSION["paybank"]=$_POST["bank"];
}
header('location:payment21.php');
?>

<body>
</body>
</html>