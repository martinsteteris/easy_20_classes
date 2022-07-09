<?php
/**
 * Write a function that takes a two-digit number and determines, if it's the largest of two possible digit swaps.
 */

class DigitSwap
{
    private static int $number = 62;

    public static function checkDigitSwap (): bool
    {
        return self::$number > (int)strrev(self::$number);
    }
}

var_dump(DigitSwap::checkDigitSwap());