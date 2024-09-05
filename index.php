<?php
session_start();

$username = isset($_POST['username']) ? $_POST['username'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;
$login = isset($_POST['login']) ? $_POST['login'] : NULL;





if (isset($_SESSION['success'])){
    header('location: login.php');
}

if (isset($_POST['login'])){
    define('username', 'raselkhanprem@gmail.com');
    define('password', '12345678');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == username && password == password){
        $_SESSION['success']='';
        header('location: login.php');
    }else {
        $fail = "PASSWORD DOES NOT MATCH";
    }
}
?>



<!DOCTYPE html>
<html>

    <head>
        <title>Login Form Design</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="loginbox">
            <img src="avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form action="#" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="login" value="Login">
                <a href="#">Lost your password?</a><br>
                <a href="#">Don't have an account?</a>
            </form>
            <hr />
            <p style="color:#FFF; font-size:12px; font-weight:bold">
                <?php
                if(isset($fail)){
                    echo $fail;
                }
                ?>
            </p>
        </div>

    </body>


</html>
