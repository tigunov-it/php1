<?php
// Задача: поменять переменные местами
// Способ с промежуточной переменной
$a = 1;
$b = 2;

$temp = $a;
$a = $b;
$b = $temp;

// Способ без третьей переменной
$x = 1;
$y = 2;

$x = $x + $y;
$y = $x - $y;
$x = $x - $y;

// Способ с битовыми операциями
$d = 1;
$e = 2;

$d = $d ^ $e;
$d = $d ^ $e;
$d = $d  $e;