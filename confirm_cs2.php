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

$new_course_code=$_POST['$code1'];

$_SESSION['ccode11']=$new_course_code;

$new_course_name=$_SESSION['csn22'];


$q3="update combinations set C_CODE=".$new_course_code.", C_NAME='".$new_course_name."' where FORM_NO=".$fn." " ;
			$n3=mysql_query($q3);

if(!$n3)
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
</body>
</html>