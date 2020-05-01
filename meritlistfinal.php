<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
require('conn.php');
	$id=$_POST["s3"];
	//echo $id;
	$p="select * from course where C_CODE='".$id."'";
	$result12=mysql_query($p);
	while($row1=mysql_fetch_array($result12)){
		$no=$row1[6];
	
	}
	
	$q="SELECT application.FORM_NO, application.NAME , application.CAST, application.COURSE_APPLIED, app_marks.BEST_OF_FOUR,app_marks.TOTAL_MARK FROM  application JOIN app_marks ON application.FORM_NO=app_marks.FORM_NO where C_CODE='".$id."' ORDER BY BEST_OF_FOUR DESC,TOTAL_MARK DESC LIMIT ".$no."";
	//echo $no;
$result=mysql_query($q);

	$l=1;
	?>
    <body bgcolor="#22FFD9">
<form name="combinations" method="post" action=""><pre>
<p align="center"><font size="+2"><strong>


<font color="#FF0004">MERIT LIST</font>

<?php
while($row=mysql_fetch_array($result)){
	$fno=$row[0];
	$nam=$row[1];
	$cast=$row[2];
	$code=$row[3];
	$b4=$row[4];
	$tot=$row[5];
	$x="selected";
	$e1="update application set sel_status='".$x."' where form_no=".$fno."";
	$result123=mysql_query($e1);
	if(!$result123){
		echo "failed";}
		else
		//echo "sucess";
	

	echo $fno;
	
	?>
    <?php
    }
    ?>
    
    <font color="#FF0004"><sup>*</sup></font> sno:    <input type="text" name="ccode" value="<?php echo $l;$l++;  ?>" readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> phase no:    <input type="text" name="cname" value="<?php echo "1"  ?>"  readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> form no:    <input type="text" name="com1" value="<?php echo $fno ?>"   readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> name:    <input type="text" name="com2" value="<?php echo $nam ?>"  readonly onfocus="myFunction(x)">

<font color="#FF0004"><sup>*</sup></font> category:    <input type="text" name="com2" value="<?php echo $cast ?>"  readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> course applied:    <input type="text" name="com2" value="<?php echo $code ?>"  readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> best four:    <input type="text" name="com2" value="<?php echo $b4 ?>"  readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font>total:    <input type="text" name="com2" value="<?php echo $tot ?>"  readonly onfocus="myFunction(x)">


<font color="#FF0004"><sup>*</sup></font> adm status:    <input type="text" name="com2" value="<?php echo $x   ?>"  readonly onfocus="myFunction(x)">







                                     <input type="submit" name="sub" value="back">
</body>
</html>