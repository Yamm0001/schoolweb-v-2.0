<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$startdate = $_POST['sd'];
$name = $_POST['name'];
$bd = $_POST['bd'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$osVersion = $_POST['osVersion'];

// Insert data into database
$sql = "INSERT INTO users (sd ,name ,email ,age ,phone ,bd ,gender ,os_version) VALUES ('$startdate', $name', '$email', '$age', '$phone', '$bd', '$gender', '$osVersion')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful!'); window.location.href = '../from.php';</script>";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>