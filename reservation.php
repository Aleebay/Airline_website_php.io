<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reservation.css">

    <title>Flight Reservation</title>
</head>
<body>
    <h1>Flight Reservation</h1>

    <form action="reservation.php" method="post">
        <label for="departure">Departure City:</label>
        <select name="departure" id="departure" required>
            <option value="istanbul">Istanbul</option>
            <option value="paris">Paris</option>
            <!-- Add more departure cities as needed -->
        </select>

        <label for="destination">Destination City:</label>
        <select name "destination" id="destination" required>
            <option value="newyork">New York</option>
            <option value="tokyo">Tokyo</option>
            <!-- Add more destination cities as needed -->
        </select>

        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Your Email:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit" name="reserve">Reserve Ticket</button>
    </form>

    <?php
if (isset($_POST['reserve'])) {
    // Retrieve user input
    $departureCity = $_POST['departure'];
    $destinationCity = $_POST['destination'];
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];

    // Define valid flight routes
    $validRoutes = [
        'istanbul' => 'newyork', // Flight 1 (Istanbul to New York)
        'paris' => 'tokyo',      // Flight 2 (Paris to Tokyo)
        // Add more valid routes as needed
    ];

    if (array_key_exists($departureCity, $validRoutes) && $validRoutes[$departureCity] === $destinationCity) {
        // The selected route is valid
        $selectedFlight = "Flight from $departureCity to $destinationCity";

        // Connect to your database and insert reservation information
        $host = "localhost";
        $dbname = "your_database_name";
        $user = "your_database_user";
        $password = "your_database_password";

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $query = "INSERT INTO reservations (flight, name, email) VALUES (:flight, :name, :email)";
            $stmt = $pdo->prepare($query);
            $stmt->execute(['flight' => $selectedFlight, 'name' => $userName, 'email' => $userEmail]);

            echo "Reservation successful! You are now booked on $selectedFlight.";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        // Invalid route selected
        echo "Invalid route. Please select a valid flight route.";
    }
}
?>

</body>
</html>
