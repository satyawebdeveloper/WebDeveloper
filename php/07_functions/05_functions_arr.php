<?php
function add($a, $b)
{
    return $a + $b;
}


echo add(5, 2); //7


function addV1($arr)
{
    $result = 0;
    foreach ($arr as $val) {
        $result = $result + $val;
    }

    return $result;
}


echo addV1(array(10, 20, 30, 40, 50)); //150
