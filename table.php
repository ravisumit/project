<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE contact_details (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
COMPANY NAME VARCHAR(20) NOT NULL,
FIRST NAME VARCHAR(15) NOT NULL,
LAST NAME VARCHAR(15) NOT NULL,
PHONE int(10) NOT NULL,
EMAIL varchar(30) NOT NULL,
COMMENTS varchar(100) 
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Registration created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
