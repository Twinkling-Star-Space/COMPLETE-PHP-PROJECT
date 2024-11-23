
<?php

include 'Connectserver.php';

if($conn->connect_error)
{
    die ("Connection failed:". $conn->connect_error);
}

mysqli_select_db($conn, "NOV2202");

$row = $_POST["ROW"];



$query1 = "DELETE FROM MIN1 WHERE ID = $row";

if($conn->query($query1)==TRUE)
{
    echo " Your one is deleted!!";
}
else echo "Your data is as it is!!";

$conn->close();

?>
