<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
if (isset($_POST['next3']))
{
	$cname=$_POST['coursename'];
	$connect= mysqli_connect("localhost","root","","course_master");
	$query= "SELECT 'C_SUB1','C_SUB2','C_SUB3' FROM 'course' WHERE 'C_NAME'=$cname LIMIT 1";
	$result=mysqli_query($connect,$query);
	while($row = mysqli_fetch_array($result))
	{
		$sub1=$row['C_SUB1'];
		$sub2=$row['C_SUB2'];
		$sub3=$row['C_SUB3'];
	}
     mysqli_free_result($result);
     mysqli_close($connect);	
}
else
{
		$sub1="";
		$sub2="";
		$sub3="";	
}
//mysqli_free_result($result);
//mysqli_close($connect);	
?>

<body>
</body>
</html>