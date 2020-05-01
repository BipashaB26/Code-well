<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admission form</title>
<style>
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
</style>
</head>
<?php
require("conn.php");
session_start();

$fn=$_SESSION['frm_n'];

$cname=$_SESSION['$cname'];
$fname=$_SESSION['$fname'];
$dob=$_SESSION['$dob'];
$add=$_SESSION['$add'];
$city=$_SESSION['$city'];
$state=$_SESSION['$state'];
$caste=$_SESSION['$caste'];
$religion=$_SESSION['$religion'];
$contactno=$_SESSION['$contactno'];
$email=$_SESSION['$email'];

$last_school=$_SESSION['lschool'];
$roll=$_SESSION['roll'];
$board=$_SESSION['board'];
$py=$_SESSION['py'];	
$division=$_SESSION['div'];

$sub1=$_SESSION['sub1'];
$fmarks1=$_SESSION['fmarks1'];
$smarks1=$_SESSION['smarks1'];

$sub2=$_SESSION['sub2'];
$fmarks2=$_SESSION['fmarks2'];
$smarks2=$_SESSION['smarks2'];

$sub3=$_SESSION['sub3'];
$fmarks3=$_SESSION['fmarks3'];
$smarks3=$_SESSION['smarks3'];

$sub4=$_SESSION['sub4'];
$fmarks4=$_SESSION['fmarks4'];
$smarks4=$_SESSION['smarks4'];

$sub5=$_SESSION['sub5'];
$fmarks5=$_SESSION['fmarks5'];
$smarks5=$_SESSION['smarks5'];

$sub6=$_SESSION['sub6'];
$fmarks6=$_SESSION['fmarks6'];
$smarks6=$_SESSION['smarks6'];

$sum=$_SESSION['tmkrs'];

$best=$_SESSION['bmkrs'];

$course=$_SESSION['$ccode1'];
$ccode=$_SESSION['$course1'];

$comb11=$_SESSION['$sub11'];
$comb21=$_SESSION['$sub21'];
$comb31=$_SESSION['$sub31'];

$amt=$_SESSION['$amt1'];


?>
<body bgcolor="#FF9FA0">

<p align="center"><font size="+3" face="aclonica"><strong>INDIRA GANGHI UNIVERSITY</strong></font></p>

<form name="ffinal" method="post" action=""><pre>

<font size="+2"><p align="center"><em><strong>ADMISSION FORM 2018</strong></em></p></font>
<font size="+2"><p align="center"><em><strong>Form no.:   <input type="text" name="fno" value='<?php echo $fn; ?>' readonly></strong></em></p></font>
<table border="0">
<thead>
<th>
<font color="#FF0004">PERSONAL DETAILS:</font>

                                                                    
 Candidate's name:   <input type="text" name="cname" value='<?php echo $cname; ?>' readonly>

 Father's Name:      <input type="text" name="fname" value='<?php echo $fname; ?>' readonly>

 D.O.B:              <input type="text" name="dob" value='<?php echo $dob; ?>' readonly>

 Address             <input type="text" name="add" value='<?php echo $add; ?>' readonly>

 City :              <input type="text" name="city" value='<?php echo $city; ?>' readonly>

 State:              <input type="text" name="state" value='<?php echo $state; ?>' readonly>

 Caste :             <input type="text" name="caste" value='<?php echo $caste; ?>' readonly>
                                                    
 Religion:           <input type="text" name="religion" value='<?php echo $religion; ?>' readonly>

 Contact no:         <input type="text" name="contactno" value='<?php echo $contactno; ?>' readonly>
                          
 email-ID:           <input type="text" name="email" value='<?php echo $email; ?>' readonly>
</th>

<th>
<font color="#FF0004">ACADEMIC DETAILS:</font>
                                               
                                                                                                                   
 Last School:        <input type="text" name="last_school" value='<?php echo $last_school; ?>' readonly >

 Roll_No :           <input type="text" name="roll" value='<?php echo $roll; ?>' readonly>

 BOARD:              <input type="text" name="board" value='<?php echo $board; ?>' readonly>

 Passing year:       <input type="text" name="py" value='<?php echo $py; ?>' readonly>

 Division:           <input type="text" name="division" value='<?php echo $division; ?>' readonly>
                           
                          
 Subject details:

<table align="center">
<tr>
<thead>
<th>SUBJECT</th>
<th>Full Marks</th>
<th>Marks Obtained</th>
</thead>
</tr>
<tbody>
<tr>
<td><input type="text" name="sub1" value='<?php echo $sub1; ?>' readonly></td>
<td><input type="text" name="fmarks1" value='<?php echo $fmarks1; ?>' readonly></td>
<td><input type="text" name="smarks1" value='<?php echo $smarks1; ?>' readonly></td>
</tr>
<tr>
<td><input type="text" name="sub2" value='<?php echo $sub2; ?>' readonly></td>
<td><input type="text" name="fmarks2" value='<?php echo $fmarks2; ?>' readonly></td>
<td><input type="text" name="smarks2" value='<?php echo $smarks2; ?>' readonly></td>
</tr>
<tr>
<td><input type="text" name="sub3" value='<?php echo $sub3; ?>' readonly></td>
<td><input type="text" name="fmarks3" value='<?php echo $fmarks3; ?>' readonly></td>
<td><input type="text" name="smarks3" value='<?php echo $smarks3; ?>' readonly></td>
</tr>
<tr>
<td><input type="text" name="sub4" value='<?php echo $sub4; ?>' readonly></td>
<td><input type="text" name="fmarks4" value='<?php echo $fmarks4; ?>' readonly></td>
<td><input type="text" name="smarks4" value='<?php echo $smarks4; ?>'  readonly></td>
</tr>
<tr>
<td><input type="text" name="sub5" value='<?php echo $sub5; ?>' readonly></td>
<td><input type="text" name="fmarks5" value='<?php echo $fmarks5; ?>' readonly></td>
<td><input type="text" name="smarks5" value='<?php echo $smarks5; ?>'  readonly></td>
</tr>
<tr>
<td><input type="text" name="sub6" value='<?php echo $sub6; ?>' readonly></td>
<td><input type="text" name="fmarks6" value='<?php echo $fmarks6; ?>' readonly></td>
<td><input type="text" name="smarks6" value='<?php echo $smarks6; ?>'  readonly></td>
</tr>
</tbody>
</table>

Total marks:               <input type="text" name="tm" value='<?php echo $sum; ?>' readonly>

Best of 4 marks:           <input type="text" name="bfm" value='<?php echo $best; ?>' readonly>

</th>
</thead>
<tbody>
<tr>
<td>
                                  <font color="#FF0004"><strong>COURSE DETAILS:</strong></font>
                                  

                   Course:                <input type="text" name="course" value='<?php echo $course; ?>' readonly>

                   Course Code:           <input type="text" name="ccode" value='<?php echo $ccode; ?>' readonly>

                   Course Combinations:   <input type="text" name="comb" value='<?php echo $comb11."---".$comb21."---".$comb31; ?>' readonly>

</td>
<td>
                                  <font color="#FF0004"><strong>PAYMENT DETAILS:</strong></font>
                                  

                   Amount:                <input type="text" name="course" value='<?php echo $amt; ?>'  readonly>

                   Payment Status:        <input type="text" name="ccode" value="paid" readonly>
</td>
</tr>
</tbody>
</table>
                   





<div class="container"> <button type="button" class="cancelbtn" onClick="window.print() "><font color="#FFFFFF"><strong>Print form</strong></font></button></a></div>  

<input type="submit" name="back1" value="Back" formaction="welcome.php">

<font size="+1"><p><em><strong>( Bring this during the time of counselling, if called )</strong></em></p></font> 


</strong></em></p></font>




</pre></form>









</body>
</html>