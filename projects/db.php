<?php
// Database configuration
$servername = "localhost";  // your database server, usually localhost
$username = "root";         // your MySQL username
$password = "";             // your MySQL password (empty by default for XAMPP)
$dbname = "spots_project";          // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";  // Optional: Uncomment to check if connection works
?>
