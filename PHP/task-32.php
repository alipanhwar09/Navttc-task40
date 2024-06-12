<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Generation</title>
</head>
<body>
    <h1>Pattern Generation using PHP</h1>

    <?php
    
    $i = 1;
    $n = 8; 

    
    while ($i <= $n) {
        $j = 1;
        
        while ($j <= $i) {
            echo "*";
            $j++;
        }
        
        echo "<br>";
        $i++;
    }
    ?>
</body>
</html>
