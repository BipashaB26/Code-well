<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

    session_start();
	
   $bank=$_SESSION["paybank"];
   
   $formno=$_SESSION['sfrm'];
   
   $t_id=$bank."1234".$formno;
   
   $amt=$_SESSION['sprice1'];
    
   $d=date("y/m/d");
   
   $_SESSION['tid']=$t_id;
   $_SESSION['dt']=$d;
   

   header('location:load_successful.php');

?>
<body>
</body>
</html>