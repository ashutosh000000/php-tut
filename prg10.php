<?php
echo"the line no is :".__LINE__;
echo"the File name is :".__FILE__;
echo"the php version is :".__PHPVERSION__;
class demo{

function test(){
echo"the function of class demo is :".__FUNCTION__;
}

function testme(){
echo"the method of class demo :".__METHOD__;
}
echo"the class is :".__CLASS__;
}

$object=new demo();
$object->test();
$object->testme();

?>