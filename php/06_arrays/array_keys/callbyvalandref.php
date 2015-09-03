<?php
function test1($a){
    $a=100;
}


function test2(&$b){
    $b=200;
}




$a=10;
echo $a; //10
test1($a);
echo $a; //10

echo "<br/>";

$b=20;
echo $b=20; //20
test2($b);
echo $b;  ///200