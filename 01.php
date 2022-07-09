<?php

class Dog
{
    private int $dogAge;

    public function __construct(int $dogAge)
    {
        $this->dogAge = $dogAge;
    }

    public function convertToHumanYears(): int
    {
        return $this->dogAge * 7 + $this->dogAge;
    }
}

$doggie = new Dog(12);
echo $doggie->convertToHumanYears();