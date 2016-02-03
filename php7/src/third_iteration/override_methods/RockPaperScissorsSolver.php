<?php

declare(strict_types = 1);

namespace third_iteration\override_methods;

class RockPaperScissorsSolver
{
    /**
     * @param Gesture $leftGesture
     * @param Gesture $rightGesture
     * @return string
     */
    public static function solve(Gesture $leftGesture, Gesture $rightGesture):string
    {
        // PHP does not support overloading so we have to do the mapping to the right method.
        $methodName = 'solve' . self::getShortClassName($leftGesture) . 'Against' . self::getShortClassName($rightGesture);
        return self::$methodName();
    }

    /**
     * @return string
     */
    private static function solveRockAgainstRock():string
    {
        return "Tie.";
    }

    /**
     * @return string
     */
    private static function solveRockAgainstPaper():string
    {
        return "Rock loses against paper.";
    }

    /**
     * @return string
     */
    private static function solveRockAgainstScissors():string
    {
        return "Rock wins against scissors.";
    }

    /**
     * @return string
     */
    private static function solvePaperAgainstRock():string
    {
        return "Paper wins against rock.";
    }

    /**
     * @return string
     */
    private static function solvePaperAgainstPaper():string
    {
        return "Tie.";
    }

    /**
     * @return string
     */
    private static function solvePaperAgainstScissors():string
    {
        return "Paper loses against scissors.";
    }

    /**
     * @return string
     */
    private static function solveScissorsAgainstRock():string
    {
        return "Scissors lose against rock.";
    }

    /**
     * @return string
     */
    private static function solveScissorsAgainstPaper():string
    {
        return "Scissors win against paper.";
    }

    /**
     * @return string
     */
    private static function solveScissorsAgainstScissors():string
    {
        return "Tie.";
    }

    /**
     * @param $object
     * @return string
     */
    private static function getShortClassName($object):string
    {
        $path = explode('\\', get_class($object));
        return array_pop($path);
    }
}
