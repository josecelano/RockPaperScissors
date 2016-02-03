<?php

declare(strict_types = 1);

namespace third_iteration\override_methods;

class Gesture
{
    public static function ROCK():Rock
    {
        return new Rock();
    }

    public static function PAPER():Paper
    {
        return new Paper();
    }

    public static function SCISSORS():Scissors
    {
        return new Scissors();
    }
}
