<?php
$serviceList = array(
    'Hair Cutting',
    'Facial',
    'Massage',
    'Hair Cutting',
    'massage'
);


$newArr = array_count_values($serviceList);
var_dump($newArr);

/*
 array (size=4)
  'Hair Cutting' => int 2
  'Facial' => int 1
  'Massage' => int 1
  'massage' => int 1
 */