<?php
include'../connection/db.php';
include'../Class/RegisterClass.php';

$connection = new Connection();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
Register::RegisterLogic($username,$email,$password,$confirmPassword);

