package second_iteration.map_solution;

import java.util.HashMap;
import java.util.Map;

import static second_iteration.map_solution.Gesture.*;

public class RockPaperScissorsSolver {

	private static final Map<Play, String> plays = new HashMap<>();
	static {
		plays.put(play(ROCK, ROCK), "Tie.");
		plays.put(play(ROCK, PAPER), "Rock loses against paper.");
		plays.put(play(ROCK, SCISSORS), "Rock wins against scissors.");
		plays.put(play(PAPER, ROCK), "Paper wins against rock.");
		plays.put(play(PAPER, PAPER), "Tie.");
		plays.put(play(PAPER, SCISSORS), "Paper loses against scissors.");
		plays.put(play(SCISSORS, ROCK), "Scissors lose against rock.");
		plays.put(play(SCISSORS, PAPER), "Scissors win against paper.");
		plays.put(play(SCISSORS, SCISSORS), "Tie.");
	}

	public static String solve(Gesture leftGesture, Gesture rightGesture) {
		return plays.get(play(leftGesture, rightGesture));
	}

	private static Play play(Gesture left, Gesture right) {
		return new Play(left, right);
	}

	private static class Play {
		private final Gesture left;
		private final Gesture right;

		public Play(Gesture left, Gesture right) {
			this.left = left;
			this.right = right;
		}

		@Override
		public boolean equals(Object obj) {
			return obj instanceof Play && left == ((Play) obj).left && right == ((Play) obj).right;
		}

		@Override
		public int hashCode() {
			return left.hashCode() * right.hashCode();
		}
	}
}
