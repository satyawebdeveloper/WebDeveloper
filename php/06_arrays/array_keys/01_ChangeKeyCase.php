<?php

/*
 * 1)returns new arrays
 * 2)no effect on existing array
 * 3)possible values (CASE_UPPER, CASE_LOWER (Default)
 */

$services = array('SERIVCE1'=>'facial','SERIVCE2'=>'hair cuttig');

var_dump($services);

/*
array (size=2)
  'SERIVCE1' => string 'facial' (length=6)
  'SERIVCE2' => string 'hair cuttig' (length=11)
*/



$serviceList = array_change_key_case($services);


var_dump($services);

/*
array (size=2)
  'SERIVCE1' => string 'facial' (length=6)
  'SERIVCE2' => string 'hair cuttig' (length=11)
*/




var_dump($serviceList);
/*
 array (size=2)
  'serivce1' => string 'facial' (length=6)
  'serivce2' => string 'hair cuttig' (length=11)
 */


$serviceListNew = array_change_key_case($serviceList,CASE_UPPER);
var_dump($serviceListNew);

/*
 * array (size=2)
  'SERIVCE1' => string 'facial' (length=6)
  'SERIVCE2' => string 'hair cuttig' (length=11)
 */