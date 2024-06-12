<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Day of the Week</title>
</head>
<body>
    <?php
        
        $dayOfWeek = date('l');

        switch ($dayOfWeek) {
            case 'Monday':
                echo "Today is Monday.";
                break;
            case 'Tuesday':
                echo "Today is Tuesday.";
                break;
            case 'Wednesday':
                echo "Today is Wednesday.";
                break;
            case 'Thursday':
                echo "Today is Thursday.";
                break;
            case 'Friday':
                echo "Today is Friday.";
                break;
            case 'Saturday':
                echo "Today is Saturday.";
                break;
            case 'Sunday':
                echo "Today is Sunday.";
                break;
            default:
                echo "Unable to determine the day of the week.";
                break;
        }
    ?>
</body>
</html>
