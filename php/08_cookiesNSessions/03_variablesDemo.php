<?php
$a=10;

echo $a; //10

function displayA(){
	$a=20; //local variabels
	global $a;
	echo "A value:".$a; // o10
	echo $GLOBALS['a'];
}

//var_dump($GLOBALS); exit();

displayA();