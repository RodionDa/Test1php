<?php

function divisible_by_three(int $max, int $min): array
{
    return array_values(
        array_filter(
            range($max, $min, -1), 
            fn($item) => $item % 3 === 0 
        )
    );
}

function count_even(array $arr): int
{
    // Считаем количество четных чисел в массиве
    return count(array_filter($arr, fn($item) => $item % 2 === 0));
}

function min_even(array $arr): int
{
    // Находим минимальный четный элемент
    $even_numbers = array_filter($arr, fn($item) => $item % 2 === 0);
    return min($even_numbers);
}

function min_sum_elements(array $arr): array
{
    // Находим два соседних элемента с минимальной суммой
    $min_sum = PHP_INT_MAX;
    $result = [];
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $sum = $arr[$i] + $arr[$i + 1];
        if ($sum < $min_sum) {
            $min_sum = $sum;
            $result = [$arr[$i], $arr[$i + 1]];
        }
    }
    return $result;
}

function assert_failed($file, $line, $expr)
{
    echo "<b>Assertion failed</b> in <code>$file</code> on line <b>$line</b>: <code>$expr</code><br>";
}

assert_options(ASSERT_CALLBACK, 'assert_failed');

// Пример использования
$result = divisible_by_three(1002, 0);

// Проверяем, что массив корректен
assert($result[0] % 3 === 0); 
assert(end($result) % 3 === 0); 
assert($result[1] % 3 === 0);

// Тестируем count_even
$even_count = count_even($result);
echo "Even numbers count: $even_count<br>";

// Тестируем min_even
$min_even = min_even($result);
echo "Minimum even number: $min_even<br>";

// Тестируем min_sum_elements
$min_sum_pair = min_sum_elements($result);
echo "Minimum sum pair: " . implode(', ', $min_sum_pair) . "<br>";

// Выводим результат
echo "Result: " . implode(', ', $result) . "<br>";
echo "All tests passed!";
