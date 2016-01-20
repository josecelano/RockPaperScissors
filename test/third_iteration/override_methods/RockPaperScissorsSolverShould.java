package third_iteration.override_methods;

import org.junit.Test;

import static org.hamcrest.core.Is.is;
import static org.junit.Assert.assertThat;
import static third_iteration.override_methods.Gesture.*;
import static third_iteration.override_methods.RockPaperScissorsSolver.solve;

public class RockPaperScissorsSolverShould {

	@Test
	public void tie_when_both_gestures_are_equals() {
		assertThat(solve(ROCK, ROCK), is("Tie."));
	}

	@Test
	public void say_rock_loses_against_paper() {
		assertThat(solve(ROCK, PAPER), is("Rock loses against paper."));
	}

	@Test
	public void say_rock_wins_against_scissors() {
		assertThat(solve(ROCK, SCISSORS), is("Rock wins against scissors."));
	}

	@Test
	public void say_paper_wins_against_rock() {
		assertThat(solve(PAPER, ROCK), is("Paper wins against rock."));
	}

	@Test
	public void say_paper_loses_against_scissors() {
		assertThat(solve(PAPER, SCISSORS), is("Paper loses against scissors."));
	}

	@Test
	public void say_scissors_lose_against_rock() {
		assertThat(solve(SCISSORS, ROCK), is("Scissors lose against rock."));
	}

	@Test
	public void say_scissors_win_against_paper() {
		assertThat(solve(SCISSORS, PAPER), is("Scissors win against paper."));
	}
}