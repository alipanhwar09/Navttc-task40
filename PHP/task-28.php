<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counting from 5 to 15</title>
</head>
<body>
    <h2>Using For Loop</h2>
    <p>
        <?php
        for ($i = 5; $i <= 15; $i++) {
            echo $i . " ";
        }
        ?>
    </p>

    <h2>Using While Loop</h2>
    <p>
        <?php
        $i = 5;
        while ($i <= 15) {
            echo $i . " ";
            $i++;
        }
        ?>
    </p>

    <h2>Using Do...While Loop</h2>
    <p>
        <?php
        $i = 5;
        do {
            echo $i . " ";
            $i++;
        } while ($i <= 15);
        ?>
    </p>
</body>
</html>
