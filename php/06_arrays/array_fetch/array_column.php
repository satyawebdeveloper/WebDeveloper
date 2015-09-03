<?php
/*
 * Service List
 * ->service names
 * ->IDS
 */
$serviceList = array(
    array(
    'servicename' => 'Hair cutting',
    'price' => 100
    ),
    array(
        'servicename' => 'Facial',
        'price' => 50
    )
);


$serviceNameList=array();
foreach($serviceList as $key => $arr){
    foreach($arr as $servicekey => $serviceVal){
        if($servicekey =="servicename"){
            $serviceNameList[]=$serviceVal;
        }

    }

}

//var_dump($serviceNameList);
/*
 array (size=2)
  0 => string 'Hair cutting' (length=12)
  1 => string 'Facial' (length=6)
 */

var_dump(array_column($serviceList , 'servicename'));

/*
 array (size=2)
  0 => string 'Hair cutting' (length=12)
  1 => string 'Facial' (length=6)
 */

var_dump(array_column($serviceList , 'servicename','price'));
