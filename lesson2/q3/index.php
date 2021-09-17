<?php
function addition($a, $b){
    return "Сумма чисел равна " . ($a + $b);
}
echo addition(200, 400);

function subtraction($a, $b){
    return " Разность чисел равна " . ($a - $b);
}
echo subtraction(200000, 500);

function multiplication($a, $b){
    return " Результат умножения чисел равен " . ($a * $b);
}
echo multiplication(3, 5);

function division($a, $b){
    if ($b == 0)
        return var_dump($a / $b);
    else
        return " Результат деления чисел равен " . ($a / $b);
}
echo division(15, 0);