<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "form");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to count the number of records in the table
$sql = "SELECT COUNT(*) AS total FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["total"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>
