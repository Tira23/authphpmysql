<?php
session_start();
require_once('connect.php');
global $connect;
$login = $_POST['login'];
$password = md5($_POST['password']);
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user)) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "avatar" => $user['avatar'],
        "email" => $user['email'],
        "full_name" => $user['full_name'],
    ];
    header('Location: ../profile.php');

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../index.php');
}
