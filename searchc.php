<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("conn.php");
session_start();
$q2="select distinct(C_CODE) from course";
$res1=mysql_query($q2);

?>

<body bgcolor="#22FFD9">

<form name="c" method="post" action="searchdata.php"><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">COURSE DETAILS:</font>


<font color="#FF0004"><sup>*</sup></font>Select course:    <select name="cn" onfocus="myFunction(this)">
                  <option disabled selected>--Select--</option>
                  <?php
				 while($row=mysql_fetch_array($res1)){
					$id=$row[0];
					  $_SESSION['sid']=$id;
				 
				  ?>
                  
                 <option value="<?php echo $id ?> "><?php echo $id ?></option>
                 
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