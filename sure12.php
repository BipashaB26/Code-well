<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

$log=$_POST['login'];
if(isset($log))
{
	$dob=$_POST['dob'];
	$ccode=$_POST['ccode'];
	$form_no=$_POST['form_no'];	
}

$sql="select * from application";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
    $fno=$row[0];
	if($fno==$form_no)
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
	echo "Found";
}
else
{
	echo "Not found";
}



?>





<body>
</body>
</html>