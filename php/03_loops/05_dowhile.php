<?php
$services = array('Hair Cutting', 'Trimming' ,'Facial' ,'Package 1');
$cnt=count($services);



$serviceID=4;
do{
    if(isset($services[$serviceID])){
        echo "$serviceID : $services[$serviceID]";
    }

    $serviceID++;
}while($serviceID < count($services));



