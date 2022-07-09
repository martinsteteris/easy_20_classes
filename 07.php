<?php

class Boxes
{
    private static array $boxes = [[2, 3, 2], [6, 6, 7], [1, 2, 1]];

    public static function calculateVolume (): int
    {
        $volume = 0;
        foreach (self::$boxes as $box){
            $volume += array_product($box);
        }
        return $volume;
    }
}
echo Boxes::calculateVolume();