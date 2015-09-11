<?php
$a =10; //global variables
$b =20;
$c=30;

//echo $c; //30



function testFun($b){
    $a=20; //local variables
    echo $a; //20

    echo $b; //20

    global $c;
    echo $c; //30
}


//testFun($b);




//cooke varibles
setcookie('c','60');  //saved in the client system
//getting the cookie values
//echo $_COOKIE['c'];



//seesion variabels : saved in the server (tmp folder)
session_start();
$_SESSION['c']=90;
echo $_SESSION['c'];




