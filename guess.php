<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game 1bffd4a0</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>

    <?php
    // Define the correct answer
    $correct_answer = 57;
    $status_message = "";

    // Check if guess is set and is a valid integer
    if (isset($_GET['guess'])) {
        $guess = $_GET['guess'];

        if (!is_numeric($guess)) {
            $status_message = "Your guess is not a number.";
        } else if ($guess < $correct_answer) {
            $status_message = "Your guess is too low.";
        } else if ($guess > $correct_answer) {
            $status_message = "Your guess is too high.";
        } else {
            $status_message = "Congratulations - You are right!";
        }
    }
    ?>

    <p><?= htmlentities($status_message); ?></p>

    <form method="get">
        <label for="guess">Enter your guess:</label>
        <input type="text" name="guess" id="guess">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
