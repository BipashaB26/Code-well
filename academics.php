<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Academic Details</title>
</head>
<?php
require("conn.php");
session_start();
$form=$_SESSION['sfrm'];
//echo $form;
?>
<body bgcolor="#22FFD9">

<form name="academics" method="post" action="academics_db.php"><pre>
<p align="center"><font size="+2"><strong>
                                                                             <font color="#FF0004"></font> Form no:<input type="number" id="id" name="id" value="<?php  echo $form;?>" readonly onfocus="myFunction(this)" >                                                                   
  <font color="#FF0004">ACADEMIC DETAILS:</font>
                                               
                                                                                                                   
<font color="#FF0004"><sup>*</sup></font>Enter Last School:        <input type="text" name="last_school" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter Roll_No :           <input type="text" name="roll" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter BOARD:              <input type="text" name="board" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter Passing year:       <input type="text" name="py" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter Division:           <select name="division" onfocus="myFunction(this)" required>
                          <option disabled selected>--Select--</option>
                          <option value="1">1st</option>
                          <option value="2">2nd</option>
                          <option value="3">3rd</option>
                          </select>
                          
                          
<font color="#FF0004"><sup>*</sup></font>Enter subject details:

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
<td><input type="text" name="sub1" onfocus="myFunction(this)" required></td>
<td><input type="text" name="fmarks1" onfocus="myFunction(this)" required></td>
<td><input type="text" name="smarks1" onfocus="myFunction(this)" required></td>
</tr>
<tr>
<td><input type="text" name="sub2" onfocus="myFunction(this)" required></td>
<td><input type="text" name="fmarks2" onfocus="myFunction(this)" required></td>
<td><input type="text" name="smarks2" onfocus="myFunction(this)" required></td>
</tr>
<tr>
<td><input type="text" name="sub3" onfocus="myFunction(this)" required></td>
<td><input type="text" name="fmarks3" onfocus="myFunction(this)" required></td>
<td><input type="text" name="smarks3" onfocus="myFunction(this)" required></td>
</tr>
<tr>
<td><input type="text" name="sub4" onfocus="myFunction(this)" required></td>
<td><input type="text" name="fmarks4" onfocus="myFunction(this)" required></td>
<td><input type="text" name="smarks4" onfocus="myFunction(this)" required></td>
</tr>
<tr>
<td><input type="text" name="sub5" onfocus="myFunction(this)" required></td>
<td><input type="text" name="fmarks5" onfocus="myFunction(this)" required></td>
<td><input type="text" name="smarks5" onfocus="myFunction(this)" required></td>
</tr>
<tr>
<td><input type="text" name="sub6" onfocus="myFunction(this)" required></td>
<td><input type="text" name="fmarks6" onfocus="myFunction(this)" required></td>
<td><input type="text" name="smarks6" onfocus="myFunction(this)" required></td>
</tr>
</tbody>
</table>

<p align="center"><font size="+2"><strong>


                 
  
                                             <input type="submit" name="next3" value="save and next"></strong></font></p>
 </p>
<script>
function myFunction(x) {
    x.style.background = "yellow";
}
</script>
                 </form>
</body>
</html>