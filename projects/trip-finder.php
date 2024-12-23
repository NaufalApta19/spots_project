<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Your Adventure</title>
    <link rel="stylesheet" href="../assets/css/shared-styles.css">
</head>
<body>

<header>
    <h1>Plan Your Adventure</h1>
</header>

<section id="trip-finder">
    <div class="trip-form">
        <h2>Submit Your Trip</h2>
        <form method="post" action="">
            <label for="location">Location:</label>
            <select id="location" name="location" required>
                <option value="">Select a destination</option>
                <option value="Yogyakarta">Yogyakarta</option>
                <option value="Bandung">Bandung</option>
                <option value="Bali">Bali</option>
            </select>

            <label for="type">Trip Type:</label>
            <select id="type" name="trip_type" required>
                <option value="">Select a trip type</option>
                <option value="adventure">Adventure</option>
                <option value="relaxation">Relaxation</option>
                <option value="cultural">Cultural</option>
                <option value="foodie">Foodie</option>
            </select>

            <label for="date">Travel Date:</label>
            <input type="date" id="date" name="travel_date" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <button type="submit">Submit</button>
        </form>

        <?php
        // Include the config file for database connection
        include('../admin/config.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $location = $_POST['location'];
            $trip_type = $_POST['trip_type'];
            $travel_date = $_POST['travel_date'];
            $email = $_POST['email'];

            // Prepare and execute the SQL query to insert the data
            $insert_query = "INSERT INTO trip_finder_submission (location, trip_type, travel_date, email) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $insert_query);
            mysqli_stmt_bind_param($stmt, 'ssss', $location, $trip_type, $travel_date, $email);
            mysqli_stmt_execute($stmt);

            // Check if the insertion was successful
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<p>Thank you! We will confirm to your email ($email) soon.</p>";
            } else {
                echo "<p>Error submitting your trip: " . mysqli_error($conn) . "</p>";
            }

            mysqli_stmt_close($stmt);
        }
        ?>
    </div>
</section>

</body>
</html>
