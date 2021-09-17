<?php
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "addition":
            return "Сумма чисел равна " . ($arg1 + $arg2);
            break;
        case "subtraction":
            return " Разность чисел равна " . ($arg1 - $arg2);
            break;
        case "multiplication":
            return " Результат умножения чисел равен " . ($arg1 * $arg2);
            break;
        case "division":
            if ($arg2 == 0)
                return var_dump($arg1 / $arg2);
            else
                return " Результат деления чисел равен " . ($arg1 / $arg2);
            break;
    }
}
echo mathOperation(15,5,"division");