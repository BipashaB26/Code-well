<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	require("conn.php");
    //$p=$_POST["cname11"];
	session_start();
$fn=$_SESSION['frm_n'];
	//$fno=$_SESSION['sfrm'];
$name=$_SESSION['name'];
$fname=$_SESSION['fname'];
$dob=$_SESSION['dob'];
$add=$_SESSION['add'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];
$caste=$_SESSION['cast'];
$reg=$_SESSION['reg'];
$cont=$_SESSION['mob'];
$email=$_SESSION['email'];
$sel="In progress";
$pay="pending";


			$q="update application set NAME='".$name."',FATHER_NAME='".$fname."',DOB='".$dob."',ADDRESS='".$add."',CITY='".$city."',STATE='".$state."',CAST='".$caste."',RELIGION='".$reg."',CONTACT_NO=".$cont.",EMAILID='".$email."',SEL_STATUS='".$sel."',PAYMENT_STATUS='".$pay."' where FORM_NO=".$fn." ";
			
			$n=mysql_query($q);
			
			header('location:sv1.php');
			
?>
	
	
<body>
</body>
</html>