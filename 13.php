<?php

class Clock
{
    private static int $seconds = 100000;

    public static function formatTime ()
    {
        return gmdate("H:i:s", self::$seconds);
    }
}

echo Clock::formatTime();