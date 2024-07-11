<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    header('Location: login.php');
    exit;
}
?>