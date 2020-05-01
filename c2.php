<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select Combinations</title>
</head>
<?php
	require("conn.php");
	session_start();
	
$a=$_POST["cn"];
$_SESSION['course_name']=$a;
//echo $a;
$q3="select * from course where C_NAME='".$a."' ";
$res2=mysql_query($q3);
//echo die(mysql_error());
?>
<body bgcolor="#22FFD9">
<form name="combinations" method="post" action="verify12.php"><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">COURSE DETAILS:</font>


<font color="#FF0004"><sup>*</sup></font>Select course combination:    <select name="cname11" onfocus="myFunction(this)" required>
                  <option disabled selected>--Select--</option>

<?php

echo "sucess";
while($row=mysql_fetch_array($res2)){
			$code=$row[0];
		$com1=$row[2];
	     $com2=$row[3];
		 $com3=$row[4];
?>
<option value="<?php echo $code ?> ">
<?php echo "".$com1."----".$com2."-----".$com3.""  ?>
</option>
<?php
}
?>
</select>

                                                        <input type="submit" name="sub" value="confirm">
                                                        
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