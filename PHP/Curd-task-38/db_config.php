<?php
$host = "localhost"; // Change if necessary
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "user_information";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo "successfull";
// }
?>
