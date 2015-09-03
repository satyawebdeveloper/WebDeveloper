<?php
$serviceList = array(1001=>'facial',1002=>'haircutting',1003=>'body massage',1004=>'hair therepy');
$serviceSplitList = array_chunk($serviceList,2);

//var_dump($serviceSplitList); exit();
/*
array (size=2)
  0 =>
    array (size=2)
      0 => string 'facial' (length=6)
      1 => string 'haircutting' (length=11)
  1 =>
    array (size=2)
      0 => string 'body massage' (length=12)
      1 => string 'hair therepy' (length=12)
 */



$serviceList = array(1001=>'facial',1002=>'haircutting',1003=>'body massage',1004=>'hair therepy');
$serviceSplitList = array_chunk($serviceList,2,true);

var_dump($serviceSplitList); exit();
/*
 * array (size=2)
  0 =>
    array (size=2)
      1001 => string 'facial' (length=6)
      1002 => string 'haircutting' (length=11)
  1 =>
    array (size=2)
      1003 => string 'body massage' (length=12)
      1004 => string 'hair therepy' (length=12)
 */
?>
