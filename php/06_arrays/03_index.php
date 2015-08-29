<?php
$services = array('facial','haircuting','massage');  //0=>f 1=>h 2=>m

$services = array(0=>'facial',1=>'haircuting',2=>'massage'); //0=>f 1=>h 2=>m


$services = array(2=>'facial',0=>'haircuting',1=>'massage');

$services = array(2=>'facial',0=>'haircuting',2=>'massage');  //2=>massage , 0->haircutting


$services = array(5=>'facial','haircutting','massage'); //5->f 6->h 7->m


$services = array('facial',1=>'body massage','10X'=>'facial','haircutting'); //

var_dump($services); exit();