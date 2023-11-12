<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial, sans-serif">
    <link rel="stylesheet" type="text/css" href="cancellation.css">
    <title>Air Canada - Cancellation</title>
    <script>
        // Function to show a pop-up message
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cancellation.php">Cancellation</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="discover.php">Discover</a></li>
            </ul>
        </nav>
        <div class="cancellation-container">
        <img src="air_canada_logo.png" alt="Air Canada logo" width="100" height="50">
            <h1>Cancellation Page</h1>
        </div>
    </header>

    <div class="cancellation-content">
        <?php
        $confirmationMessage = '';

        try {
            // Database Connection
            $pdo = new PDO("pgsql:host=localhost;port=5433;dbname=AirCanada;user=postgres;password=mydatabase");

            // Check if the "Cancel Flight" button is clicked
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancel_flight'])) {
                $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
                $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
                $flight_reference = filter_input(INPUT_POST, 'flight_reference', FILTER_SANITIZE_STRING);

                // Prepare and execute a query to delete the flight reservation using a prepared statement
                $query = "DELETE FROM reservations WHERE first_name = :first_name AND last_name = :last_name AND flight_reference = :flight_reference";
                $stmt = $pdo->prepare($query);

                // Bind parameters
                $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
                $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
                $stmt->bindParam(':flight_reference', $flight_reference, PDO::PARAM_STR);

                // Check if the deletion was successful
                if ($stmt->execute()) {
                    $confirmationMessage = 'Flight deleted successfully!';
                    // Call JavaScript function to show the pop-up message
                    echo "<script>showAlert('$confirmationMessage');</script>";
                } else {
                    $confirmationMessage = 'Failed to delete the flight. Please try again.';
                }
            }
        } catch (PDOException $e) {
            error_log("Database Error: " . $e->getMessage());
        }
        ?>

        <!-- Display confirmation message -->
        <?php if (!empty($confirmationMessage)): ?>
            <p><?php echo $confirmationMessage; ?></p>
        <?php endif; ?>

        <!-- Cancellation Form -->
        <p>If you need to cancel your flight reservation, please provide the required information below:</p>

        <form method="post" action="cancellation.php">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required>

            <label for="flight_reference">Flight Reference:</label>
            <input type="text" name="flight_reference" id="flight_reference" required>

            <button type="submit" name="cancel_flight">Cancel Flight</button>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <img src="air_canada_logo.png" alt="Air Canada Logo" width="50">
            <p>&copy; 2023 Air Canada, All rights reserved.</p>
            <p>Contact: contact@itdcanada.com</p>
            <p>Follow us on:
                <ul class="social-icons">
                    <li><a href="https://twitter.com/aircanada" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://facebook.com/aircanada" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
                </ul>
            </p>
        </div>
    </footer>
</body>
</html>
