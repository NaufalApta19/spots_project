<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = "root"; // Default for XAMPP
$dbname = "expo_project"; // Ensure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
?>
