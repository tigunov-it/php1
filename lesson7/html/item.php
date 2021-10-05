<?php
include './config/config.php';
include './engine/db.php';

$id = (int)$_GET['id']; //int - приводим данные к целому типу для безопасности

$resultItems = mysqli_query($db, "SELECT id, name, quantity, price, photo, description FROM catalog WHERE id = " . $id);
$item = mysqli_fetch_assoc($resultItems);

$resultRew = mysqli_query($db, "SELECT item_id, body, users.name FROM reviews JOIN users on reviews.user_id = users.id WHERE item_id = " . $id);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/styles.css">
    <title> <?= $item['name'] ?> </title>
</head>
<body>
<div class="wrapper">

    <div class="header">
        <nav>
            <a href="./index.php">Главная</a>
            <a href="./calc.php?arg1=0&operation=add&arg2=0">Калькулятор</a>
            <a href="./basket.php">Корзина</a>
            <a href="./cabinet.php">Личный кабинет</a>
        </nav>
    </div>

    <h2> <?= $item['name'] ?> </h2>
    <div class="fullDesc">

        <div class="fullImg">
            <img src="./gallery_img/<?= $item['photo'] ?>" alt="<?= $item['name'] ?>">
        </div>
        <div class="description">
            <h3>Описание товара</h3>
            <p> <?= $item['description'] ?> </p>
            <h3>Остаток на складе <?= $item['quantity'] ?></h3>
            <h3>Цена <?= $item['price'] ?></h3>
        </div>
        <div class="reviews">
            <h3>Отзывы</h3>

            <?php foreach ($resultRew as $rew): ?>
                <li> <strong> Пользователь: </strong> <?= $rew['name'] ?> <strong> Отзыв: </strong> <?= $rew['body'] ?> </li>
            <?php endforeach; ?>


        </div>
    </div>

   </div>
</body>
</html>

