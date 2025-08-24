<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


/**
 * Функция бросает исключение \Exception, если $i меньше 6.
 *
 * @param int $i
 * @throws \Exception
 */
function customthrow(int $i): void
{
    if ($i < 6) {
        throw new \Exception("Value must be 6 or greater.");
    }
}

// Получаем параметр `i` из URL
$i = isset($_GET['i']) ? (int)$_GET['i'] : 6; // Устанавливаем значение по умолчанию (например, 6)

try {
    // Вызываем функцию customthrow
    customthrow($i);
    echo "No exception was thrown. Value: $i";
} catch (\Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
