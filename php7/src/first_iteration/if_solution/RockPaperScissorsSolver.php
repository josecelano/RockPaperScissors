<?php

declare(strict_types = 1);

namespace first_iteration\if_solution;

class RockPaperScissorsSolver
{
    const ROCK = "rock";
    const PAPER = "paper";
    const SCISSORS = "scissors";

    /**
     * @param string $leftGesture
     * @param string $rightGesture
     * @return string
     * @throws UnsupportedOperationException
     */
    public static function solve(string $leftGesture, string $rightGesture):string
    {
        if ($leftGesture == $rightGesture) {
            return "Tie.";
        }
        if (self::isRock($leftGesture)) {
            return self::againstRock($rightGesture);
        }
        if (self::isPaper($leftGesture)) {
            return self::againstPaper($rightGesture);
        }
        if (self::isScissors($leftGesture)) {
            return self::againstScissors($rightGesture);
        }
        throw new UnsupportedOperationException("Invalid gesture.");
    }

    /**
     * @param string $gesture
     * @return string
     */
    private static function againstRock(string $gesture):string
    {
        if (self::isPaper($gesture)) {
            return "Rock loses against paper.";
        }
        if (self::isScissors($gesture)) {
            return "Rock wins against scissors.";
        }
        throw new UnsupportedOperationException("Invalid gesture.");
    }

    /**
     * @param string $gesture
     * @return string
     */
    private static function againstPaper(string $gesture):string
    {
        if (self::isRock($gesture)) {
            return "Paper wins against rock.";
        }
        if (self::isScissors($gesture)) {
            return "Paper loses against scissors.";
        }
        throw new UnsupportedOperationException("Invalid gesture.");
    }

    /**
     * @param string $gesture
     * @return string
     */
    private static function againstScissors(string $gesture):string
    {
        if (self::isRock($gesture)) {
            return "Scissors lose against rock.";
        }
        if (self::isPaper($gesture)) {
            return "Scissors win against paper.";
        }
        throw new UnsupportedOperationException("Invalid gesture.");
    }

    /**
     * @param string $gesture
     * @return bool
     */
    private static function isRock(string $gesture):bool
    {
        return $gesture == self::ROCK;
    }

    /**
     * @param string $gesture
     * @return bool
     */
    private static function isPaper(string $gesture):bool
    {
        return $gesture == self::PAPER;
    }

    /**
     * @param string $gesture
     * @return bool
     */
    private static function isScissors(string $gesture):bool
    {
        return $gesture == self::SCISSORS;
    }
}
