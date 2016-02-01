<?php

namespace Test\second_iteration\map_solution;

use second_iteration\map_solution\Gesture;
use second_iteration\map_solution\RockPaperScissorsSolver;
use PHPUnit_Framework_TestCase;

class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function
    tie_when_both_gestures_are_equals()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(Gesture::ROCK, Gesture::ROCK),
            "Tie."
        );
    }

    /** @test */
    public function
    say_rock_loses_against_paper()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(Gesture::ROCK, Gesture::PAPER),
            "Rock loses against paper."
        );
    }

    /** @test */
    public function
    say_rock_wins_against_scissors()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(Gesture::ROCK, Gesture::SCISSORS),
            "Rock wins against scissors."
        );
    }

    /** @test */
    public function
    say_paper_wins_against_rock()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(Gesture::PAPER, Gesture::ROCK),
            "Paper wins against rock."
        );
    }

    /** @test */
    public function
    say_paper_loses_against_scissors()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(Gesture::PAPER, Gesture::SCISSORS),
            "Paper loses against scissors."
        );
    }

    /** @test */
    public function
    say_scissors_lose_against_rock()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(Gesture::SCISSORS, Gesture::ROCK),
            "Scissors lose against rock."
        );
    }

    /** @test */
    public function
    say_scissors_win_against_paper()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(Gesture::SCISSORS, Gesture::PAPER),
            "Scissors win against paper."
        );
    }
}
