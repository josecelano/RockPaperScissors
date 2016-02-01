<?php

namespace Test\first_iteration\if_solution;

use first_iteration\if_solution\RockPaperScissorsSolver;
use PHPUnit_Framework_TestCase;

class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function
    tie_when_both_gestures_are_equals()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::ROCK, RockPaperScissorsSolver::ROCK),
            "Tie."
        );
    }


    /** @test */
    public function
    say_rock_loses_against_paper()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::ROCK, RockPaperScissorsSolver::PAPER),
            "Rock loses against paper."
        );
    }

    /** @test */
    public function
    say_rock_wins_against_scissors()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::ROCK, RockPaperScissorsSolver::SCISSORS),
            "Rock wins against scissors."
        );
    }

    /** @test */
    public function
    say_paper_wins_against_rock()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::PAPER, RockPaperScissorsSolver::ROCK),
            "Paper wins against rock."
        );
    }

    /** @test */
    public function
    say_paper_loses_against_scissors()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::PAPER, RockPaperScissorsSolver::SCISSORS),
                "Paper loses against scissors."
        );
    }

    /** @test */
    public function
    say_scissors_lose_against_rock()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::SCISSORS, RockPaperScissorsSolver::ROCK),
            "Scissors lose against rock."
        );
    }

    /** @test */
    public function
    say_scissors_win_against_paper()
    {
        $this->assertEquals(
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::SCISSORS, RockPaperScissorsSolver::PAPER),
            "Scissors win against paper."
        );
    }
}
