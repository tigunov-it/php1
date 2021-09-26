<?php
$smallPhoto = scandir('./gallery_img/small');
$smallPhoto = array_splice($smallPhoto, 2);

$db = mysqli_connect("mariadb", "gb_php", "gb_php", "gb_php");

$result = mysqli_query($db, "SELECT id, title FROM news");

$resultPhoto = mysqli_query($db, "SELECT id, url, name FROM photo");

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
    <script type="text/javascript">
        $(document).ready(function () {
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 500,
                speedOut: 500,
                hideOnOverlayClick: false,
                titlePosition: 'over'
            });
        }); </script>

</head>

<body>

<div id="main">
    <div class="post_title2"><h2>Галерея. Запросы из базы данных</h2></div>
    <div class="gallery">

        <?php foreach ($resultPhoto as $photosql): ?>

            <a class="photo2" href="photo.php?id=<?= $photosql['id'] ?>"> <img src="<?= $photosql['url'] ?><?= $photosql['name'] ?>" width="150" height="100" alt="photos"/> </a>

        <?php endforeach; ?>

    </div>

</div>

<div id="main">

    <h2>Новости</h2>
    <ul>

        <?php foreach ($result as $item): ?>
            <li><a href="news.php?id=<?= $item['id'] ?>"> <?= $item['title'] ?> </a>  </li>
        <?php endforeach; ?>

    </ul>
</div>


<div id="main">
    <div class="post_title"><h2>Галерея. fancybox</h2></div>

    <div class="gallery">

        <?php foreach ($smallPhoto as $fotoname): ?>
            <a rel="gallery" class="photo" href="gallery_img/big/<?= $fotoname ?>"><img
                        src="gallery_img/small/<?= $fotoname ?>" width="150" height="100"/></a>
        <?php endforeach; ?>

    </div>

</div>

<div id="main">
    <div class="post_title2"><h2>Галерея 2 Открытие в новом окне браузера</h2></div>
    <div class="gallery">

        <?php foreach ($smallPhoto as $fotoname): ?>
            <a class="photo2" href="gallery_img/big/<?= $fotoname ?>" target=_blank><img
                        src="gallery_img/small/<?= $fotoname ?>" width="150" height="100"/></a>
        <?php endforeach; ?>

    </div>

</div>

</body>
</html>