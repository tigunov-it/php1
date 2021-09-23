<ul>
<?php

$menu = [
    "/" => "Главная",
    "/?page=catalogspa" => "Каталог",
    "/?page=catalogssr" => "Каталог",
    "/?page=about" => "О нас"
]

?>
    <?php foreach ($menu as $key => $item): ?>
        <li> <a href='<?=$key ?>'> <?=$item ?> </a> </li>
    <?php endforeach; ?>
</ul>