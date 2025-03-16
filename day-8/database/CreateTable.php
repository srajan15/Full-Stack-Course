<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbName";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyEntery (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(30) NOT NULL,
email VARCHAR(50),
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyEntery created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
