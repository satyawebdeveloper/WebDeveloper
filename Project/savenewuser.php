<?php
if(isset($_POST)){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];



    //mysql connection open
    $mysqlconn = new mysqli('localhost','root','root','spa');

    $sqlQuery="INSERT INTO users (first_name,last_name) VALUES (\"$first_name\",\"$last_name\")";
   // echo $sqlQuery; exit();

    //query execute
    $mysqlconn->query($sqlQuery);

    //mysql will returns the result

}