<?php
$address = [
    "Московская область:" => ["Москва",  "Зеленоград", "Клин"],
    "Ленинградская область:" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область:" => ["Рязань", "Милославское", "Шацк", "Пителино"]
];

foreach ($address as $key => $value) {
    echo "{$key}:<br>";
    echo implode(', ', $value) . ".<br>"; //преобразование массива в строку
    echo "<br>";
    echo "<br>";
}