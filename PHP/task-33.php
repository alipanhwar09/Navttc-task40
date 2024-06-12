<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count from 1 to 5</title>
</head>
<body>
    <h1>Counting numbers using PHP do while Loop</h1>

    <?php
   
    $i = 1;

    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 5);
    ?>
</body>
</html>
