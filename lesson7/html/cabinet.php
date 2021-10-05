<?php
include './config/config.php';
include './engine/db.php';

$auth = false;

if (isset($_GET['logout'])){
    setcookie('login', $login, time() + 3500, '/');
    header("location: " . $_SERVER['HTTP_REFERER']);
    die();
}

if (isset($_COOKIE['login'])) {
    $auth = true;
    $login = $_COOKIE['login'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);
    if ($login == 'admin' && $pass == '123') {
        setcookie('login', $login, time() + 3500, '/');
        header("location: " . $_SERVER['HTTP_REFERER']);
        die();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/styles.css">
    <title> Личный кабинет </title>
</head>
<body>
<div class="wrapper">

    <div class="header">
        <nav>
            <a href="./index.php">Главная</a>
            <a href="./calc.php?arg1=0&operation=add&arg2=0">Калькулятор</a>
            <a href="./basket.php">Корзина</a>
            <a href="./cabinet.php">Личный кабинет</a>
            <a href="./cabinet.php?logout">Выход</a>
        </nav>
    </div>

    <h2> Личный кабинет </h2>

    <?php if ($auth): ?>
        <h3> <?=$login?>, добро пожаловать в личный кабинет!</h3>
    <?php else: ?>

    <form action="" method="post">

        <input type="text" name="login">
        <input type="text" name="pass">
        <input type="submit" name="ok">

    </form>
<?php endif;?>

</div>
</div>

</div>
</body>
</html>