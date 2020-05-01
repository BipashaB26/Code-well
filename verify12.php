<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	require("conn.php");
    $p=$_POST["cname11"];
	session_start();
	$_SESSION['scourse']=$p;
	$a26=$_SESSION['tmarks'];
	$a25=$_SESSION['bof'];	
		$q="select * from cutoff_marks where C_CODE='".$p."'";
		$r=mysql_query($q);
		while($row=mysql_fetch_array($r)){
		$id=$row[0];
		$s=$row[2];
		$t=$row[3];
		}
		$q1="select * from course where C_CODE='".$id."'";
		$r1=mysql_query($q1);
		while($row=mysql_fetch_array($r1)){
		$s1=$row[1];
		}
		
		if($s<$a26 && $t<$a25)
		{	
$fno=$_SESSION['sfrm'];
$name=$_SESSION['sname'];
$fname=$_SESSION['sfname'];
$dob=$_SESSION['sdob'];
$add=$_SESSION['sadd'];
$city=$_SESSION['scity'];
$state=$_SESSION['sstate'];
$caste=$_SESSION['scast'];
$reg=$_SESSION['sreg'];
$cont=$_SESSION['smob'];
$email=$_SESSION['semail'];
$sel="In progress";
$pay="pending";


			$q="insert into application values(".$fno.",'".$name."','".$fname."','".$dob."','".$add."','".$city."','".$state."','".$caste."','".$reg."','".$cont."','".$email."','".$sel."','".$pay."')";	
			$n=mysql_query($q);
		
					
$a2=$_SESSION['lschool'];
$a3=$_SESSION['sroll'];
$a4=$_SESSION['sboard'];
$a5=$_SESSION['spy'];
$a6=$_SESSION['sdiv'];
$a7=$_SESSION['ssub1'];
$a8=$_SESSION['sfmarks1'];
$a9=$_SESSION['ssmarks1'];
$a10=$_SESSION['ssub2'];
$a11=$_SESSION['sfmarks2'];
$a12=$_SESSION['ssmarks2'];
$a13=$_SESSION['ssub3'];
$a14=$_SESSION['sfmarks3'];
$a15=$_SESSION['ssmarks3'];
$a16=$_SESSION['ssub4'];
$a17=$_SESSION['sfmarks4'];
$a18=$_SESSION['ssmarks4'];
$a19=$_SESSION['ssub5'];
$a20=$_SESSION['sfmarks5'];
$a21=$_SESSION['ssmarks5'];
$a22=$_SESSION['ssub6'];
$a23=$_SESSION['sfmarks6'];
$a24=$_SESSION['ssmarks6'];
$a25=$_SESSION['bof'];
$a26=$_SESSION['tmarks'];

			$q1="insert into app_marks values(".$fno.",'".$a2."','".$a3."','".$a4."','".$a5."','".$a6."','".$a7."',".$a8.",".$a9.",'".$a10."',".$a11.",".$a12.",'".$a13."',".$a14.",".$a15.",'".$a16."',".$a17.",".$a18.",'".$a19."',".$a20.",".$a21.",'".$a22."',".$a23.",".$a24.",".$a25.",".$a26.")";
			$n1=mysql_query($q1);
			
			
			$fno=$_SESSION['sfrm'];
			$code=$_SESSION['scourse'];
			$cname=$_SESSION['course_name'];
			
			$q2="insert into combinations values(".$fno.",".$code.",'".$cname."')";
			$n2=mysql_query($q2);
			
			
			

			header("location:confirmation.php");
		}
		else {
			//echo "<h1>not eligible</h1>";
			header('location:not_eligible.php');
		}
		
		
?>


<body text="#FF0000" >
</body>
</html>