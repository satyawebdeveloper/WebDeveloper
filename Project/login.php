<?php

$username='';
$msg ='';
if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == $password){
        header('Location: http://www.google.com');
    }else{
        $msg = 'Please enter valid credentials';
    }

}


//header
include_once('includes/header.php');


//nav
include_once('includes/leftnav.php');

echo $msg;
?>

<div id="section">
    <h1>Login </h1>

        <!--Form starts here-->
        <form action="login.php" method="post">
            <div class="row">
           <label>Username</label>
           <input type="text" name="username" value="<?=$username;?>">
            </div>


            <div class="row">
                <label>Password</label>
                <input type="text" name="password">
            </div>




            <div class="row">
            <input type="submit" value="Login" name="login">
            </div>


            <a href="forgotpassword.html">Forgot Password</a><br>


        </form>
        <!--Form Ends here-->

</div>

<?php
//footer
include_once('includes/footer.php');
?>