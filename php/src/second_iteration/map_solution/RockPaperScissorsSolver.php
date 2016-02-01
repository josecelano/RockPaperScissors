<?php

namespace second_iteration\map_solution;

class RockPaperScissorsSolver
{

    private static $plays = null;

    /**
     * @return string[]
     */
    public static function plays()
    {
        if (self::$plays == null) {
            self::$plays = array(
                Gesture::ROCK . Gesture::ROCK => "Tie.",
                Gesture::ROCK . Gesture::PAPER => "Rock loses against paper.",
                Gesture::ROCK . Gesture::SCISSORS => "Rock wins against scissors.",
                Gesture::PAPER . Gesture::ROCK => "Paper wins against rock.",
                Gesture::PAPER . Gesture::PAPER => "Tie.",
                Gesture::PAPER . Gesture::SCISSORS => "Paper loses against scissors.",
                Gesture::SCISSORS . Gesture::ROCK => "Scissors lose against rock.",
                Gesture::SCISSORS . Gesture::PAPER => "Scissors win against paper.",
                Gesture::SCISSORS . Gesture::SCISSORS => "Tie.",
            );
        }
        return self::$plays;
    }

    /**
     * @param Play $play
     * @return string
     */
    public static function getPlay(Play $play)
    {
        return self::plays()[(string)$play];
    }

    /**
     * @param string $leftGesture
     * @param string $rightGesture
     * @return string
     */
    public static function solve($leftGesture, $rightGesture)
    {
        return self::getPlay(self::play($leftGesture, $rightGesture));
    }

    /**
     * @param string $left
     * @param string $right
     * @return Play
     */
    private static function play($left, $right)
    {
        return new Play($left, $right);
    }
}
