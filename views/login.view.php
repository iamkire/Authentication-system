<?php
include '../controller/login.php';
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

<form method="POST"> <br>
    Email <br>
    <input type="text" name="email"> <br>
    Password <br>
    <input type="password" name="password"> <br>
    <input type="submit" name="login" value="Login"> <br>
</form> <br>

</body>
</html>