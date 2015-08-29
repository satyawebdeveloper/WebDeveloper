<?php
$services = array();

//Finding the array size count, size
//echo count($services); //0


$services[0] = 'facial';
$services[1] = 'hair cutting';
$services[3] = 'pigmentation';

for($i=0 ; $i<count($services) ; $i++){
    echo "$i : $services[$i] <br/> ";
}

//Notice: Undefined offset: 2
