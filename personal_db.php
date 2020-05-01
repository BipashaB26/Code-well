<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
require("conn.php");
session_start();
$q1="select count(*)+1 from application";
$n1=mysql_query($q1);
while($row=mysql_fetch_array($n1))
{
	$fno=$row[0];
}

echo $fno;
$name=$_POST["cname"];
$fname=$_POST["fname"];
$dob=$_POST["dob"];
$add=$_POST["add"];
$city=$_POST["city"];
$state=$_POST["state"];
$caste=$_POST["cast"];
$reg=$_POST["religion"];
$cont=$_POST["contactno"];
$email=$_POST["email"];
$_SESSION['sfrm']=$fno;
$_SESSION['sname']=$name;
$_SESSION['sfname']=$fname;
$_SESSION['sdob']=$dob;
$_SESSION['sadd']=$add;
$_SESSION['scity']=$city;
$_SESSION['sstate']=$state;
$_SESSION['scast']=$caste;
$_SESSION['sreg']=$reg;
$_SESSION['smob']=$cont;
$_SESSION['semail']=$email;

//$email=$_SESSION['semail'];  // for taking out the data 
$sel="In progress";
$pay="pending";

mysql_close($con);
header("location:academics.php");
?>

<body>

</body>
</html>