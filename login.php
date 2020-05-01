<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body bgcolor="pink">

<form name="login1" method="post" action="verify21.php">
<table>
<thead>
<tr >
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

<th><font size="+3" face="aclonica"><strong>INDIRA GANGHI UNIVERSITY</strong></font><br>
    <font size="+1"><strong><address>46/2 Colony Road, Kolkata-700016, West Bengal</address></strong></font>
    <font size="+1"><strong><address>   Phone: 033-6655XXX</address></strong></font></th>
</tr>
</thead>
</table>



<table>
<thead>
<tr>
<th>
  <div class="imgcontainer">
    <img src="585e4bc4cb11b227491c3395.png" alt="user logo" class="avatar">
  </div>
  </th>
  <th>
  <div class="container">
    <label for="uname"><b>Enter Your Date of Birth:</b></label>    
    <input type="date" placeholder="Enter date of birth" name="dob" required><br><br>
    
    <label for="uname"><b>Enter Your Form No:</b></label> 
    <input type="text" placeholder="Form number" name="formno" required>

   
        
    <button type="submit" name="login" value="log">Login</button>
    <!--label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label-->
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <a href="start12.php"> <button type="button" class="cancelbtn">Back</button></a>
    <!--span class="psw">Forgot <a href="#">password?</a></span-->
  </div>
  </th>
  </tr>
  </thead>
  </table>
</form>
<marquee behavior="scroll" scrollamount="8" onMouseOver="stop()" onMouseOut="start()" bgcolor="#F8FF00"><font color="#000000" size="+1" face="alex-brush"><strong><em>IGU ranked one of best institutes of India in 2018 by MHRD!</em></strong></font></marquee>

</body>
</html>