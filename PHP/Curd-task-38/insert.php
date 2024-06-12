<?php
include 'db_config.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

$sql = "INSERT INTO users (first_name, last_name, email, phone_number) VALUES ('$first_name', '$last_name', '$email', '$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
