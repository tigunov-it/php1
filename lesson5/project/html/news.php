<?php

$db = mysqli_connect("mariadb", "gb_php", "gb_php", "gb_php");

$id = (int)$_GET['id']; //int - приводим данные к целому типу для безопасности

$result = mysqli_query($db, "SELECT title, text FROM news WHERE id = " . $id);

$item = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2> <?= $item['title'] ?> </h2>

<p> <?= $item['text'] ?> </p>

</body>
</html>
