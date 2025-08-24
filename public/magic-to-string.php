<?php

class A {
    public function __toString(): string
    {
        return "GG";
    }
}

assert(
    "GGGG" == 
    (new A) . (new A)
);
echo "Все тесты пройдены успешно";