<?php

include 'Connectserver.php';

mysqli_select_db($conn, "NOV2202");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Fetch data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    // Validate and sanitize data (optional but recommended)
    $name = htmlspecialchars(strip_tags($name));
    $email = htmlspecialchars(strip_tags($email));
    $address= (int)$address;
    $id = (int)$id;
    $gender = htmlspecialchars(strip_tags($gender));

    // Prepare SQL query using prepared statements
    $stmt = $conn->prepare("INSERT INTO MIN1( id,name, email, address, gender) VALUES (?, ?, ?,?,?)");
    $stmt->bind_param("issss",$id, $name, $email, $address ,$gender); // "ssi" -> string, string, integer


    // Execute the query
    if ($stmt->execute()) {
        echo "<br> <br> YOUR ENTRY IS RECORDED SUCCESSFULLY!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

   $conn->close();
?>