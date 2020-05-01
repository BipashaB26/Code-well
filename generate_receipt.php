<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

require("conn.php");
session_start();

$ccode=$_SESSION['$course1'];
$fn=$_SESSION['frm_n'];
$amt=$_SESSION['$amt1'];

$sql="select * from form_fillup_tr where FORM_NO=".$fn." ";
$q=mysql_query($sql);

while($row=mysql_fetch_array($q))
{
	$tid=$row[1];
	$date=$row[3];
}






?>
<body>

<form name="f1" method="post" action=""><pre>
<p align="center"><font size="+2"><strong>


<font color="#070707" size="+2">Payment Successful</font>


Thank you for registering with us.


  
  <font color="#FF0004">C_Code:               <input type="text" name="fno" value='<?php echo $ccode; ?>' readonly></font>
  
  <font color="#FF0004">Form No.:             <input type="text" name="cn" value='<?php echo $fn; ?>' readonly></font>
  
  <font color="#FF0004">Amount:               <input type="text" name="cb" value='<?php echo $amt; ?>' readonly></font>
  
  <font color="#FF0004">Transaction ID :      <input type="text" name="am" value='<?php echo $tid; ?>' readonly></font>
  
<font color="#FF0004">Transaction Date :      <input type="text" name="am" value='<?php echo $date; ?>' readonly></font>


 <button type="button" name="pr" onClick="window.print() ">Print this receipt</button>   
  
 <input type="submit" name="back" value="Back" formaction="welcome.php">
 
 </strong></p></pre></form>

</body>
</html>