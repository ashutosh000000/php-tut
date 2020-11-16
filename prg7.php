<?php
function fun(){
static $a=00;
$b=00;
echo "<br>value of a=$a<br>value of b=$b";
$a=$a+1;
$b=$b+1;
}
fun();
fun();
fun();
fun();
?>