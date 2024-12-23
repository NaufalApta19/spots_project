

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SPOTS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="header">
    <h1>Admin Dashboard - SPOTS</h1>
</header>

<main class="main-content">

    <!-- Summary Section -->
    <section class="section">
        <h2>Overview</h2>
        <div class="summary">
            <div class="summary-card">
                <h3>Total Cities</h3>
                <p>7</p>
            </div>
            <div class="summary-card">
                <h3>Interests</h3>
                <p>Family, Food, Adventure</p>
            </div>
            <div class="summary-card">
                <h3>Total Messages</h3>
                <p>23</p>
            </div>
        </div>
    </section>

    <!-- Cities Data -->
    <section class="section">
        <h2>Cities and Interests</h2>
        <table>
            <thead>
                <tr>
                    <th>City</th>
                    <th>Interests</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Yogyakarta</td>
                    <td>Culture, Family Trip</td>
                    <td>Rich in tradition and heritage</td>
                </tr>
                <tr>
                    <td>Bandung</td>
                    <td>Food, Nature</td>
                    <td>Known for its culinary and scenic views</td>
                </tr>
            </tbody>
        </table>
    </section>

    <?php
    include('config.php');

    // Fetch contact messages
    $query = "SELECT * FROM contact";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error fetching data: " . mysqli_error($conn));
    }
    ?>

<section class="section">
    <h2>Contact Messages</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo isset($row['id']) ? htmlspecialchars($row['id']) : 'N/A'; ?></td>
                        <td><?php echo isset($row['name']) ? htmlspecialchars($row['name']) : 'N/A'; ?></td>
                        <td><?php echo isset($row['email']) ? htmlspecialchars($row['email']) : 'N/A'; ?></td>
                        <td><?php echo isset($row['message']) ? htmlspecialchars($row['message']) : 'N/A'; ?></td>
                        <td><?php echo isset($row['date']) ? htmlspecialchars($row['date']) : 'N/A'; ?></td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="5">No messages found.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<section class="section">
    <h2>Trip Finder Submissions</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Location</th>
                <th>Trip Type</th>
                <th>Travel Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $trips_query = "SELECT * FROM trip_finder_submission";
            $trips_result = mysqli_query($conn, $trips_query);

            if ($trips_result) {
                while ($trip = mysqli_fetch_assoc($trips_result)) {
                    echo "<tr>";
                    echo "<td>" . (isset($trip['id']) ? htmlspecialchars($trip['id']) : 'N/A') . "</td>";
                    echo "<td>" . (isset($trip['location']) ? htmlspecialchars($trip['location']) : 'N/A') . "</td>";
                    echo "<td>" . (isset($trip['trip_type']) ? htmlspecialchars($trip['trip_type']) : 'N/A') . "</td>";
                    echo "<td>" . (isset($trip['travel_date']) ? htmlspecialchars($trip['travel_date']) : 'N/A') . "</td>";
                    echo "<td>Pending Review</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No submissions found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</section>