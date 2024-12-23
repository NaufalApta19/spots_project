<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "expo_project";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$feedback = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    
    $query = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
        $feedback = "Message sent successfully!";
    } else {
        $feedback = "Error inserting data: " . mysqli_error($conn);
    }
}

$conn->close(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | SPOTS</title>
    <link rel="stylesheet" href="../assets/css/shared.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="destination.php">Destination</a></li>
                <li><a href="interest.php">Interest</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-section">
            <h2>We'd Love to Hear from You!</h2>
            <p>If you have any questions, suggestions, or need more information about Yogyakarta, feel free to contact us. We'll get back to you as soon as possible!</p>

            <?php if (!empty($feedback)) { echo "<p class='feedback'>$feedback</p>"; } ?>

            <form action="contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message" rows="4" required></textarea>
                </div>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Travel Yogyakarta. All rights reserved.</p>
    </footer>
</body>
</html>
