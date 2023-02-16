<?php
// This is your PHP file

// Get form data
$name = $_POST["name"];
$location = $_POST["location"];
$members = $_POST["members"];

// Create connection using mysqli
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vsla_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Write SQL query
$sql = "INSERT INTO vsla_form (name, location, members) VALUES ('$name', '$location', '$members')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
