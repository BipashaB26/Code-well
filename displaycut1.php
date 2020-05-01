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
$q3="select * from cutoff_marks where C_CODE='".$a."' ";
$res2=mysql_query($q3);
//echo die(mysql_error());
?>
<body bgcolor="#22FFD9">
<form name="combinations" method="post" action="adminhome.php"><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">COURSE DETAILS:</font>



                 

<?php

//echo "sucess";
while($row=mysql_fetch_array($res2)){
			$code=$row[0];
			$cat=$row[1];
		$ctot=$row[2];
	     $cbof=$row[3];
		 
		 
?>
<?php
}
?>
<font color="#FF0004"><sup>*</sup></font> course code:    <input type="text" name="ccode" value="<?php echo $code   ?>" readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> course category:    <input type="text" name="cname" value="<?php echo $cat   ?>"  readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> Cut-off(tot):    <input type="text" name="com1" value="<?php echo $ctot   ?>"   readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> Cut-off(bof):    <input type="text" name="com2" value="<?php echo $cbof   ?>"  readonly onfocus="myFunction(x)">









                                     <input type="submit" name="sub" value="back">
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