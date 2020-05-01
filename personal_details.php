<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Personal Details</title>
</head> 


<body bgcolor="#22FFD9">
<form name="form1" method="post"><pre>
<p align="center"><font size="+2"><strong>
                                      

<font color="#FF0004">PERSONAL DETAILS:</font>
                                                                    
<font color="#FF0004"><sup>*</sup></font>Enter Candidate's name:   <input type="text" name="cname" onfocus="myFunction(this)" required><br>

<font color="#FF0004"><sup>*</sup></font>Enter Father's Name:      <input type="text" name="fname" onfocus="myFunction(this)" required><br>

<font color="#FF0004"><sup>*</sup></font>Enter D.O.B:              <input type="date" name="dob" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter Address             <input type="text" name="add" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter City :              <input type="text" name="city" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter State:              <input type="text" name="state" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter Cast :              <select name="cast" onfocus="myFunction(this)" required>
                          <option disabled selected>--Select--</option>
                          <option value="general">General</option>
                          <option value="sc">SC</option>
                          <option value="st">ST</option>
                          <option value="obc">OBC</option>
                          <option value="others">Others</option>
                          </select>
                          
<font color="#FF0004"><sup>*</sup></font>Enter Religion:           <input type="text" name="religion" onfocus="myFunction(this)" required>

<font color="#FF0004"><sup>*</sup></font>Enter Contact no:         <input type="text" name="contactno" onfocus="myFunction(this)" required>
                          
<font color="#FF0004"><sup>*</sup></font>Enter email-ID:           <input type="email" name="email" onfocus="myFunction(this)" required>

                 
               <input type="submit" name="next1" value="save and next" onClick="checkform1()" formaction="personal_db.php"> 

<script>
function myFunction(x) {
    x.style.background = "yellow";
}
</script>

</strong></font></p></form>

</body>
</html>