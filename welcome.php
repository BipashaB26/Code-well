<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script language="javascript">
function check1()
{
	var button1=document.getElementById('sub1');
	var button2=document.getElementById('sub2');
	var button3=document.getElementById('sub3');
	var button4=document.getElementById('sub4');
	
	var input1=document.getElementById('pay');
	
	
	if(input1.value=="pending")
	{
		button1.class = "submit";
        button1.removeAttribute("disabled");
		
		button2.class = "submit";
        button2.removeAttribute("disabled");
		
		button3.class = "button:disabled";
        button3.setAttribute("disabled","disabled");
		
		button4.class = "button:disabled";
        button4.setAttribute("disabled","disabled");
	}
	else
	{
		button1.class = "button:disabled";
        button1.setAttribute("disabled","disabled");
		
		button2.class = "button:disabled";
        button2.setAttribute("disabled","disabled");
		
		button3.class = "submit";
        button3.removeAttribute("disabled");
		
		button4.class = "submit";
        button4.removeAttribute("disabled");
	}
	
}

</script>
</head>
<?php
session_start();
$fn=$_SESSION['frm_n'];
require("conn.php");
$sql="select * from application WHERE FORM_NO=".$fn." ";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
	$fno1=$row[0];
    $name1=$row[1];
	$dob1=$row[3];
	$pay_s1=$row[12];
}

//echo $fno1."<br>";
//echo $name1."<br>";
//echo $dob1."<br>";
//echo $pay_s1."<br>";

?>

<body>

<form name="welcome" method="post" action=""><pre>
<table>
<thead>
<tr>
<th>
<svg height="130" width="500">
<defs>
<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
<stop offset="0%" style="stop-color:rgba(32,113,199,1.00); stop-opacity:1"/>
<stop offset="100%" style="stop-color:rgbrgba(0,0,0,1.00); stop-opacity:1"/>
</linearGradient>
</defs>
<ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)"/>
<text fill="#FFFFFF" font-size="45" font-family="germania-one" x="50" y="86">IGU</text>
Sorry your browser did not support logo
</svg></th>

<th><font size="+3" face="aclonica"><strong>INDIRA GANGHI UNIVERSITY</strong></font>
    <font size="+1"><strong><address>46/2 Colony Road, Kolkata-700016, West Bengal</address></strong></font><font size="+1"><strong><address>   Phone: 033-6655XXX</address></strong></font></th>
</tr>
</thead>
</table>
                                                                                                                  <input type="submit" name="logout" value="logout" formaction="login.php">

<p align="center"><font size="+2" color="#0034FF"><strong>

Form Number:     <input type="text" name="fno" value='<?php echo $fno1 ?>' readonly>

Name:            <input type="text" name="name" value='<?php echo $name1 ?>' readonly>

D.O.B:           <input type="text" name="dob" value='<?php echo $dob1 ?>' readonly>

Payment status:    <input type="text" name="dob" id="pay" value='<?php echo $pay_s1 ?>' id="pay" readonly>  


             <input type="submit" name="edit" value="Edit form"  id="sub1"  formaction="edit.php" onFocus="check1()"> <input type="submit" name="pay" value="Pay now" id="sub2" onFocus="check1()" formaction="paynow.php" > 

             <input type="submit" name="print_re" value="Generate receipt" id="sub3" onFocus="check1()" formaction="generate_receipt.php" > <input type="submit" name="print_frm" value="Generate form" id="sub4" onFocus="check1()" formaction="generate_form.php" > 



</strong></font></p> 
</pre></form>

</body>
</html>