package first_iteration.if_solution;

public class RockPaperScissorsSolver {

	public static final String ROCK = "rock";
	public static final String PAPER = "paper";
	public static final String SCISSORS = "scissors";

	public static String solve(String leftGesture, String rightGesture) {
		if (leftGesture.equals(rightGesture)) {
			return "Tie.";
		}
		if (isRock(leftGesture)) {
			return againstRock(rightGesture);
		}
		if (isPaper(leftGesture)) {
			return againstPaper(rightGesture);
		}
		if (isScissors(leftGesture)) {
			return againstScissors(rightGesture);
		}
		throw new UnsupportedOperationException("Invalid gesture.");
	}

	private static String againstRock(String gesture) {
		if (isPaper(gesture)) {
			return "Rock loses against paper.";
		}
		if (isScissors(gesture)) {
			return "Rock wins against scissors.";
		}
		throw new UnsupportedOperationException("Invalid gesture.");
	}

	private static String againstPaper(String gesture) {
		if (isRock(gesture)) {
			return "Paper wins against rock.";
		}
		if (isScissors(gesture)) {
			return "Paper loses against scissors.";
		}
		throw new UnsupportedOperationException("Invalid gesture.");
	}


	private static String againstScissors(String gesture) {
		if (isRock(gesture)) {
			return "Scissors lose against rock.";
		}
		if (isPaper(gesture)) {
			return "Scissors win against paper.";
		}
		throw new UnsupportedOperationException("Invalid gesture.");
	}

	private static boolean isRock(String gesture) {
		return gesture.equals(ROCK);
	}

	private static boolean isPaper(String gesture) {
		return gesture.equals(PAPER);
	}

	private static boolean isScissors(String gesture) {
		return gesture.equals(SCISSORS);
	}
}
