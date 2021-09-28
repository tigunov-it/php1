<?php

$db = mysqli_connect("mariadb", "gb_php", "gb_php", "gb_php");

$id = (int)$_GET['id']; //int - приводим данные к целому типу для безопасности

$result = mysqli_query($db, "SELECT url, name FROM photo WHERE id = " . $id);
$item = mysqli_fetch_assoc($result);

mysqli_query($db, "UPDATE photo SET count= count + 1 WHERE id =" . $id);
$countdb = mysqli_query($db, "SELECT count FROM photo WHERE id = " . $id);
$count = mysqli_fetch_assoc($countdb);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<div class="fullscr">
    <img src="/gallery_img/big/<?= $item['name'] ?>" alt="">
</div>


<div class="count">
    <span> Просмотры: <?= $count['count'] ?> </span>
</div>

</body>
</html>
