<?php
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") {
        $_SESSION['username'] = $username;
       
        header("Location: dashboard.php");
        exit ();
    } else {
        $msg = 'please enter valid details';
    }
}
?>

<?php

if(isset($msg)){
    echo $msg;
}

?>

<form action="login.php" method="POST">
    <label>Username</label><input type="text" name="username"> <br/>
    <label>Password</label><input type="password" name="password"> <br/>
    <input type="submit" name="submit" value="login">
</form>