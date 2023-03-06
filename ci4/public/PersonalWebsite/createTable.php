<?php
$servername = "localhost";
$username = "webprogmi212";
$password = "webprogmi212";
$dbname = "alcabildo2_Guests";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE table1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
website VARCHAR(30) NOT NULL,
comment VARCHAR(50),
gender VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table table1 created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>