<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


use App\Operations\Calculator;
use App\Operations\Plus;
use App\Operations\Minus;
use App\Operations\Mult;
use App\Operations\Div;

$calculator = new Calculator();

// Тест сложения
assert(
    $calculator->firstNumber(2)
        ->secondNumber(3)
        ->operation(Plus::class)
        ->result() === 5
);

// Тест вычитания
assert(
    $calculator->firstNumber(5)
        ->secondNumber(3)
        ->operation(Minus::class)
        ->result() === 2
);

// Тест умножения
assert(
    $calculator->firstNumber(2)
        ->secondNumber(3)
        ->operation(Mult::class)
        ->result() === 6
);

// Тест деления
assert(
    $calculator->firstNumber(6)
        ->secondNumber(3)
        ->operation(Div::class)
        ->result() === 2
);

echo "Все тесты пройдены!";
