<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script language="javascript">
function confirm3()
{
	
		alert("Are you sure you want to edit your course chosen?");
	
}
</script>
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
<body>
<form name="combinations" method="post" action=""><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">Take combinations:</font>


<font color="#FF0004"></font>Select course combination:    <select name="cname11" >
                  <option disabled selected>--Select--</option>

<?php

//echo "sucess";
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
$_SESSION['new_comb_code']=$cname11;
?>
</select>

                
                                                                               <input type="submit" name="sub" value="Edit Course" formaction="confirm_cs.php" onClick="confirm3()">                                                                     
                                                        


        
 </pre></strong></font></p>
 </form>
<?php
mysql_close($con);
?>	
</body>
</html>