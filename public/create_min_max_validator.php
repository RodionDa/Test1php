<?php
// Функция для создания валидатора диапазона
function create_min_max_validator(int $min, int $max) {
    return function ($value) use ($min, $max) {
        return $value >= $min && $value <= $max;
    };
}

// Пример использования
$validator = create_min_max_validator(2, 5);

// Проверки с использованием assert
assert($validator(3));  // 3 входит в диапазон [2, 5]
assert(!$validator(6)); // 6 не входит в диапазон [2, 5]
assert($validator(2));  // 2 входит в диапазон [2, 5]
assert($validator(5));  // 5 входит в диапазон [2, 5]
assert(!$validator(1)); // 1 не входит в диапазон [2, 5]

// Вывод результатов в веб-странице
echo "<h1>Результаты проверки валидатора:</h1>";
echo "<p>3: " . ($validator(3) ? "валидно" : "невалидно") . "</p>";
echo "<p>6: " . ($validator(6) ? "валидно" : "невалидно") . "</p>";
echo "<p>2: " . ($validator(2) ? "валидно" : "невалидно") . "</p>";
echo "<p>5: " . ($validator(5) ? "валидно" : "невалидно") . "</p>";
echo "<p>1: " . ($validator(1) ? "валидно" : "невалидно") . "</p>";
?>
