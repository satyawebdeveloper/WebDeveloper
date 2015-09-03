<?php

/*
 * Comparing the First Array with 2,3,4....... arrays
 */
$monServiceList = array('Hair Cutting','Facial','Hair Color');
$tueServieList = array('Body Massage','Hair Cutting','Facial');

$newArr = array_diff($monServiceList,$tueServieList);
var_dump($newArr);
/*
 array (size=1)
  2 => string 'Hair Color' (length=10)
 */



$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);
/*
 * Array ( [b] => green [c] => blue )
 */

