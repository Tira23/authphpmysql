<?php
session_start();
require_once('connect.php');
global $connect;
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];
$avatar = $_FILES['avatar'];

if ($password !== $passwordConfirm) {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
} else {
    $path = "uploads/" . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('Location: ../register.php');
    }
    $password = md5($password);
    mysqli_query($connect, "INSERT 
INTO `users` 
    (`id`, `full_name`, `login`, `email`, `password`, `avatar`) 
VALUES 
    (NULL, '$full_name', '$login', '$email', '$password', '$path')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../index.php');
}
