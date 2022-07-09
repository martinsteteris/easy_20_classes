<?php

class Person
{
    private string $name;
    private int $age;
    private float $budget;

    public function __construct(string $name, int $age, float $budget)
    {
        $this->name = $name;
        $this->age = $age;
        $this->budget = $budget;
    }

    public static function calculateFamilyBudget (array $people): float
    {
        $familyBudget = 0;
        /** @var Person $person*/
        foreach ($people as $person) {
            $familyBudget += $person->budget;
        }
        return $familyBudget/100;
    }
}
$family = [
    new Person("Mom", 45, 25000),
    new Person("Dad", 50, 50000),
    new Person("Sis", 22, 10000),
    new Person("Bro", 15, 5000),
    new Person("Me", 18, 69420),
];

echo number_format(Person::calculateFamilyBudget($family),2);