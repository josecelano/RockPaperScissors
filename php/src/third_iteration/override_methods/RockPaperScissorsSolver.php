<?php

namespace third_iteration\override_methods;

class RockPaperScissorsSolver
{
    /**
     * @param Gesture $leftGesture
     * @param Gesture $rightGesture
     * @return string
     */
    public static function solve($leftGesture, $rightGesture)
    {
        // PHP does not support overloading so we have to do the mapping to the right method.
        $methodName = 'solve' . self::getShortClassName($leftGesture) . 'Against' . self::getShortClassName($rightGesture);
        return self::$methodName();
    }

    /**
     * @return string
     */
    private static function solveRockAgainstRock()
    {
        return "Tie.";
    }

    /**
     * @return string
     */
    private static function solveRockAgainstPaper()
    {
        return "Rock loses against paper.";
    }

    /**
     * @return string
     */
    private static function solveRockAgainstScissors()
    {
        return "Rock wins against scissors.";
    }

    /**
     * @return string
     */
    private static function solvePaperAgainstRock()
    {
        return "Paper wins against rock.";
    }

    /**
     * @return string
     */
    private static function solvePaperAgainstPaper()
    {
        return "";
    }

    /**
     * @return string
     */
    private static function solvePaperAgainstScissors()
    {
        return "Paper loses against scissors.";
    }

    /**
     * @return string
     */
    private static function solveScissorsAgainstRock()
    {
        return "Scissors lose against rock.";
    }

    /**
     * @return string
     */
    private static function solveScissorsAgainstPaper()
    {
        return "Scissors win against paper.";
    }

    /**
     * @return string
     */
    private static function solveScissorsAgainstScissors()
    {
        return "";
    }

    /**
     * @param $object
     * @return string
     */
    private
    static function getShortClassName($object)
    {
        $path = explode('\\', get_class($object));
        return array_pop($path);
    }
}
