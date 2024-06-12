<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lower Case String</title>
</head>
<body>
<?php
function isLowercase($str) {
    return $str === strtolower($str);
}

$string1 = "hello";
$string2 = "Hello";
$string3 = "HELLO";

echo isLowercase($string1) ? "String '$string1' is all lowercase." : "String '$string1' is not all lowercase."; 
echo "<br>";
echo isLowercase($string2) ? "String '$string2' is all lowercase." : "String '$string2' is not all lowercase."; 
echo "<br>";
echo isLowercase($string3) ? "String '$string3' is all lowercase." : "String '$string3' is not all lowercase."; 
?>

</body>
</html>