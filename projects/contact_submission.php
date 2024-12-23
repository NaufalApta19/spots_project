<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "expo_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

echo "<h1>Contact Us Submissions</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Submitted At</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['message']}</td>
                <td>{$row['submitted_at']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No submissions found.";
}

$conn->close();
?>
