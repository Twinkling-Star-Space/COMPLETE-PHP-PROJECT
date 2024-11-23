<?php
// SERVER CONNECTION
include 'Connectserver.php';

// DATABASE CREATION
$query1 = "CREATE DATABASE NOV2202";


if ($conn->query($query1) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
