<?php
//executes the block iff the condition is true

$gender="0";

if($gender){  //if(0) ,
    echo "Gender :".$gender;
}




$gender=false;  //true and false are boolean data types
if($gender){  //if(0) ,
    echo "Gender :".$gender;
}


//valid conddition
$gender="male";
if( (isset($gender) && !empty($gender)) && ($gender=="male" || $gender=="female") ){
    echo $gender;
}
