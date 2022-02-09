<?php
include '../controller/register.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Register below</h2>
<form method="POST">
    Username </br>
    <input type="text" name="username"> </br>
    Email </br>
    <input type="text" name="email"> </br>
    Password </br>
    <input type="password" name="password"> </br>
    Confirm Password </br>
    <input type="password" name="confirmPassword"> </br>
    <input type="submit" name="register" value="Register"> </br>
</form>
<br>
<h2>Already have an account?</h2>
<a href="login.view.php"><p>Click here to Login</p></a> <br>
</body>
</html>
