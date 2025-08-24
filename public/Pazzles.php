<?php

// Функция для вычисления факториала
function factorial($n)
{
    if ($n < 0) {
        return "Факториал определен только для неотрицательных чисел.";
    }

    if ($n === 0 || $n === 1) {
        return 1;
    }

    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

// Функция для проверки палиндрома
function is_palindrome(string $word): bool
{
    $normalizedWord = mb_strtolower(preg_replace('/\s+/', '', $word));
    return $normalizedWord === mb_strrev($normalizedWord);
}

function mb_strrev(string $string): string
{
    $reversed = '';
    for ($i = mb_strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= mb_substr($string, $i, 1);
    }
    return $reversed;
}

// Функция для удвоения всех чисел в массиве
function array_double(array $numbers): array
{
    return array_map(function ($number) {
        return $number * 2;
    }, $numbers);
}

// Функция для фильтрации нечетных чисел
function only_odd(array $numbers): array
{
    return array_filter($numbers, function ($number) {
        return $number % 2 !== 0;
    });
}

// Функция для зануления цифр на четных позициях
function even_to_zero(int $number): int
{
    $numberStr = (string)$number;
    $result = '';

    for ($i = 0; $i < strlen($numberStr); $i++) {
        if (($i + 1) % 2 === 0) {
            $result .= '0'; // Зануляем цифру на четной позиции
        } else {
            $result .= $numberStr[$i]; // Оставляем цифру без изменений
        }
    }

    return (int)$result;
}

// --- Примеры вызова функций ---
echo "1. Факториал числа 5: " . factorial(5) . PHP_EOL;

echo "2. Проверка палиндрома для слова 'шалаш': " . (is_palindrome('шалаш') ? "является палиндромом" : "не является палиндромом") . PHP_EOL;

$numbers = [1, 2, 3, 4, 5];
echo "3. Удвоенный массив: " . implode(', ', array_double($numbers)) . PHP_EOL;

echo "4. Массив нечетных чисел: " . implode(', ', only_odd($numbers)) . PHP_EOL;

echo "5. Число с зануленными четными позициями (12345): " . even_to_zero(12345) . PHP_EOL;
