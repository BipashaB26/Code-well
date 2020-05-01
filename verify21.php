<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

session_start();
require("conn.php");
$dob=$_POST['dob'];
$formno=$_POST['formno'];


//echo $dob."<br>";
//echo $formno;

$sql="select FORM_NO from application";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
	$fn=$row[0];
	
	if($fn==$formno)
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
	$sql="select DOB from application";
    $res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
    {
	    $fn=$row[0];
	
	    if($fn==$dob)
	    {
		    $d=1;
		    break;
	    }
	    else
	    {
		    $d=0;
	    }
    }
    if($d==1)
	{
		header('location:welcome.php');
		$_SESSION['frm_n']=$formno;
	}
	else
	{
		echo "The D.O.B does not match"."<br>";
		echo "Please enter correct D.O.B";
	}

}
else
{
	echo "Form number does not exist";
	//header("Refresh:3;URL=login.php");
	
}




?>
<body>
</body>
</html>