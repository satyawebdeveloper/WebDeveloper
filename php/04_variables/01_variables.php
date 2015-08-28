<?php
$number1;

echo $number1; //undefined variable

$number2=10;
echo $number2;  //10


$number3=false;
echo $number3; //0



//naming conventions
$studentname="alex"; //OK
$studentname123="alex"; //ok
//$123studentname="alex";  //Error
$studentName="John";



$serviceID=100;
$serviceName="Facial";
$serviceCharge=10.5;
$serviceDuration="1 Hour";


//getting the data type info
echo gettype($serviceID); //integer
echo gettype($serviceName); //string
echo gettype($serviceCharge); //double
echo gettype($serviceDuration); //double


//check the variables dateypes
echo is_int($serviceID); //1
echo is_int($serviceName);  //0
echo is_numeric($serviceCharge); //1
echo is_int($serviceCharge); //0

//multi variable declaration
//$a=20; $b=20; php -> $a=$b=20;
//$X=20; $Y=20;  //$X=$Y=20
$a=$b=20;
echo "$a  : $b "; //20 : 20


//check variables status
$toDay;
echo $toDay; //undefined variables

if(isset($toDay)){
    echo $toDay;
}


$toDay="";
if(isset($toDay) && !empty($toDay)){
    echo "Today Date" .$toDay;
}




