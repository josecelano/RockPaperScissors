package third_iteration.override_methods;

public class Gesture {

	public static final Rock ROCK = new Rock();
	public static final Paper PAPER = new Paper();
	public static final Scissors SCISSORS = new Scissors();

	private Gesture() {
	}

	static class Rock extends Gesture {
		private Rock() { }
	}
	static class Paper extends Gesture {
		private Paper() { }
	}
	static class Scissors extends Gesture {
		private Scissors() { }
	}
}
