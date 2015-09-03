


<?php

htmlStart();
?>

<head>
<style type="text/css">
    .cssClassA{
        width: 100px;
        border: dashed;
    }

    .cssClassB{
        width: 100px;
        border: dotted;
    }
</style>
</head>


<?php
htmlBodyStart();
formStart();
getTextField();
echo getTextFieldV1('First Name','fname');
echo getTextFieldV1('Last Name','lname');
echo getTextFieldV2('Phone 1','phone1','cssClassA');
echo getTextFieldV3('Phone 2','phone2');
echo getTextFieldV3('City','city','cssClassA');
formEnd();
htmlBodyEnd();
htmlEnd();



function htmlStart(){
    echo "<html>";
}

function htmlEnd(){
    echo "</html>";
}


function htmlBodyStart(){
    echo "<body>";
}

function htmlBodyEnd(){
    echo "</body>";
}

function formStart(){
    echo "<form>";
}

function formEnd(){
    echo "</form>";
}

function getTextField(){
    echo  '<input type="text" name="firstname">';
}

function getTextFieldV1($fieldLabel,$fieldName){
    $content = "<label>$fieldLabel</label><input type='text' name='$fieldName'>";
    return $content;
}

function getTextFieldV2($fieldLabel,$fieldName,$className){
    $content = "<label>$fieldLabel</label><input type='text' name='$fieldName' class='$className'>";
    return $content;
}

function getTextFieldV3($fieldLabel,$fieldName,$className='cssClassB'){
    $content = "<label>$fieldLabel</label><input type='text' name='$fieldName' class='$className'>";
    return $content;
}


?>