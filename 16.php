<?php
/**
 * You and your friends are visiting a huge cave and one of you decides to yell "Hello". To your surprise the cave answers.
 * Create a function that takes two parameters the first parameter is the string to be repeated and the second
 * parameter is the number of times the string is to be repeated.
 */

class Cave
{
    private static string $word = "he";
    private static int $repeats = 999;

    public static function echo (): string
    {
        return str_repeat(self::$word, self::$repeats);
    }
}
echo Cave::echo();