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

$sql1="select * from application where FORM_NO=".$fn." " ;
$res1=mysql_query($sql1);

while($row1=mysql_fetch_array($res1))
{
	$cname=$row1[1];
$fname=$row1[2];
$dob=$row1[3];
$add=$row1[4];
$city=$row1[5];
$state=$row1[6];
$caste=$row1[7];
$religion=$row1[8];
$contactno=$row1[9];
$email=$row1[10];

}

$_SESSION['$cname']=$cname;
$_SESSION['$fname']=$fname;
$_SESSION['$dob']=$dob;
$_SESSION['$add']=$add;
$_SESSION['$city']=$city;
$_SESSION['$state']=$state;
$_SESSION['$caste']=$caste;
$_SESSION['$religion']=$religion;
$_SESSION['$contactno']=$contactno;
$_SESSION['$email']=$email;


$sql2="select * from app_marks where FORM_NO=".$fn." " ;
$res2=mysql_query($sql2);

while($row2=mysql_fetch_array($res2))
{
	$last_school=$row2[1];
$roll=$row2[2];
$board=$row2[3];
$py=$row2[4];	
$division=$row2[5];	

$sub1=$row2[6];
$fmarks1=$row2[7];
$smarks1=$row2[8];

$sub2=$row2[9];
$fmarks2=$row2[10];
$smarks2=$row2[11];

$sub3=$row2[12];
$fmarks3=$row2[13];
$smarks3=$row2[14];

$sub4=$row2[15];
$fmarks4=$row2[16];
$smarks4=$row2[17];

$sub5=$row2[18];
$fmarks5=$row2[19];
$smarks5=$row2[20];

$sub6=$row2[21];
$fmarks6=$row2[22];
$smarks6=$row2[23];

$sum=$row2[24];

$best=$row2[25];

}

$_SESSION['lschool']=$last_school;
$_SESSION['roll']=$roll;
$_SESSION['board']=$board;
$_SESSION['py']=$py;
$_SESSION['div']=$division;

$_SESSION['sub1']=$sub1;
$_SESSION['fmarks1']=$fmarks1;
$_SESSION['smarks1']=$smarks1;

$_SESSION['sub2']=$sub2;
$_SESSION['fmarks2']=$fmarks2;
$_SESSION['smarks2']=$smarks2;

$_SESSION['sub3']=$sub3;
$_SESSION['fmarks3']=$fmarks3;
$_SESSION['smarks3']=$smarks3;

$_SESSION['sub4']=$sub4;
$_SESSION['fmarks4']=$fmarks4;
$_SESSION['smarks4']=$smarks4;

$_SESSION['sub5']=$sub5;
$_SESSION['fmarks5']=$fmarks5;
$_SESSION['smarks5']=$smarks5;

$_SESSION['sub6']=$sub6;
$_SESSION['fmarks6']=$fmarks6;
$_SESSION['smarks6']=$smarks6;

$_SESSION['tmkrs']=$sum;
$_SESSION['bmkrs']=$best;

$sql3="select * from combinations where FORM_NO=".$fn." " ;
$res3=mysql_query($sql3);

while($row3=mysql_fetch_array($res3))
{
	$ccode=$row3[1];
	$course=$row3[2];
}

$_SESSION['$ccode1']=$ccode;
$_SESSION['$course1']=$course;

$sql4="select * from course where C_CODE=".$ccode." " ;
$res4=mysql_query($sql4);

while($row4=mysql_fetch_array($res4))
{
	$sub11=$row4[2];
	$sub21=$row4[3];
	$sub31=$row4[4];
}

$_SESSION['$sub11']=$sub11;
$_SESSION['$sub21']=$sub21;
$_SESSION['$sub31']=$sub31;

$sql5="select * from form_price where C_CODE=".$ccode." " ;
$res5=mysql_query($sql5);
while($row5=mysql_fetch_array($res5))
{
	$amt=$row5[1];
}

$_SESSION['$amt1']=$amt;


header('location:final_form2.php');




?>
<body>
</body>
</html>