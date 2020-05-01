<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment 1</title>
</head>

<body bgcolor="#22FFD9">


<form name="payment" method="post" action="payment1_db.php"><pre>


<p align="center"><font size="+2"><strong>

     <font color="#FF0004">PAYMENT</font>

                                                                    

Select Payment type:          <select name="pt" required>
                          <option disabled selected>---Select--- </option>
                          <option value="debit_credit">Debit/Credit Card</option> 
                          <option value="net_banking">Net Banking</option> 
                          <option value="bank_challan">Bank Challan</option> 
                          </select>

   Select Bank:                <select name="bank" required>
                          <option disabled selected>---Select--- </option>
                          <option value="sbi">State Bank Of India </option> 
                          <option value="ubi">United Bank Of India </option> 
                          <option value="axis">Axis Bank </option> 
                          <option value="allahabad">Allahabad Bank </option> 
                          <option value="boi">Bank Of India </option> 
                          <option value="yes">Yes Bank </option> 
                          </select>

                                  
                                  <input type="submit" name="proceed221" value="proceed">   

</strong></font></p></form>


</body>
</html>