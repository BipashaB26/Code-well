<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("conn.php");
session_start();
$q2="select distinct(C_NAME) from course";
$res1=mysql_query($q2);

$fn=$_SESSION['frm_n'];
$sql1="select C_NAME from combinations where FORM_NO='".$fn."' ";
$res2=mysql_query($sql1);

while($row=mysql_fetch_array($res2))
{
	$coursen=$row[0];
}
	

?>

<body>
<form name="c" method="post" action=""><pre>
<p align="center"><font size="+2"><strong>
 

<font color="#FF0004"> Change COURSE DETAILS:</font>



Your course:  <input type="text" name="cname" readonly value='<?php echo $coursen; ?>' >


<font color="#FF0004"></font>Select course:    <select name="cn" >
                  <option disabled selected>--Select--</option>
                  <?php
				 while($row=mysql_fetch_array($res1))
				 {
					$id=$row[0];
					$_SESSION['sid']=$id;
				 
				    ?>
                  
                    <option value='<?php echo $id ?>' ><?php echo $id; ?></option>
                 
                    <?php
				  }
				  
				  $_SESSION['coursen']=$coursen;
				  ?>
				  </select>
                  
          
 <input type="submit" name="next2" value="next" formaction="edit3.php">
   
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