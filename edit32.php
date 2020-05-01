<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("conn.php");

session_start();
 $cs2=$_POST['csn2'];

$_SESSION['csn22']=$cs2;

$fn=$_SESSION['frm_n'];

$q1="select * from course where C_NAME='".$cs2."' ";
$r1=mysql_query($q1);





?>
<body>

<form name="f11" method="post" action="confirm_cs2.php"><pre>



<p align="center"><font size="+2" color="#FF0004">Select COMBINATIONS </font></p>


<p align="center"> Change course :  <select name="comb2">
                                    <option disabled selected>---Select---</option>
                                    <?php
                                    while($row1=mysql_fetch_array($r1))
                                    {
										 $code1=$row1[0];
	                                     $comb11=$row1[2];
										 $comb22=$row1[3];
										 $comb33=$row1[4];
										 
										 
                                    ?> 
                                    <option value='<?php echo $code1; ?>'><?php echo  $comb11."---".$comb22."---".$comb33; ?></option>                         
									<?php
									}
                                    ?>
                                    </select></p>

<p align="center"><input type="submit" name="sub" value="Select Combinations" formaction="edit32.php"></p>
<?php
mysql_close($con);
?>
</body>
</html>