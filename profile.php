<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="assets/css/style.css">
   <title>Профиль</title>
</head>
<body>
<form>
   <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
   <h2><?= $_SESSION['user']['full_name'] ?></h2>
   <a><?= $_SESSION['user']['email'] ?></a>
   <a href="vendor/logout.php" style="background-color: #a42dcb; text-align: center">Logout</a>
</form>
</body>
</html>
