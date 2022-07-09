<?php
/**
 * Create a function that takes an array of numbers and return both the minimum and maximum numbers, in that order in a new array.
 */

class MinMax
{
    private static array $numbers = [1, 5, 76, -4, 0, -156];

    public static function findMinMax (): array
    {
        return [min(self::$numbers), max(self::$numbers)];
    }
}
print_r(MinMax::findMinMax());