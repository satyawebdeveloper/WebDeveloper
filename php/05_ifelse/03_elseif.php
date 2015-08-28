<?php

function getWeekDaySpecialList($weekDay){

    $specialList1=array('Facial','Hair Cutting');
    $specialList2=array('Hair Color','Pigmentation');

    if($weekDay=="Mon"){
        return $specialList1;
    }
    else if($weekDay=="Tue"){
        return $specialList1;
    }else if($weekDay=="Fri"){
        return $specialList2;
    }else if($weekDay=="Sat"){
        return $specialList1;
    }
}


echo '<html>';
echo '<body>';
echo '<table border="1"> <caption>Fri</caption>';
$serviceList= getWeekDaySpecialList('Fri');

if(count($serviceList)>0){
    echo '<tr><th>Service ID</th> <th>Service Name</th></tr>';
    foreach($serviceList as $key => $val){
        echo "<tr><td>$key</td><td>$val</td></tr>";
    }


}else{
    echo '<tr><td>No Services</td></tr>';
}


echo '</table>';
echo '</body>';
echo '</html>';
?>












