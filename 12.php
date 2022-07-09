<?php
/**
 * You have made a virtual onion and want to peel off the outer layer.
 * Given an array of arrays, return a new array of arrays containing every element, except for the outer elements.
 *
 * Example:
 *
 * Input:
[
["a", "b", "c", "d"],
["e", "f", "g", "h"],
["i", "j", "k", "l"],
["m", "n", "o", "p"]
]
 * Output:
[
["f", "g"],
["j", "k"]
]
 */

/*function peelTheOnion(onion: (string | number)[][]) { }

export { peelTheOnion };
Footer*/

class OnionPeeler
{
    private static array $onion = [
        ["a", "b", "c", "d"],
        ["e", "f", "g", "h"],
        ["i", "j", "k", "l"],
        ["m", "n", "o", "p"]
    ];
    public static function peel (): array
    {
        array_shift(self::$onion);
        array_pop(self::$onion);
        for ($i = 0; $i < count(self::$onion); $i++) {
                array_shift(self::$onion[$i]);
                array_pop(self::$onion[$i]);
        }
        return self::$onion;
    }
}

print_r(OnionPeeler::peel());