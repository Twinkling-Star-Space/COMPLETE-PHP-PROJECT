<?php
include 'Connectserver.php';

mysqli_select_db($conn, "NOV2202");

$query2 = "CREATE TABLE MIN1 (
    ID BIGINT(5) NOT NULL,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Gender VARCHAR(255) NOT NULL
)";

$conn->query($query2);

if (mysqli_query($conn, $query2)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
  $conn->close();
?>
