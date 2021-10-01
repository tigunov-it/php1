<?php
include './config/config.php';
include './engine/db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/styles.css">
    <title> Калькулятор </title>
</head>
<body>
<div class="wrapper">

    <div class="header">
        <nav>
            <a href="./index.php">Главная</a>
            <a href="./calc.php">Калькулятор</a>
        </nav>
    </div>

    <?php

    $arg1 = 0;
    $arg2 = 0;
    $result = 0;
    $operation = 'add';

    function mathOperation($arg1, $arg2, $operation)
    {
        switch ($operation) {
            case "add":
                return $arg1 + $arg2;
            case "sub":
                return $arg1 - $arg2;
            case "mult":
                return $arg1 * $arg2;
            case "div":
                if ($arg2 == 0)
                    return "Делить на ноль нельзя!";
                else
                    return $arg1 / $arg2;
            default:
                return "Неверная операция";
        }
    }

    ?>
    <h2>Калькулятор</h2>
    <div class="calc">
        <form action="?id=123" method="get">
            <input type="text" name="arg1" value="<?= $arg1 ?>">

            <select name="operation">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mult">*</option>
                <option value="div">/</option>
            </select>

            <input type="text" name="arg2" value="<?= $arg2 ?>">

            <input type="submit" value="=" name="ok">
            <input type="text" name="result" readonly
                   value="<?= mathOperation(((float)$_GET['arg1']), (float)$_GET['arg2'], $_GET['operation']) ?>">
        </form>
    </div>

    <hr>

    <div id="app" class="calcVue">

    <h2>Мышка-калькулятор</h2>

        <div v-on:click="arg1=''; arg2=''; operation=''" class="reset">
            <p>RESET</p>
        </div>

        <div class="operators numbers">

            <div v-on:click="operation='add'" class="operator number"> +</div>
            <div v-on:click="operation='sub'" class="operator number"> -</div>
            <div v-on:click="operation='mult'" class="operator number"> *</div>
            <div v-on:click="operation='div'" class="operator number"> /</div>

        </div>

        <div class="field">

            <div class="arg1">
                <div class="numbers">

                    <div v-on:click="arg1=arg1+'1'" class="number"><p>1</p></div>
                    <div v-on:click="arg1=arg1+'2'" class="number"><p>2</p></div>
                    <div v-on:click="arg1=arg1+'3'" class="number"><p>3</p></div>
                    <div v-on:click="arg1=arg1+'4'" class="number"><p>4</p></div>
                    <div v-on:click="arg1=arg1+'5'" class="number"><p>5</p></div>
                    <div v-on:click="arg1=arg1+'6'" class="number"><p>6</p></div>
                    <div v-on:click="arg1=arg1+'7'" class="number"><p>7</p></div>
                    <div v-on:click="arg1=arg1+'8'" class="number"><p>8</p></div>
                    <div v-on:click="arg1=arg1+'9'" class="number"><p>9</p></div>
                    <div v-on:click="arg1=arg1+'0'" class="number"><p>0</p></div>

                </div>
                <div class="arg">
                    <div> {{ arg1 }}</div>
                </div>
            </div>

            <div class="operat"> <div> {{ operation }} </div> </div>

            <div class="arg1">
                <div class="numbers">

                    <div v-on:click="arg2=arg2+'1'" class="number"><p>1</p></div>
                    <div v-on:click="arg2=arg2+'2'" class="number"><p>2</p></div>
                    <div v-on:click="arg2=arg2+'3'" class="number"><p>3</p></div>
                    <div v-on:click="arg2=arg2+'4'" class="number"><p>4</p></div>
                    <div v-on:click="arg2=arg2+'5'" class="number"><p>5</p></div>
                    <div v-on:click="arg2=arg2+'6'" class="number"><p>6</p></div>
                    <div v-on:click="arg2=arg2+'7'" class="number"><p>7</p></div>
                    <div v-on:click="arg2=arg2+'8'" class="number"><p>8</p></div>
                    <div v-on:click="arg2=arg2+'9'" class="number"><p>9</p></div>
                    <div v-on:click="arg2=arg2+'0'" class="number"><p>0</p></div>

                </div>
                <div class="arg">
                    <div> {{ arg2 }}</div>
                </div>

            </div>


        </div>

        <div class="result arg">
            <div> {{ mathOperation(arg1, arg2, operation) }}</div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script>

        const app = new Vue({
            el: '#app',
            data: {
                one: 1,
                two: 2,
                three: 3,
                arg1: '',
                arg2: '',
                operation: ''
            },
            methods: {
                mathOperation(arg1, arg2, operation) {
                    switch (operation) {
                        case "add":
                            return arg1 + arg2;
                        case "sub":
                            return arg1 - arg2;
                        case "mult":
                            return arg1 * arg2;
                        case "div":
                            if (arg2 === 0)
                                return "Делить на ноль нельзя!";
                            else
                                return arg1 / arg2;
                        default:
                            return "Неверная операция";
                    }
                }
            }


        });

    </script>

</body>
</html>

