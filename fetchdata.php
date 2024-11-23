<?php 

include 'connectserver.php';

if ($conn->connect_error) 
{ 
	die("Connection failed: " . $conn->connect_error); 
} 


mysqli_select_db($conn, "NOV2202");
 
$query = "SELECT * FROM `MIN1`"; 

// FETCHING DATA FROM DATABASE 
$result = $conn->query($query); 

	if ($result->num_rows > 0) 
	{ 
		// OUTPUT DATA OF EACH ROW 
		while($row = $result->fetch_assoc()) 
		{ 
			echo "ID " .
                 $row["id"] .
				"| Name: " . $row["Name"].  
                " | Address: " .$row["Address"].  
                " | Email: " . $row["Email"].
				 "|Gender:". $row["Gender"]. "<br>"; 
		} 
	} 
	else { 
		echo "0 results"; 
	} 

$conn->close(); 

?>
