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

$q1="select * from combinations where FORM_NO=".$fn." ";
$r1=mysql_query($q1);

while($row1=mysql_fetch_array($r1))
{
	$code=$row1[1];
	$cs1=$row1[2];
}

$q2="select distinct(C_NAME) from course";
$r2=mysql_query($q2);





?>
</body>

<form name="f11" method="post" action="edit32.php"><pre>




<p align="center"><font size="+2" color="#FF0004">Change COURSE DETAILS </font></p>


<p align="center"> Your course :  <input type="text" name="csn" value='<?php echo $cs1; ?>' readonly></p>

<p align="center"> Change course :  <select name="csn2">
                                    <option disabled selected>---Select---</option>
                                    <?php
                                    while($row2=mysql_fetch_array($r2))
                                    {
	                                     $cs_name=$row2[0];
										 $_SESSION['crs']=$cs_name;
                                    ?> 
                                    <option value='<?php echo  $cs_name; ?>'><?php echo  $cs_name; ?></option>                                    <?php
									}
                                    ?>
                                    </select></p>
                                    
                                    
                                                                                                         
<p align="center"><input type="submit" name="sub" value="Select Combinations" ></p>




</pre></form>
<?php
mysql_close($con);
?>

</html>