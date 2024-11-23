<?php
include 'Connectserver.php';

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, "NOV2202");

$query = "ALTER TABLE MIN1 ADD PRIMARY KEY (ID)";

if($conn->query($query)==TRUE) 
{
    echo "Primary key successfully added to your table.";
} else {
    echo "Error adding primary key: " . mysqli_error($conn);
}

$conn->close();
?>
