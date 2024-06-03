<?php
$num=356;
$sum=0;
while($num>0)
{
$digit=$num%10;
echo $digit;
$sum+=$digit;
$num=$num/10;
}
echo $sum;
?>
