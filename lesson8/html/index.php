<?php
include './config/config.php';
include './engine/db.php';

$resultItems = mysqli_query($db, "SELECT id, name, quantity, price, photo FROM catalog ORDER BY price DESC");

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'addtocart') {
        $id_feed = (int)$_GET['id'];
        $resulttocart = mysqli_query($db, "INSERT INTO `basket`(`user_id`, `item_id`) VALUES ('1', {$id_feed})");
    }
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
    <title>Каталог товаров</title>
</head>
<body>

<div class="wrapper">

    <?php include 'menu.php'; ?>

    <div id="main">
        <div class="post_title2"><h2>Каталог товаров</h2></div>
        <div class="gallery">

            <?php foreach ($resultItems as $itemSql): ?>

                <a href="item.php?id=<?= $itemSql['id'] ?>">
                    <div class="item">

                        <img class="photo"
                             src=./gallery_img/<?= $itemSql['photo'] ?> alt="photos"/>

                        <h4> <?= $itemSql['name'] ?> </h4>
                        <p> Цена: <?= $itemSql['price'] ?> </p>

                        <a class="button" href="?id=<?= $itemSql['id'] ?>&action=addtocart">
                            <div><p>Купить</p></div>
                        </a>

                    </div>
                </a>
            <?php endforeach; ?>

        </div>

    </div>

    <div id="main">

    </div>

</body>
</html>
