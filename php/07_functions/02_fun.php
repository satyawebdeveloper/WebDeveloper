<?php
function helloGoodMorning(){
    echo "Hello World";
}


helloGoodMorning();



function helloGoodMorningWithParam($message){
    echo $message;
}


helloGoodMorningWithParam('HelloWorld');

$msg="Hello World";
helloGoodMorningWithParam($msg);

