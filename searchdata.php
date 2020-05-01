<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	require("conn.php");
	//session_start();
	
$a=$_POST["cn"];
//echo $a;
$q3="select * from course where C_CODE='".$a."' ";
$res2=mysql_query($q3);
//echo die(mysql_error());
?>
<body bgcolor="#22FFD9">
<form name="combinations" method="post" action="update_course.php"><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">COURSE DETAILS:</font>



                 

<?php

//echo "sucess";
while($row=mysql_fetch_array($res2)){
			$code=$row[0];
			$cname=$row[1];
		$com1=$row[2];
	     $com2=$row[3];
		 $com3=$row[4];
		 $fee=$row[5];
		 $stat=$row[6];
		 $stat1=$row[7];
		 
?>
<?php
}
?>
<font color="#FF0004"><sup>*</sup></font> course code:    <input type="text" name="ccode" value="<?php echo $code   ?>" readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> course Name:    <input type="text" name="cname" value="<?php echo $cname   ?>" onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> course combination 1:    <input type="text" name="com1" value="<?php echo $com1   ?>" onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> course combination 2:    <input type="text" name="com2" value="<?php echo $com2   ?>" onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> course combination 3:    <input type="text" name="com3" value="<?php echo $com3   ?>" onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> Course Fees:   <input type="text" name="fee"  value="<?php echo $fee ?>" onfocus="myFunction(x)"><br>


<font color="#FF0004"><sup>*</sup></font> No Of Seats :   <input type="text" name="seat" value="<?php echo $stat ?>" onfocus="myFunction(x)"><br>


<font color="#FF0004"><sup>*</sup></font>Status :   <input type="text" name="stat" value="<?php echo $stat1 ?>" onfocus="myFunction(x)"><br>









                                     <input type="submit" name="sub" value="Update now">
<script>
function myFunction(x) {
    x.style.background = "yellow";
}
</script> 
        
 </pre></strong></font></p>
 </form>
<?php
mysql_close($con);
?>	
</body>
</html>