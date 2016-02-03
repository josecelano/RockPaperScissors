<?php

declare(strict_types = 1);

namespace third_iteration\anonymous_classes;

class RockPaperScissorsSolver
{
    public static function solve(Gesture $leftGesture, Gesture $rightGesture):string
    {
        return $leftGesture->compare($rightGesture);
    }
}