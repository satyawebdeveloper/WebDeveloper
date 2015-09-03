<?php
/*
 * compact : compact(var1,var2....)
 * creates an array from variables and their values.
 */
$mon = "Monday";
$tue = "Tuesday";


//create a normal array
$weekDays = array($mon,$tue);
var_dump($weekDays);
/*
 * array (size=2)
  0 => string 'Monday' (length=6)
  1 => string 'Tuesday' (length=7)
 */



$weekDays1= compact('mon','tue');
var_dump($weekDays1);
/*
 * array (size=2)
  'mon' => string 'Monday' (length=6)
  'tue' => string 'Tuesday' (length=7)
 */


$weekDays2= compact('mon','wed');
var_dump($weekDays2);
/*
 * array (size=1)
  'mon' => string 'Monday' (length=6)
 */


$wed = array('dayName' =>'Wednesday','month'=>'Sep');
$weekDays3= compact('mon','tue','wed');
var_dump($weekDays3);


