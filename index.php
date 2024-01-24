<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="assets/css/style.css">
   <title>Авторизация</title>
</head>
<body>
<form action="vendor/signin.php" method="post">
   <label for="login">Логин </label>
   <input type="text" name="login" id="login" placeholder="Введите логин">
   <label for="password">Пароль </label>
   <input type="password" name="password" id="password" placeholder="Введите пароль">
   <button>Войти</button>
   <p>
      У Вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>
   </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="message">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>
