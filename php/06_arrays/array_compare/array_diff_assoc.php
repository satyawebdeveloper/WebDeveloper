<?php

//Comparing both keys and values

$serviceList1 = array('10001' =>'Hair Cutting','10002'=>'Facial');
$serviceList2 = array('10001' =>'Hair Cutting','10002'=>'Facial New');

$newArr=array_diff_assoc($serviceList1,$serviceList2);
var_dump($newArr);

/*
 * array (size=1)
  10002 => string 'Facial' (length=6)
 */


