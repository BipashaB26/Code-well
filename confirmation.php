<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Confirmation</title>
<script language="javascript">
function confirm()
{
	
		alert("Are you sure to pay later?\nRemember your registration is half complete");
	
}
</script>
</head>
<?php
require("conn.php");
session_start();
$e=$_SESSION['scourse'];
$form=$_SESSION['sfrm'];		
$name=$_SESSION['sname'];
$q="select * from course where C_CODE='".$e."'";
		$r=mysql_query($q);
		while($row=mysql_fetch_array($r)){
		$id=$row[1];
		$com1=$row[2];
		$com2=$row[3];
		$com3=$row[4];
		}
		$q2="select * from course where C_CODE='".$e."'";
        $res1=mysql_query($q2);
		 while($row=mysql_fetch_array($res1)){
					$id=$row[1];
		 }
		 
		 $q1="select * from form_price where C_CODE='".$e."'";
		$r1=mysql_query($q1);
		while($row=mysql_fetch_array($r1)){
		$price=$row[1];
		
		}
		$_SESSION['sprice1']=$price; 
	
?>

<body bgcolor="#22FFD9">

<form name="personal_d" method="post" action="payment.php"><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">CONFIRMATION</font>


<font color="#FF0004">Form No.:              <input type="text" name="fno" value="<?php  echo $form;?>" readonly></font>
<font color="#FF0004">Candidate name:        <input type="text" name="fno" value="<?php  echo $name;?>" readonly></font>
<font color="#FF0004">Course name:           <input type="text" name="cn" value="<?php  echo $id;?>" readonly></font>
<font color="#FF0004">Course Combinations:   <input type="text" name="cb" value="<?php echo "".$com1."----".$com2."-----".$com3."" ?>"readonly></font>

<font color="#FF0004">Amount:                <input type="text" name="am" value="<?php echo $price; ?>"readonly></font>




 <input type="submit" name="proceed1" value="procced for payment" formaction="payment.php">  <input type="submit" name="procced21" value="pay later" onClick="confirm()" formaction="start12.php"> 


</strong></font></p></pre></form>

<?php


mysql_close($con);
?>
</body>
</html>