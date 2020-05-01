<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php

require("conn.php");
session_start();
$fn=$_SESSION['frm_n'];

$q1="select NAME from application  where FORM_NO='".$fn."' " ;
$n1=mysql_query($q1);

while($row=mysql_fetch_array($n1))
{	
		$cname=$row[0];
}

$q2="select C_NAME from combinations where FORM_NO='".$fn."' " ;
$n2=mysql_query($q2);

while($row=mysql_fetch_array($n2))
{	
		$crname=$row[0];
}
$q3="select C_CODE from combinations where FORM_NO='".$fn."' " ;
$n3=mysql_query($q3);

while($row=mysql_fetch_array($n3))
{	
		$ccode=$row[0];
}
$_SESSION['ccode']=$ccode;

$q4="select * from course where C_CODE='".$ccode."' ";
$n4=mysql_query($q4);

  while($row=mysql_fetch_array($n4))
  {
	 	$com1=$row[2];
		$com2=$row[3];
		$com3=$row[4];
  }
 
 $q5="select * from form_price where C_CODE='".$ccode."' ";
 $n5=mysql_query($q5);
		while($row=mysql_fetch_array($n5))
		{
		   $price=$row[1];
		}
		$_SESSION['sprice1']=$price; 
	

?>
<body>

<form name="personal_d" method="post" action=" "><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">CONFIRMATION</font>


<font color="#FF0004">Form No.:              <input type="text" name="fno" value="<?php  echo $fn;?>" readonly></font>
<font color="#FF0004">Candidate name:        <input type="text" name="fno" value="<?php  echo $cname;?>" readonly></font>
<font color="#FF0004">Course name:           <input type="text" name="cn" value="<?php  echo $crname;?>" readonly></font>
<font color="#FF0004">Course Combinations:   <input type="text" name="cb" value="<?php echo "".$com1."----".$com2."-----".$com3."" ?>"readonly></font>

<font color="#FF0004">Amount:                <input type="text" name="am" value="<?php echo $price; ?>"readonly></font>




 <input type="submit" name="proceed1" value="Procced for Payment" formaction="payment1.php">  <input type="submit" name="procced21" value="Back"  formaction="welcome.php"> 
</body>
</html>