<?php
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "addition":
            return $arg1 + $arg2;
        case "subtraction":
            return $arg1 - $arg2;
        case "multiplication":
            return $arg1 * $arg2;
        case "division":
            if ($arg2 == 0)
                return "Делить на ноль нельзя!";
            else
                return $arg1 / $arg2;
        default:
            return "Неверная операция";
    }
}
echo mathOperation(15,3,"division");