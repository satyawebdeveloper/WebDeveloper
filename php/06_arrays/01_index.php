<?php


$services = array();

//Finding the array size count, size
//echo count($services); //0


$services[0] = 'facial';
$services[1] = 'hair cutting';
$services[3] = 'pigmentation';

foreach($services as $serviceID => $serviceName){
    echo "$serviceID : $serviceName <br/> ";
}

//var_dump($services);