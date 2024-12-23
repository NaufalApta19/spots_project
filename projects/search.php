<?php
include 'connection.php'; // File koneksi database

// Ambil kategori dari form
$category_id = $_GET['category'] ?? '';

// Query untuk mencari destinasi berdasarkan kategori
$query = "SELECT * FROM destination WHERE category_id = '$category_id'";
$result = $conn->query($query);

// Tampilkan hasil
if ($result->num_rows > 0) {
    echo "<h2>Search Results:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['name'] . " - " . $row['description'] . "</p>";
    }
} else {
    echo "<p>No results found.</p>";
}
?>
