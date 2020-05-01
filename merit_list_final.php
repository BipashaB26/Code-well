<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Merit List</title>
</head>
<?php
require("conn.php");
session_start();
$q2="select distinct(C_NAME) from course";
$res1=mysql_query($q2);

?>
<body bgcolor="#7BAFFF">
<h1 align="center">MERIT LIST</h1>

<form name="m1" method="post" action=""><pre>

<br><br><br><br><br>
<p align="center"><font size="+2"><strong>Select Course:</strong></font>  <select name="meritlist1" required>
                 <option disabled selected>---Select</option>
                <?php
				 while($row=mysql_fetch_array($res1)){
					$id=$row[0];
					  $_SESSION['couse_merit_list']=$id;
				 
				  ?>
                  <option value="<?php echo $id ?> "><?php echo $id ?></option>
                 <?php
				  }
				  ?>
				  </select>  <input type="submit" name="sub" value="Generate"></p>
                
        
        
</pre></form> 

<?php
mysql_close($con);
?>	

</body>
</html>