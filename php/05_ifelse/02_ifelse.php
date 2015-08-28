<?php
//executes the block iff the condition is true

$gender;

if(isset($gender)){
    if($gender=="male" || $gender=="female"){
        echo "Gender :".$gender;
    }else{
        echo 'invalid';
    }
}


