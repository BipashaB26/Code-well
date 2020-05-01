<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("conn.php");
session_start();
$e=$_SESSION['scourse'];
$a25=$_SESSION['bof'];
$a26=$_SESSION['tmarks'];

$q="select * from cutoff_marks where C_CODE='".$e."'";
		$r=mysql_query($q);
		while($row=mysql_fetch_array($r)){
		$bof=$row[3];
		}
		
		$q1="select * from cutoff_marks where C_CODE='".$e."'";
		$r1=mysql_query($q1);
		while($row=mysql_fetch_array($r1)){
		$tot=$row[2];
		}
?>
<body bgcolor="#FFBBBC">

<form name="personal_d" method="post" action=" "><pre>





<p align="center"><font size="+2" color="#FF0004"><strong>Sorry you are <mark>not eligible</mark> for this institute,
 as your marks do not meet the required eligibility criteria. 
 
 
 
<font color="#FF0004">Your Best of four subject marks:                  <input type="text" name="fno" value="<?php echo $a25; ?>" readonly></font>


<font color="#FF0004">Eligibilty criteria(best of four):           <input type="text" name="cn" value="<?php echo $bof; ?>"readonly></font>  


<font color="#FF0004">Your Total marks:                  <input type="text" name="fno" value="<?php echo $a26; ?>" readonly></font>


<font color="#FF0004">Eligibilty criteria(total):                <input type="text" name="fno" value="<?php echo $tot; ?>" readonly></font>



<input type="submit" name="back" value="Back to home page" formaction="stat12.php">

</strong></font></p></pre></form>


</body>
</html>