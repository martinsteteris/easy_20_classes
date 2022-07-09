<?php

class Burglary
{
    public static array $stolenItems = ['PC', 'A fancy hat', 'Cat', 'Picture of your mother'];

    public static function countStolenItems (): int
    {
        return count(self::$stolenItems);
    }
}

echo Burglary::countStolenItems();
