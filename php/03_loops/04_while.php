<?php

$services = array('Hair Cutting', 'Trimming' ,'Facial' ,'Package 1');
$cnt=count($services);


$i=0;
while($i < $cnt){
  echo $services[$i];
  $i++;
}