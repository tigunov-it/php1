<ul>
<?
$menu = [
    '<a href="/">Главная</a>',
    '<a href="/?page=catalogspa">Каталог</a>',
    '<a href="/?page=catalogssr">Каталог</a>',
    '<a href="/?page=about">О нас</a>'
];

?>
    <? foreach ($menu as $item): ?>
        <li>
            <?=$item?>
        </li>
    <? endforeach; ?>
</ul>