<?php

class Login
{
    public static function LoginLogic($login,$email, $password)
    {
        if(isset($_POST['login']) && (isset($_SESSION['logged']))) {
            $connection = new Connection();
            $sql = "SELECT users_pwd from users where users_email = '$email'";
            $stmt = $connection->Connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $hash = $result['users_pwd'];
            if (password_verify($password, $hash)) {
                $_SESSION['logged'] = $login;
                header("Location: ../index.php");
            } else {
                echo "Failed to log in";
                $_SESSION['logged'] = false;
            }
        }
    }
}