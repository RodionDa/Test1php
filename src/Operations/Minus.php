<?php

namespace App\Operations;

use App\Interfaces\OperationInterface;

class Minus implements OperationInterface
{
    private float $a;
    private float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculate(int $firstNumber, int $secondNumber): float
    {
        return $this->a - $this->b;
    }
}
