<?php
/**
 * There's a great war between the even and odd numbers.
 * Many numbers already lost their life in this war and it's your task to end this.
 * You have to determine which group is larger: the even, or the odd. The larger group wins.
 * Create a function that takes an array of integers, sums the even and odd numbers seperately,
 * then returns "Odd numbers win by X" or "Even numbers win by X", X is survivors.
 * If both groups are equal, return "There are no winners"
 */

/*function warOfNumbers(numbers: number[]) { }

export { warOfNumbers };*/

class Numbers
{
    private static array $numbers = [1, 23, 44, 12, 29, 15, 12];

    public static function determineWinner (): string
    {
        $even = 0;
        $odd = 0;
        foreach (self::$numbers as $number) {
            $number % 2 == 0 ? $even += $number : $odd += $number;
        }
        if ($even > $odd) {
            return "Even numbers win by " . ($even - $odd) . PHP_EOL;
        } else if ($odd > $even) {
            return "Odd numbers win by " . ($odd - $even) . PHP_EOL;
        } else {
            return "There are no winners";
        }
    }
}

echo Numbers::determineWinner();