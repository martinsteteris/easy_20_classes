<?php

class Person
{
    private static array $people = ['John', 'Benny', 'John', 'Mary', 'John', 'Don', 'Benny', 'Mary'];

    public static function clearList (): array
    {
        return array_unique(self::$people);
    }
}

print_r(Person::clearList());