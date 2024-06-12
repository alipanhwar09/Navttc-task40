<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
</head>
<body>
    <h1>Sort Array</h1>
<?php
   
    function customSort(&$array) {
    sort($array);
}


$numbers = [4, 2, 7, 1, 9, 5];
customSort($numbers);
print_r($numbers); 
?>

</body>
</html>