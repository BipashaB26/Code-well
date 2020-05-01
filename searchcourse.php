<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("conn.php");
$sql="select * from course_master";
$result=mysql_query($sql);
?>

<body bgcolor="#22FFD9">

<form name="c" method="post" action="updatecourse1.php"><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004"> SEARCH COURSE DETAILS:</font>


<font color="#FF0004"><sup>*</sup></font>Select course Name:    <select name="s1" onfocus="myFunction(this)">
                  <option disabled selected>--Select--</option>
                  <?php
while($row=mysql_fetch_array($result))
{
	$cn=$row[0];
?>
<option value="<?php echo $cn ?>">
<?php echo $cn ?>

</option>
<?php
}
?>
</select>










<input type="submit" name="sub" value="See Combinations">
   
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