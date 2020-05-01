<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
/*$fno=$_SESSION['sfrm'];
    $cname=$_SESSION['sname'];
	$fname=$_SESSION['sfname'];
    $dob=$_SESSION["sdob"];
	$add=$_SESSION["sadd"];
    $city=$_SESSION["scity"];
	$state=$_SESSION["sstate"];
    $caste=$_SESSION["scast"];
	$religion=$_SESSION["sreg"];
    $contactno=$_SESSION['smob'];
	$email=$_SESSION["semail"];
	
	
	$last_school=$_SESSION['lschool'];
    $roll=$_SESSION["sroll"];
	$board=$_SESSION["sboard"];
    $py=$_SESSION["spy"];
	$division=$_SESSION["sdiv"];
    $sub1=$_SESSION["ssub1"];
	$fmarks1=$_SESSION["sfmarks1"];
    $smarks1=$_SESSION["ssmarks1"];
	$sub2=$_SESSION["ssub2"];
	$fmarks2=$_SESSION["sfmarks2"];
    $smarks2=$_SESSION["ssmarks2"];
	$sub3=$_SESSION["ssub3"];
	$fmarks3=$_SESSION["sfmarks3"];
    $smarks3=$_SESSION["ssmarks3"];
	$sub4=$_SESSION["ssub4"];
	$fmarks4=$_SESSION["sfmarks4"];
    $smarks4=$_SESSION["ssmarks4"];
	$sub5=$_SESSION["ssub5"];
	$fmarks5=$_SESSION["sfmarks5"];
    $smarks5=$_SESSION["ssmarks5"];
	$sub6=$_SESSION["ssub6"];
	$fmarks6=$_SESSION["sfmarks6"];
    $smarks6=$_SESSION["ssmarks6"];
	$sum=$_SESSION["tmarks"];
	$best=$_SESSION["bof"];*/
    
     $fn=$_SESSION['frm_n'];

    
	
	
	
	
	
	
	
	
	
	
	$course=$_SESSION['course_name'];
	$ccode=$_SESSION['scourse'];
	
	
	$amt=$_SESSION['sprice1'];
	
	
	$sql="select * from course where C_CODE='".$ccode."' ";
    $res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
	$sub1=$row[0];
	$sub2=$row[1];
	$sub3=$row[2];
	$sub4=$row[3];

	
	$sub5=$row[4];
	$sub6=$row[5];
	$sub7=$row[6];
	$sub8=$row[7];
	
}

    
<body>
</body>
</html>