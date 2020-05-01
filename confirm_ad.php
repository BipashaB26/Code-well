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

$a2=$_POST['last_school'];
$a3=$_POST['roll'];
$a4=$_POST['board'];
$a5=$_POST['py'];
$a6=$_POST['division'];
$a7=$_POST['sub1'];
$a8=$_POST['fmarks1'];
$a9=$_POST['smarks1'];
$a10=$_POST['sub2'];
$a11=$_POST['fmarks2'];
$a12=$_POST['smarks2'];
$a13=$_POST['sub3'];
$a14=$_POST['fmarks3'];
$a15=$_POST['smarks3'];
$a16=$_POST['sub4'];
$a17=$_POST['fmarks4'];
$a18=$_POST['smarks4'];
$a19=$_POST['sub5'];
$a20=$_POST['fmarks5'];
$a21=$_POST['smarks5'];
$a22=$_POST['sub6'];
$a23=$_POST['fmarks6'];
$a24=$_POST['smarks6'];


$arr=array($a9,$a12,$a15,$a18,$a21,$a24);

rsort($arr);

$a25=$arr[0]+$arr[1]+$arr[2]+$arr[3];

$a26=$a9+$a12+$a15+$a18+$a21+$a24;

$_SESSION['bof']=$a25;
$_SESSION['tmarks']=$a26;
$arr=array($a9,$a12,$a15,$a18,$a21,$a24);

rsort($arr);

$a25=$arr[0]+$arr[1]+$arr[2]+$arr[3];

$a26=$a9+$a12+$a15+$a18+$a21+$a24;

    $_SESSION['lschool']=$a2;
     $_SESSION["sroll"]=$a3;
	 $_SESSION["sboard"]=$a4;
     $_SESSION["spy"]=$a5;
	 $_SESSION["sdiv"]=$a6;
     $_SESSION["ssub1"]=$a7;
	 $_SESSION["sfmarks1"]=$a8;
     $_SESSION["ssmarks1"]=$a9;
	 $_SESSION["ssub2"]=$a10;
	 $_SESSION["sfmarks2"]=$a11;
     $_SESSION["ssmarks2"]=$a12;
	 $_SESSION["ssub3"]=$a13;
	 $_SESSION["sfmarks3"]=$a14;
     $_SESSION["ssmarks3"]=$a15;
	 $_SESSION["ssub4"]=$a16;
	 $_SESSION["sfmarks4"]=$a17;
    $_SESSION["ssmarks4"]= $a18;
	 $_SESSION["ssub5"]=$a19;
	 $_SESSION["sfmarks5"]=$a20;
    $_SESSION["ssmarks5"]= $a21;
	 $_SESSION["ssub6"]=$a22;
	 $_SESSION["sfmarks6"]=$a23;
     $_SESSION["ssmarks6"]=$a24;
	
	$_SESSION["bof"]=$a25;
	$_SESSION["tmarks"]=$a26;
	
	   


$q="update app_marks set LAST_SCHOOL='".$a2."', ROLL_NO='".$a3."', BOARD='".$a4."', PASSING_YEAR=".$a5.", DIVISION='".$a6."', SUBJECT1='".$a7."', FULL_MARKS1=".$a8.", SUBJECT1_MARKS=".$a9.", SUBJECT2='".$a10."', FULL_MARKS2=".$a11.", SUBJECT2_MARKS=".$a12.", SUBJECT3='".$a13."', FULL_MARKS3=".$a14.", SUBJECT3_MARKS=".$a15.", SUBJECT4='".$a16."', FULL_MARKS4=".$a17.", SUBJECT4_MARKS=".$a18.", SUBJECT5='".$a19."', FULL_MARKS5=".$a20.", SUBJECT5_MARKS=".$a21.", SUBJECT6='".$a22."', FULL_MARKS6=".$a23.", SUBJECT6_MARKS=".$a24.", BEST_OF_FOUR=".$a25.", TOTAL_MARKS=".$a26." where FORM_NO='".$fn."' " ;
	
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

?>
<body>
<form>
<input type="submit" name="back" value="back" formaction="edit.php">
</form>
</body>
</html>