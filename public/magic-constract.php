<?php

class A {
    private string $a;

    public function __construct()
    {
        $this->a = "gg";
    }

    public function __get(string $name): mixed
    {
        if ($name === 'a') {
            return strtoupper($this->a);
        }
        throw new \Exception("Undefined property: " . $name);
    }
}

assert(
    "GG" == (new A)->a
);
echo "Все тесты пройдены успешно";