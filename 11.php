<?php
/**
 * You have decided to teach programming at a kindergarten, but you cannot understand half of what the children are saying.
 * Write a function that reverses all the words in a sentence that start with a particular letter.
 */

//function kindergarten(sentence: string, letter: string) { }
//
//export { kindergarten };

class Kindergarten
{
    private static string $sentence = "First nam to walk on the noom";

    public static function translateToAdult (string $letter): string
    {
        $arr = explode(' ', self::$sentence);
        for ($i = 0; $i < count($arr); $i++) {
            if (substr($arr[$i], 0, 1) == $letter) {
                $arr[$i] = strrev($arr[$i]);
            }
        }
        return implode(' ', $arr);
    }
}

echo Kindergarten::translateToAdult('n');