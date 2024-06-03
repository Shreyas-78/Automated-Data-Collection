<html>
<head> <title>SIMPLE CALCULATOR PROGRAM </title> </head> 
<body bgcolor="yellow"> 
<center><h3>SIMPLE CALCULATOR</h3> 
<form method="post"> 
<input type="text" name="FirstNum" id="FirstNum"><br/> 
<input type="text" name="SecondNum" id="SecondNum"><br/> 
<input type="submit" name="GRP" value="+">&nbsp;&nbsp; 
<input type="submit" name="GRP" value="-">&nbsp;&nbsp; 
<input type="submit" name="GRP" value="*">&nbsp;&nbsp; 
<input type="submit" name="GRP" value="/"><br/> 
</form></center> 
</body> 
</html> 
<?php 
if(isset($_POST['GRP'])) 
{ 
$num1=$_POST['FirstNum']; 
$num2=$_POST['SecondNum']; 
$operation=$_POST['GRP']; 
if($operation=="+") 
$result=$num1+$num2; 
else if($operation=="-") 
$result=$num1-$num2; 
else if($operation=="*") 
$result=$num1*$num2; 
else 
$result=$num1/$num2; 
echo"<center> RESULT IS:$result</center> <br/>";
}
?>	