<?php

namespace App\Operations;

use App\Interfaces\OperationInterface;

class Div implements OperationInterface
{
    private float $a;
    private float $b;

    public function __construct(float $a, float $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        $this->a = $a;
        $this->b = $b;
    }

    public function calculate(int $firstNumber, int $secondNumber): float
    {
        return $this->a / $this->b;
    }
}
