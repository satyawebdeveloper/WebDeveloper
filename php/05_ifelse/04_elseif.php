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
?>



<html>
<body>
    <table border="1">

    <caption>Fri</caption>
    <?php
    $serviceList = getWeekDaySpecialList('Sun');
    if (count($serviceList) > 0) {
        ?>
        <tr>
        <th>ID</th>
        <th>Service Name</th>
        </tr>
        <?php
        foreach ($serviceList as $key => $val) {
            ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $val; ?></td>
            </tr>
        <?php
        }

        ?>

    <?php
    } else {
        ?>
        <tr>
            <td colspan="2">No Services Today</td>
        </tr>
    <?php
    }
    ?>


</table>
</body>
</html>









