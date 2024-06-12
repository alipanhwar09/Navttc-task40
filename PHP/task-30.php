<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Based on Time</title>
</head>
<body>
    <h1>
        <?php
            
            $currentHour = date('H'); 

            
            if ($currentHour < 12) {
                echo "Good Morning";
            } else {
                echo "Good Afternoon";
            }
        ?>
    </h1>
</body>
</html>
