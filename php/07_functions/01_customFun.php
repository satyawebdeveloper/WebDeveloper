<?php
/*
 A function name can start with a letter or underscore (not a number).
Function names are NOT case-sensitive.
Information can be passed to functions through arguments. An argument is just like a variable.
Default Argument Value
Returning values
 */

//function : keyword , {} = block , return - keyword

$newArr = array('a','c','d','e');
var_dump($newArr);
/*
 * array (size=4)
  0 => string 'a' (length=1)
  1 => string 'c' (length=1)
  2 => string 'd' (length=1)
  3 => string 'e' (length=1)
 */


function arrayV1($var1,$var2){
    $newArr = array($var1,$var2);
    sort($newArr);
    return $newArr;
}





$myArr=arrayV1('c','b');
var_dump($myArr);


