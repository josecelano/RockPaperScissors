package third_iteration.override_methods;

import third_iteration.override_methods.Gesture.*;

public class RockPaperScissorsSolver {

	public static <T extends Gesture> String solve(T leftGesture, T rightGesture) {
		return "Tie.";
	}

	public static String solve(Rock leftGesture, Paper rightGesture) {
		return "Rock loses against paper.";
	}

	public static String solve(Rock leftGesture, Scissors rightGesture) {
		return "Rock wins against scissors.";
	}

	public static String solve(Paper leftGesture, Rock rightGesture) {
		return "Paper wins against rock.";
	}

	public static String solve(Paper leftGesture, Scissors rightGesture) {
		return "Paper loses against scissors.";
	}

	public static String solve(Scissors leftGesture, Rock rightGesture) {
		return "Scissors lose against rock.";
	}

	public static String solve(Scissors leftGesture, Paper rightGesture) {
		return "Scissors win against paper.";
	}
}
