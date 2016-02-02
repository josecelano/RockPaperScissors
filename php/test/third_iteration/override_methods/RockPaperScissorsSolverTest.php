<?php

namespace Test\third_iteration\override_solution;

use PHPUnit_Framework_TestCase;
use third_iteration\override_methods\Gesture;
use third_iteration\override_methods\RockPaperScissorsSolver;

class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function
    tie_when_both_gestures_are_equals()
    {
        $this->assertEquals(
            "Tie.",
            RockPaperScissorsSolver::solve(Gesture::ROCK(), Gesture::ROCK())
        );
        $this->assertEquals(
            "Tie.",
            RockPaperScissorsSolver::solve(Gesture::PAPER(), Gesture::PAPER())
        );
        $this->assertEquals(
            "Tie.",
            RockPaperScissorsSolver::solve(Gesture::SCISSORS(), Gesture::SCISSORS())
        );
    }

    /** @test */
    public function
    say_rock_loses_against_paper()
    {
        $this->assertEquals(
            "Rock loses against paper.",
            RockPaperScissorsSolver::solve(Gesture::ROCK(), Gesture::PAPER())
        );
    }

    /** @test */
    public function
    say_rock_wins_against_scissors()
    {
        $this->assertEquals(
            "Rock wins against scissors.",
            RockPaperScissorsSolver::solve(Gesture::ROCK(), Gesture::SCISSORS())
        );
    }

    /** @test */
    public function
    say_paper_wins_against_rock()
    {
        $this->assertEquals(
            "Paper wins against rock.",
            RockPaperScissorsSolver::solve(Gesture::PAPER(), Gesture::ROCK())
        );
    }

    /** @test */
    public function
    say_paper_loses_against_scissors()
    {
        $this->assertEquals(
            "Paper loses against scissors.",
            RockPaperScissorsSolver::solve(Gesture::PAPER(), Gesture::SCISSORS())
        );
    }

    /** @test */
    public function
    say_scissors_lose_against_rock()
    {
        $this->assertEquals(
            "Scissors lose against rock.",
            RockPaperScissorsSolver::solve(Gesture::SCISSORS(), Gesture::ROCK())
        );
    }

    /** @test */
    public function
    say_scissors_win_against_paper()
    {
        $this->assertEquals(
            "Scissors win against paper.",
            RockPaperScissorsSolver::solve(Gesture::SCISSORS(), Gesture::PAPER())
        );
    }
}
