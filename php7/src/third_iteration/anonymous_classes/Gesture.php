<?php

declare(strict_types = 1);

namespace third_iteration\anonymous_classes;

abstract class Gesture
{
    abstract function againstRock():string;

    abstract function againstPaper():string;

    abstract function againstScissors():string;

    abstract function compare(Gesture $gesture):string;

    public static function ROCK():Gesture
    {
        return new class() extends Gesture
        {
            public function againstRock():string
            {
                return "Tie.";
            }

            public function againstPaper():string
            {
                return "Paper wins against rock.";
            }

            public function againstScissors():string
            {
                return "Scissors lose against rock.";
            }

            public function compare(Gesture $gesture):string
            {
                return $gesture->againstRock();
            }
        };
    }

    public static function PAPER():Gesture
    {
        return new class() extends Gesture
        {
            public function againstRock():string
            {
                return "Rock loses against paper.";
            }

            public function againstPaper():string
            {
                return "Tie.";
            }

            public function againstScissors():string
            {
                return "Scissors win against paper.";
            }

            public function compare(Gesture $gesture):string
            {
                return $gesture->againstPaper();
            }
        };
    }

    public static function SCISSORS():Gesture
    {
        return new class() extends Gesture
        {
            public function againstRock():string
            {
                return "Rock wins against scissors.";
            }

            public function againstPaper():string
            {
                return "Paper loses against scissors.";
            }

            public function againstScissors():string
            {
                return "Tie.";
            }

            public function compare(Gesture $gesture):string
            {
                return $gesture->againstScissors();
            }
        };
    }
}