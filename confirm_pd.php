<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

require("conn.php");

session_start();

$fn=$_SESSION['frm_n'];

$name=$_POST["cname"];
$fname=$_POST["fname"];
$dob=$_POST["dob"];
$add=$_POST["add"];
$city=$_POST["city"];
$state=$_POST["state"];
$caste=$_POST["caste"];
$reg=$_POST["religion"];
$cont=$_POST["contactno"];
$email=$_POST["email"];

       $_SESSION['sfrm']=$fn;
       $_SESSION['sname']=$name;
	   $_SESSION['sfname']=$fname;
        $_SESSION["sdob"]=$dob;
	     $_SESSION["sadd"]=$add;
        $_SESSION["scity"]=$city;
	   $_SESSION["sstate"]=$state;
       $_SESSION["scast"]=$caste;
    $_SESSION["sreg"]=$reg;
    $_SESSION['smob']=$cont;
	   $_SESSION["semail"]=$email;
	   

$q="update application set NAME='".$name."', FATHER_NAME='".$fname."', DOB='".$dob."', ADDRESS='".$add."', CITY='".$city."', STATE='".$state."', CAST='".$caste."', RELIGION='".$reg."', CONTACT_NO='".$cont."', EMAILID='".$email."' where FORM_NO='".$fn."' " ;
	
			$n=mysql_query($q);
			
if(!$n)
{
	die(mysql_error());
	echo "Record updatation failed";
}
else
{
	echo "Record updated successfully";
}

mysql_close($con);

?>
<body>
<form>
<input type="submit" name="back" value="back" formaction="edit.php">
</form>
</body>
</html>