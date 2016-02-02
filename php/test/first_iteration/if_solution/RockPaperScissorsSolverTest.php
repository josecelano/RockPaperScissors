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
            "Tie.",
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::ROCK, RockPaperScissorsSolver::ROCK)
        );
    }

    /** @test */
    public function
    say_rock_loses_against_paper()
    {
        $this->assertEquals(
            "Rock loses against paper.",
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::ROCK, RockPaperScissorsSolver::PAPER)
        );
    }

    /** @test */
    public function
    say_rock_wins_against_scissors()
    {
        $this->assertEquals(
            "Rock wins against scissors.",
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::ROCK, RockPaperScissorsSolver::SCISSORS)
        );
    }

    /** @test */
    public function
    say_paper_wins_against_rock()
    {
        $this->assertEquals(
            "Paper wins against rock.",
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::PAPER, RockPaperScissorsSolver::ROCK)
        );
    }

    /** @test */
    public function
    say_paper_loses_against_scissors()
    {
        $this->assertEquals(
            "Paper loses against scissors.",
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::PAPER, RockPaperScissorsSolver::SCISSORS)
        );
    }

    /** @test */
    public function
    say_scissors_lose_against_rock()
    {
        $this->assertEquals(
            "Scissors lose against rock.",
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::SCISSORS, RockPaperScissorsSolver::ROCK)
        );
    }

    /** @test */
    public function
    say_scissors_win_against_paper()
    {
        $this->assertEquals(
            "Scissors win against paper.",
            RockPaperScissorsSolver::solve(RockPaperScissorsSolver::SCISSORS, RockPaperScissorsSolver::PAPER)
        );
    }
}
