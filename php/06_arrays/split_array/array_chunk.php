<?php
$serviceList = array('facial','haircutting','body massage','hair therepy');
$serviceSplitList = array_chunk($serviceList,2);

//var_dump($serviceSplitList); exit();
/*
array (size=2)
  0 =>
    array (size=2)
      0 => string 'facial' (length=6)
      1 => string 'haircutting' (length=11)
  1 =>
    array (size=2)
      0 => string 'body massage' (length=12)
      1 => string 'hair therepy' (length=12)
 */
?>

<html>
<body>
<table border="1">

    <?php
    foreach($serviceSplitList as $key => $arr){
        echo "<tr>";
        foreach($arr as $serviceID => $serviceName){
            echo "<td>$serviceID : $serviceName</td>";
        }
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>







