<?php
session_start();

require '../connection/db.php';
include '../Class/LoginClass.php';
$connection= new Connection();
$login = $_SESSION['logged'] = $_POST['login'];
$_SESSION['email'] = $_POST['email'];
$email = $_POST['email'];
$password = $_POST['password'];
Login::LoginLogic($login,$email,$password);


