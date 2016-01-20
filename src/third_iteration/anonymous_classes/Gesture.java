package third_iteration.anonymous_classes;

public interface Gesture {

	Gesture ROCK = new Gesture() {
		@Override
		public String againstRock() {
			return "Tie.";
		}

		@Override
		public String againstPaper() {
			return "Paper wins against rock.";
		}

		@Override
		public String againstScissors() {
			return "Scissors lose against rock.";
		}

		@Override
		public String compare(Gesture gesture) {
			return gesture.againstRock();
		}
	};
	Gesture PAPER = new Gesture() {
		@Override
		public String againstRock() {
			return "Rock loses against paper.";
		}

		@Override
		public String againstPaper() {
			return "Tie.";
		}

		@Override
		public String againstScissors() {
			return "Scissors win against paper.";
		}

		@Override
		public String compare(Gesture gesture) {
			return gesture.againstPaper();
		}
	};
	Gesture SCISSORS = new Gesture() {
		@Override
		public String againstRock() {
			return "Rock wins against scissors.";
		}

		@Override
		public String againstPaper() {
			return "Paper loses against scissors.";
		}

		@Override
		public String againstScissors() {
			return "Tie.";
		}

		@Override
		public String compare(Gesture gesture) {
			return gesture.againstScissors();
		}
	};

	String againstRock();
	String againstPaper();
	String againstScissors();
	String compare(Gesture gesture);
}
