<?php

class AkmensŠķēresPapīrīts
{
    private static array $games = [['R', 'P'], ['P', 'R'], ['R', 'S']];

    public static function winner (): string
    {
        $benson = 0;
        $abigail = 0;
        foreach (self::$games as $game) {
            if ($game == ['P', 'R'] || $game == ['S', 'P'] || $game == ['R', 'S']) {
                $benson ++;
            } else if ($game == ['P', 'S'] || $game == ['S', 'R'] || $game == ['R', 'P']) {
                $abigail ++;
            }
        }
        if ($benson > $abigail) {
            return "Benson Won!";
        } else if ($abigail > $benson) {
            return  "Abigail Won!";
        } else return "It's a TIE";
    }
}

echo AkmensŠķēresPapīrīts::winner();