<?php
//Arithmetic operation

$a=10; $b=20;

echo 'Addition Result:'.($a+$b); //Addition Result:30

echo "Subtraction Result:".($a-$b); //Subtraction Result:-10


function addition($a,$b){
    return $a+$b;
}


function subtraction($a,$b){
    return $a-$b;
}

function multiplication($a,$b=5){
    echo $a*$b;
}


echo "Add Result : ".addition(2,3);

multiplication(2,3); //6
multiplication(2); //10
