<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Specific Element from Array</title>
</head>
<body>
    <h1>Remove Specific Element from Array</h1>

    <?php
  
    $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

   
    $valueToDelete = "June";

   
    $filteredMonths = [];

    
    foreach ($months as $month) {
        
        if ($month !== $valueToDelete) {
            $filteredMonths[] = $month;
        }
    }

   
    echo "<h2>Original Array:</h2>";
    echo "<pre>";
    print_r($months);
    echo "</pre>";

    
    echo "<h2>Filtered Array (without '$valueToDelete'):</h2>";
    echo "<pre>";
    print_r($filteredMonths);
    echo "</pre>";
    ?>
</body>
</html>
