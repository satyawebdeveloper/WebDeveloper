<?php

$josh = array(1=>'josh', '2'=>'t');
$prasad = array(
    'name' => array('fname'=>'prasad','lname'=>'p'),
    'sex' => array('gender'=>'male'),
    'address1' => array('addressdetails'=>array('city'=>'hyd','zip'=>'500038'))
);


foreach($prasad as $key => $values){
    echo "<br/><b>".$key."</b>";
    foreach($values as $k => $v){

        if(is_array($v)) {
            foreach($v as $keyname => $keyvalue){
                echo "<br>$keyname : $keyvalue";
            }

        }else {
            echo "<br>$k : $v";
        }


    }

}

//echo json_encode($prasad); exit();

