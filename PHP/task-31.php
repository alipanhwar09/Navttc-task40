<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculation</title>
</head>
<body>
    <h1>Factorial Calculator</h1>

    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);
        $factorial = 1;

        
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        echo "<h2>Factorial of $number is: $factorial</h2>";
    }
    ?>
</body>
</html>
