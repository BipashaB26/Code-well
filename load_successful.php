<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment successful</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  text
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<?php
require("conn.php");

$ccode=$_SESSION['scourse'];
$formno=$_SESSION['sfrm'];
$amt=$_SESSION['sprice1'];
$tid=$_SESSION['tid'];
$date=$_SESSION['dt'];

 $q3="insert into form_fillup_tr values(".$formno.",'".$tid."',".$amt.",'".$date."')";
 $n3=mysql_query($q3);
 
 $p="completed";
 
 $sql="update application set PAYMENT_STATUS='".$p."' where FORM_NO=".$formno." ";
 $res=mysql_query($sql);


?>
<body onload="myFunction()" style="margin:0;">



<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  
  <form name="personal_d" method="post" action=""><pre>

<p align="center"><font size="+2"><strong>


<font color="#070707" size="+2">Payment Successful</font>

Thank you for registering with us.


  <font color="#FF0004">C_Code:               <input type="text" name="fno" value='<?php echo $ccode; ?>' readonly></font>
  <font color="#FF0004">Form No.:             <input type="text" name="cn" value='<?php echo $formno; ?>' readonly></font>
  <font color="#FF0004">Amount:               <input type="text" name="cb" value='<?php echo $amt; ?>' readonly></font>
  <font color="#FF0004">Transaction ID :      <input type="text" name="am" value='<?php echo $tid; ?>' readonly></font>
<font color="#FF0004">Transaction Date :      <input type="text" name="am" value='<?php echo $date; ?>' readonly></font>


 <button type="button" name="pr" onClick="window.print() ">Print this receipt</button>     <input type="submit" name="pr2" formaction="final_form.php" value="Generate form">
  
 <input type="submit" name="back" value="Back to homepage" formaction="stat12.php">

</strong></font></p></pre></form>
</div>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>