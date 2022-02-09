<?php

class Register
{
    public static function RegisterLogic($username, $email, $password, $confirmPassword)
    {
        $connection = new Connection();
        if (isset($_POST['register'])) {
            if (!empty($_POST['username']) && filter_var($email, FILTER_VALIDATE_EMAIL) && $password == $confirmPassword) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users
(users_uid,users_pwd,users_email)
    VALUES ('$username','$hash','$email')";
                $stmt = $connection->Connect()->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }
}