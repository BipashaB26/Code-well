<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("conn.php");
$cn=$_POST["s1"];
$sql="select * from course_master where C_NAME='".$cn."'";
$result=mysql_query($sql);
?>

<body bgcolor="#22FFD9">

<form name="academics" method="post" action="save_changecourse.php"><pre>
<p align="center"><font size="+2"><strong>

<font color="#FF0004"> SEARCH COURSE DETAILS:</font>
<?php
while($row=mysql_fetch_array($result))
{
	$cn=$row[0];

?>
<font color="#FF0004"><sup>*</sup></font>Course Name:        <input type="text" name="t1" value="<?php echo $cn ?>"  readonly="readonly" onfocus="myFunction(this)">

<font color="#FF0004"><sup>*</sup></font>Updated Course Name :           <input type="text" name="t2" onfocus="myFunction(this)">
<?php
}
?>
 <input type="submit" name="next3" value="Update Now"></strong></font></p>
 </p>
<script>
function myFunction(x) {
    x.style.background = "yellow";
}
</script>
 </form>

</body>
</html>