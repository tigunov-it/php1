<?php
$i = 0;
do {
    if ($i == 0) {
        echo $i . " - Ноль; ";
    } else if (($i % 2) == 0) {
        echo $i . " - Четное число; ";
    } else if (($i % 2) != 0) {
        echo $i . " - Нечетное число; ";
    }
    $i++;
} while ($i <= 10);