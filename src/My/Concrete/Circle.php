<?php

namespace App\My\Concrete;

use App\My\Abstract\AbstractFigure;

class Circle extends AbstractFigure
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
}
