<?php
//Create a new array with key and values
//values
$service1 = array('10001','Hair cutting','100');
$service2= array('10002','Facial','50');

//keys
$serviceKey = array('ServiceID' ,'ServiceName','Price');


var_dump($service1);
/*
 * array (size=3)
  0 => string '10001' (length=5)
  1 => string 'Hair cutting' (length=12)
  2 => string '100' (length=3)
 */

$newArr=array_combine($serviceKey,$service1);
var_dump($newArr);
/*
 * array (size=3)
  'ServiceID' => string '10001' (length=5)
  'ServiceName' => string 'Hair cutting' (length=12)
  'Price' => string '100' (length=3)
 */


$newArr1=array_combine($serviceKey,$service2);
var_dump($newArr1);
/*
array (size=3)
  'ServiceID' => string '10002' (length=5)
  'ServiceName' => string 'Facial' (length=6)
  'Price' => string '50' (length=2)
 */