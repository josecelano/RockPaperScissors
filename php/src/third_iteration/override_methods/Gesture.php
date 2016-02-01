<?php

namespace third_iteration\override_methods;

class Gesture
{
    public static function ROCK()
    {
        return new Rock();
    }

    public static function PAPER()
    {
        return new Paper();
    }

    public static function SCISSORS()
    {
        return new Scissors();
    }
}
