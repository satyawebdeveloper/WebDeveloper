<?php
$services = array('10001' => 'facial' , '10002' => 'massage');

$service1=array(
    'serviceID' => '10001',
    'serviceName' => 'Facial',
    'price' => '10'
);


$service2=array(
    'serviceID' => '10002',
    'serviceName' => 'Massage',
    'price' => '20'
);


$serviceList=array($service1,$service2); //  0->s1 1=>s2

//echo $service1['serviceID']; //10001
//echo $serviceList[0]['serviceName'];


$josh = array(1=>'josh', '2'=>'t');
$prasad = array(
    'name' => array('fname'=>'prasad','lname'=>'p'),
    'sex' => array('gender'=>'male'),
    'address1' => array('addressdetails'=>array('city'=>'hyd','zip'=>'500038'))
);

echo json_encode($prasad); exit();
var_dump($prasad); exit();
echo $prasad['address1']['addressdetails']['city'];


//var_dump($serviceList);


