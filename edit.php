<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script language="javascript">
function confirm1()
{
	
		alert("Are you sure you want to edit your personal details?");
	
}
function confirm2()
{
	
		alert("Are you sure you want to edit your academic details?");
	
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
	$fno=$row[0];
    $name=$row[1];
    $fname=$row[2];
    $dob=$row[3];
    $add=$row[4];
    $city=$row[5];
    $state=$row[6];
    $caste=$row[7];
    $reg=$row[8];
    $cont=$row[9];
    $email=$row[10];
}

          
	   

$sql1="select * from app_marks WHERE FORM_NO=".$fn." ";
$res1=mysql_query($sql1);

while($row1=mysql_fetch_array($res1))
{
$last_s=$row1[1];
$roll=$row1[2];
$board=$row1[3];
$py=$row1[4];
$div=$row1[5];
$sub1=$row1[6];
$fm1=$row1[7];
$sm1=$row1[8];
$sub2=$row1[9];
$fm2=$row1[10];
$sm2=$row1[11];
$sub3=$row1[12];
$fm3=$row1[13];
$sm3=$row1[14];
$sub4=$row1[15];
$fm4=$row1[16];
$sm4=$row1[17];
$sub5=$row1[18];
$fm5=$row1[19];
$sm5=$row1[20];
$sub6=$row1[21];
$fm6=$row1[22];
$sm6=$row1[23];

}

?>

<body>
<p align="center"><font size="+3" face="aclonica"><strong>INDIRA GANGHI UNIVERSITY</strong></font></p>

<form name="ffinal" method="post" action=""><pre>

<font size="+2"><p align="center"><em><strong>EDIT FORM</strong></em></p></font>
<font size="+2"><p align="center"><em><strong>Form no.:   <input type="text" name="fno" value='<?php echo $fno;?>' readonly ></strong></em></p></font>
<table border="0">
<thead>
<th>
<font color="#FF0004">PERSONAL DETAILS:</font>

                                                                    
 Candidate's name:   <input type="text" name="cname" value='<?php echo $name;?>'>

 Father's Name:      <input type="text" name="fname" value='<?php echo $fname;?>'>

 D.O.B:              <input type="text" name="dob" value='<?php echo $dob;?>'>

 Address             <input type="text" name="add" value='<?php echo $add;?>' >

 City :              <input type="text" name="city" value='<?php echo $city;?>'>

 State:              <input type="text" name="state" value='<?php echo $state;?>'>

 Caste :             <input type="text" name="caste" value='<?php echo $caste;?>'>
                                                    
 Religion:           <input type="text" name="religion" value='<?php echo $reg;?>' >

 Contact no:         <input type="text" name="contactno" value='<?php echo $cont;?>' >
                          
 email-ID:           <input type="text" name="email" value='<?php echo $email;?>' >
 
</th>

<th>
<font color="#FF0004">ACADEMIC DETAILS:</font>
                                               
                                                                                                                   
 Last School:        <input type="text" name="last_school" value='<?php echo $last_s;?>'  >

 Roll_No :           <input type="text" name="roll" value='<?php echo $roll;?>' >

 BOARD:              <input type="text" name="board" value='<?php echo $board;?>'>

 Passing year:       <input type="text" name="py" value='<?php echo $py;?>'>

 Division:           <input type="text" name="division" value='<?php echo $div;?>'>
 
                       
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
<td><input type="text" name="sub1" value='<?php echo $sub1;?>'></td>
<td><input type="text" name="fmarks1" value='<?php echo $fm1;?>' ></td>
<td><input type="text" name="smarks1" value='<?php echo $sm1;?>'></td>
</tr>
<tr>
<td><input type="text" name="sub2" value='<?php echo $sub2;?>'></td>
<td><input type="text" name="fmarks2" value='<?php echo $fm2;?>'></td>
<td><input type="text" name="smarks2" value='<?php echo $sm2;?>'></td>
</tr>
<tr>
<td><input type="text" name="sub3" value='<?php echo $sub3;?>' ></td>
<td><input type="text" name="fmarks3" value='<?php echo $fm3;?>' ></td>
<td><input type="text" name="smarks3" value='<?php echo $sm3;?>'></td>
</tr>
<tr>
<td><input type="text" name="sub4" value='<?php echo $sub4;?>'></td>
<td><input type="text" name="fmarks4" value='<?php echo $fm4;?>'></td>
<td><input type="text" name="smarks4" value='<?php echo $sm4;?>'></td>
</tr>
<tr>
<td><input type="text" name="sub5" value='<?php echo $sub5;?>'></td>
<td><input type="text" name="fmarks5" value='<?php echo $fm5;?>' ></td>
<td><input type="text" name="smarks5" value='<?php echo $sm5;?>'></td>
</tr>
<tr>
<td><input type="text" name="sub6" value='<?php echo $sub6;?>'></td>
<td><input type="text" name="fmarks6" value='<?php echo $fm6;?>'></td>
<td><input type="text" name="smarks6" value='<?php echo $sm6;?>' ></td>
</tr>
</tbody>
</table>

</th>
</thead>
<tbody>
<tr>
<td>
</td>
<td>
</tr>
</tbody>
</table>
                 
</strong></em></p></font>
                                                                 <input type="submit" name="edit_per" value="Edit Personal Details" onClick="confirm1()" formaction="confirm_pd.php">   <input type="submit" name="edit_aca" value="Edit Academic Details" onClick="confirm2()" formaction="confirm_ad.php"> 

                                                              
                                                                                                               
                                                                                                               <input type="submit" name="back" value="back" formaction="welcome.php"> 

</pre></form>

<?php

mysql_close($con);
?>	



</body>
</html>