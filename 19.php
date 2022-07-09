<?php
/**
 * You have decided that you are an expert of love and want to start a dating service.
 * Given an array of women and an array of men,
 * return an array of pairs, with the first woman paired with the first man, second woman paired with the second man, etc.
 * If the array sizes don't match, return "Cupid is on vacation"
 */

class MatchMaker
{
    private static array $men = ['Ben', 'John', 'Rick', 'Morty'];
    private static array $women = ['Katy', 'Jane', 'Gaia', 'Jessica'];

    public static function matches (): void
    {
        $matches = [];
        if (count(self::$men == count(self::$women))) {
            for ($i = 0; $i < count(self::$men); $i++) {
                $matches[] = [self::$men[$i], self::$women[$i]];
            }
            print_r($matches) ;
        } else echo "Cupid is on vacation";
    }
}

MatchMaker::matches();