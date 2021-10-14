<?php
include './config/config.php';
include './engine/db.php';
session_start();
$auth = false;

if (isset($_GET['logout'])) {
    setcookie("hash", $hash, time() - 3600, '/');
    session_destroy();
    header("location: " . $_SERVER['HTTP_REFERER']);
    die();
}

if (isset($_SESSION['login'])) {
    $auth = true;
    $login = $_SESSION['login'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);
    $login = mysqli_real_escape_string($db, strip_tags(stripslashes($login)));
    $result = mysqli_query($db, "SELECT * FROM `users` WHERE `name` = '{$login}'");
    $row = mysqli_fetch_assoc($result);
    if ($pass == $row['pass']) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $row['id'];
        $hash = uniqid(rand(), true);
        $id = $_SESSION['id'];
        $sql = "UPDATE users SET hash = '{$hash}' WHERE users.id = {$id}";
        $result = mysqli_query($db, $sql);
        setcookie("hash", $hash, time() + 3600, '/');
    }
    header("location: " . $_SERVER['HTTP_REFERER']);
    die();
}


function get_user()
{
    return $_SESSION['login'];
}

function is_admin()
{
    return get_user() == 'admin';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/styles.css">
    <title> Личный кабинет </title>
</head>
<body>
<div class="wrapper">

    <?php include 'menu.php'; ?>

    <h2> Личный кабинет </h2>

    <?php if ($auth): ?>
        <h3> <?= $login ?>, добро пожаловать в личный кабинет!</h3>
    <?php else: ?>

        <form action="" method="post">

            <input type="text" name="login">
            <input type="text" name="pass">
            <input type="submit" name="ok">

        </form>
    <?php endif; ?>

</div>
</div>

</div>
</body>
</html>