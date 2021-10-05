<?php
include './config/config.php';
include './engine/db.php';

$resultItems = mysqli_query($db, "SELECT catalog.name, catalog.price as 'price', catalog.photo as 'photo', catalog.id as 'id' FROM basket JOIN catalog on basket.item_id = catalog .id");

$itemsincart = mysqli_fetch_assoc($resultItems);

if ($itemsincart) {
    $title = "Корзина";
} else
    $title = "Товаров в корзине нет";

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        $id_feed = (int)$_GET['id'];
        mysqli_query($db, "DELETE FROM `basket` WHERE `item_id` = {$id_feed}");
        header("Location: /basket.php");
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
    <title>Каталог товаров</title>
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

    <div id="main">

        <div class="post_title2"><h2><?= $title ?> </h2></div>


        <div class="gallery">

            <?php foreach ($resultItems as $itemSql): ?>

                <a href="item.php?id=<?= $itemSql['id'] ?>">
                    <div class="item">

                        <img class="photo"
                             src=./gallery_img/<?= $itemSql['photo'] ?> alt="photos"/>

                        <h4> <?= $itemSql['name'] ?> </h4>
                        <p> Цена: <?= $itemSql['price'] ?> </p>

                        <div class="button"><p>Купить</p></div>
                        <a class="button delete" href="?id=<?=$itemSql['id']?>&action=delete"><div><p>Удалить</p></div> </a>

                    </div>
                </a>
            <?php endforeach; ?>

        </div>

    </div>

    <div id="main">

    </div>

</body>
</html>