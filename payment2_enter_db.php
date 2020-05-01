<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

require("connection.php");

if(isset($_POST['proceed2']))
{
$cardno=$_POST["cardno"];	
$acch=$_POST["accn"];
$cardty=$_POST["cardty"];
$edate=$_POST["edate"];	
$cvv=$_POST["cvvno"];
$pin=$_POST["pin"];

}

$q1="insert into card_details values('".$cardno."','".$acch."','".$cardty."','".$edate."',".$cvv.",".$pin.")";

$r1=mysql_query($q1);

if(!$r1)
{
	echo "Could not connect"."<br>";
}
else
{
	//echo "inserted successfully";
	header('location:wait_transaction.php');
}
mysql_close($con);
?>

<body>
</body>
</html>