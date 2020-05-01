<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require ("conn.php");
$ccode=$_POST['cid'];
$sql="select * from course where C_CODE=".$ccode;
$result= mysql_query($sql);
?>
<body bgcolor="#22FFD9">
<form name="form1" method="post" action="" ><pre>
<p align="center"><font size="+2"><strong>
<?php
while($row=mysql_fetch_query($result))
{
  $cid=$row[0];
  $cname=$row[1];
  $com1=$row[2];
  $com2=$row[3];
  $com3=$row[4];
  $fee=$row[5];
  $seats=$row[6];
  $stat=$row[7];
	
}


?>
                                      

<font color="#FF0004">INSERT COURSE:</font>
                                                                    
<font color="#FF0004"><sup>*</sup></font>Enter Course Code:   <input type="text" name="cid"  onfocus="myFunction(this)"><br>
<font color="#FF0004"><sup>*</sup></font>Enter Course Name:   <input type="text" name="cname" value="<?php echo $cname ?>"  onfocus="myFunction(this)"><br>
<font color="#FF0004"><sup>*</sup></font>Enter Course combination 1:   <input type="text" name="com1" value="<?php echo $com1 ?>"  onfocus="myFunction(this)" required><br>
<font color="#FF0004"><sup>*</sup></font>Enter Course combination 2:    <input type="text" name="com2" value="<?php echo $com2 ?>"  onfocus="myFunction(this)" required><br>
<font color="#FF0004"><sup>*</sup></font>Enter Course combination 3:    <input type="text" name="com3" value="<?php echo $com3 ?>"  onfocus="myFunction(this)" required><br>
<font color="#FF0004"><sup>*</sup></font>Enter Course Fees:   <input type="text" name="fees" value="<?php echo $fee ?>"  onfocus="myFunction(this)"><br>
<font color="#FF0004"><sup>*</sup></font>Enter No Of Seats :   <input type="text" name="seats"  value="<?php echo $seats ?>"  onfocus="myFunction(this)"><br>

       <input type="submit" name="next1" value="search"> 

<script>
function myFunction(x) {
    x.style.background = "yellow";
}
</script>

</strong></font></p></form>

</body>
</html>