<?php
$services = array('Hair Cutting', 'Trimming' ,'Facial' ,'Package 1');

//for
for($i=0; $i<count($services); $i++){
    echo $services[$i];
}




//foreach
foreach($services as $serviceName){
    echo $serviceName .'<br/>';
}


foreach($services as $serviceID => $serviceName){
    echo '<br/>'.$serviceID.':'.$serviceName .'<br/>';
}

