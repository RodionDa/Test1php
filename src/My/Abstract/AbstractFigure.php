<?php

namespace App\My\Abstract;

// Абстрактный класс Figure
abstract class AbstractFigure
{
    // Абстрактные методы для вычисления площади и периметра
    abstract public function getArea(): float;
    abstract public function getPerimeter(): float;

    // Метод для вывода информации о фигуре
    public function displayInfo(): void
    {
        echo "Тип фигуры: " . (new \ReflectionClass($this))->getShortName() . "<br>";
        echo "Площадь: " . $this->getArea() . "<br>";
        echo "Периметр: " . $this->getPerimeter() ."<br>";
        echo str_repeat("-", 30) . "<br>";
    }
}