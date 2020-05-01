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

require("conn.php");

$bank=$_SESSION["paybank"];
$cardno=$_SESSION["cardno"];
$accn=$_SESSION["accn"];
$cardty=$_SESSION["cardty"];
$edate=$_SESSION["edate"];
$cvvno=$_SESSION["cvvno"];
$pin=$_SESSION["pin"];

$sql="select * from card_details";
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
{
	$bank1=$row[0];
    $cardno1=$row[1];
    $accn1=$row[2];
    $cardty1=$row[3];
    $edate1=$row[4];
    $cvvno1=$row[5];
    $pin1=$row[6];
	$balance1=$row[7];
	
	if($bank1==$bank && $cardno1==$cardno && $accn1==$accn && $cardty1==$cardty && $edate1==$edate && $cvvno1==$cvvno && $pin1==$pin)
	{
		$c=1;
		break;
	}
	else
	{
		$c=0;
	}
}

if($c==1)
{
	header('location:check4_2.php');
}
else
{
	echo "Account not found"."<br>";
}

?>
<body>
</body>
</html>