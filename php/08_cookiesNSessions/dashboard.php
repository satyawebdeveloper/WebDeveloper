<?php
session_start();
if(isset($_SESSION['username'])){
    echo 'Welcome to Home Page '.$_SESSION['username'];
    echo '<a href="logout.php">Logout</a>';



}else{
    header("Location: login.php");
    exit ();
}

?>