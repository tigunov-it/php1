<?php
function addition($a, $b){
    return $a + $b;
}
echo addition(200, 400);

function subtraction($a, $b){
    return $a - $b;
}
echo subtraction(200000, 500);

function multiplication($a, $b){
    return $a * $b;
}
echo multiplication(3, 5);

function division($a, $b){
    if ($b == 0)
        return "Делить на ноль нельзя";
    else
        return $a / $b;
}
echo division(15, 3);