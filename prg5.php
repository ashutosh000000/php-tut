<?php
$i4=1000;
$i5=3000;
function fun2(){

$i1=2;
$i2=4;
$i3=$i1+$i2+$GLOBALS['i4']+$GLOBALS['i5'];

echo "sum of two no is $i3";
}

fun2();
?>