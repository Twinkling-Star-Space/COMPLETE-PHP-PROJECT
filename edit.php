
<?php

include 'Connectserver.php';
if($conn->connect_error)
{
    die ("Connection failed:". $conn->connect_error);
}

mysqli_select_db($conn, "NOV2202");


$query1 = "UPDATE MIN1 SET name='Aayansh' WHERE id = 2";

if($conn->query($query1)==TRUE)
{
    echo "<br> YOUR TABLE DATA IS UPDATED";
}
else echo "<br>There was problem while updating";

$conn->close();

?>
