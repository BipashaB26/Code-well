<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment 2</title>
</head>

<body bgcolor="#F4FF8A">

<form name="payment2" method="post" action="payment21_db.php"><pre>

<p align="center"><font size="+2"><strong>
                                                                   

                                                                            
<strong><u>Enter Card Details:</u></strong>


Enter Card No:                      <input type="text" name="cardno" required>

Enter Account Holder Name:          <input type="text" name="accn" required>

Enter Card Type :                   <input type="text" name="cardty" required>

          Expiry date:                   <input type="text" name="edate1" required> / <input type="text" name="edate2" required>

Enter CVV no.:                      <input type="password" name="cvvno" required>

Enter PIN no:                       <input type="password" name="pin" required>


                            
<input type="submit" name="proceed2" value="proceed"> 

<script>
function myFunction(x) {
    x.style.background = "yellow";
}
</script> 


</strong></font></p></form>






</body>
</html>