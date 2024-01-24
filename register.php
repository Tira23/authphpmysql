<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="assets/css/style.css">
   <title>Регистрация</title>

</head>
<body>
<form action="vendor/signup.php" method="POST" enctype="multipart/form-data">
   <label for="full_name">ФИО</label>
   <input type="text" name="full_name" id="full_name" placeholder="ФИО">
   <label for="avatar">Изображение профиля</label>
   <input type="file" name="avatar" id="avatar">
   <label for="email">Почта</label>
   <input type="email" name="email" id="email" placeholder="Email">
   <label for="login">Логин</label>
   <input type="text" name="login" id="login" placeholder="Логин">
   <label for="password">Пароль</label>
   <input type="password" name="password" id="password" placeholder="Пароль">
   <label for="passwordConfirm">Подтвердите пароль</label>
   <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Пароль">
   <button>Зарегистрироваться</button>
   <p>
      У Вас уже есть аккаунт? - <a href="/index.php">Авторизуйтесь</a>
   </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="message">' . $_SESSION["message"] . '</p>';
    }
    unset($_SESSION['message']);
    ?>

</form>
</body>
</html>
