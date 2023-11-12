<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Air Canada - Home</title>
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0; /* Remove default body margin */
}

nav {
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: white;
    text-align: center;
}

header {
    background-color: #805a54;
    text-align: center;
    padding: 20px;
}

.container {
    display: flex;
    background-color: #954242;
    justify-content: center;
    align-items: center;
    padding: 10px;
    height: 60vh; /* Set the container height to 100% of the viewport height */
}

.content.center-table {
    background-color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin: 10px;
    width: 95%;
    max-width: 100%; /* Set the maximum width to 100% */
    text-align: center;
    overflow: auto; /* Add overflow to enable scrolling if the content is too large */
}

h2 {
    color: black;
    text-align: center;
}

button {
    background-color: #333;
    color: red;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

.content input[type="text"],
.content input[type="email"],
.content input[type="tel"] {
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.content .large-input,
.content .large-button {
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.large-button {
    padding: 10px 20px;
    background-color: #d51717;
    color: #333;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.city-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.city-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 10px;
    margin: 10px;
}

.city {
    text-align: center;
}

.city img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.city-name {
    font-weight: bold;
    margin: 10px 0;
}
table {
    width: 90%;
    margin: 0 auto; /* Center the table horizontally */
    text-align: center; /* Center the contents of the table */
    border-collapse: collapse; /* Collapse table borders */
    border: 1px solid #ccc; /* Add a border to the table */
}

table th, table td {
    padding: 10px; /* Adjust the padding as needed */
    border: 1px solid #ccc; /* Add borders to th and td */
}

table th {
    background-color: #333; /* Header background color */
    color: white; /* Header text color */
}

table tr:nth-child(even) td {
    background-color: #f2f2f2; /* Background color for even rows */
}

table tr:nth-child(odd) td {
    background-color: #fff; /* Background color for odd rows */
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
}

footer img {
    vertical-align: middle;
}

.social-icons {
    list-style: none;
    padding: 0;
}

.social-icons li {
    display: inline;
    margin-right: 10px;
}

.social-icons a {
    text-decoration: none;
    color: white;
}

.center-table {
    justify-content: center;
    align-items: center;
}

.center-td {
    text-align: center;
    justify-content: center;
}

.center-th {
    text-align: center;
    justify-content: center;
}

.table-container {
    display: flex;
    justify-content: space-around;
    align-items: stretch;
    margin: 20px;
}

.table-container table {
    width: 90%; /* Set the table width to 90% */
    margin: 0;
}

.vertical-line {
    border-left: 2px solid #ccc;
    height: 100%;
    margin: 0 20px;
    flex-shrink: 0;
}

    </style>

</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cancellation.php">Cancellation</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="discover.php">Discover</a></li>
        </ul>
    </nav>

    <header>
        <img src="air_canada_logo.png" alt="Air Canada logo" width="100">
        <h1>Welcome to Air Canada Booking</h1>
        <h2>Book Your Flight</h2>
    </header>
    <hr>
    <div class="container">
        <div class="content center-table">
            <h2 style="color: black;">Search for Flights</h2>
            <form class="search-form" method="post" action="index.php">
                <label for="departure" style="color: white;">Departure City:</label>
                <select name="departure" id="departure" required class="large-select">
                    <option value="" enabled selected>--Select a city--</option>
                    <?php
                    $host = "localhost";
                    $port = "5433";
                    $dbname = "AirCanada";
                    $user = "postgres";
                    $password = "mydatabase";

                    try {
                        $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
                    } catch (PDOException $e) {
                        echo "Database connection error: " . $e->getMessage();
                    }

                    $query = "SELECT DISTINCT departure_city FROM flights";
                    $stmt = $pdo->query($query);

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='" . $row['departure_city'] . "'>" . $row['departure_city'] . "</option>";
                    }
                    ?>
                </select>

                <label for="destination" style="color: white;">Destination City:</label>
                <select name="destination" id="destination" required class="large-select">
                    <option value="" enabled selected>--Select a city--</option>
                    <?php
                    $query = "SELECT DISTINCT destination_city FROM flights";
                    $stmt = $pdo->query($query);

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='" . $row['destination_city'] . "'>" . $row['destination_city'] . "</option>";
                    }
                    ?>
                </select>

                <label for="date" style="color: white;">Date:</label>
                <input type="date" name="date" required class="large-input" />
                <button type="submit" name="search" class="large-button" style="background-color: red; color: white;">Search Flights</button>
            </form>
        </div>

        <div class="vertical-line"></div>

        <div class="content center-table">
            <h2>Reserve a Flight</h2>
            <form class="reserve-form" method="post" action="index.php">
                <label for="flight">Flight Reference No:</label>
                <input type="text" name="flight_reference" id="flight_id" required>

                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="phone_number">Phone Number:</label>
                <input type="tel" name="phone_number" id="phone_number" required>

                <button type="submit" name="reserve_flight" class="large-button" style="background-color: red; color: white;">Reserve Ticket</button>
            </form>
        </div>
    </div>
<hr>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
        $selectedDeparture = $_POST['departure'];
        $selectedDestination = $_POST['destination'];
        $selectedDate = $_POST['date'];

        $query = "SELECT flight_no, departure_city, departure_code, destination_city, destination_code, class, flight_date, flight_time FROM flights WHERE departure_city = :departure AND destination_city = :destination AND flight_date = :date";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':departure', $selectedDeparture);
        $stmt->bindParam(':destination', $selectedDestination);
        $stmt->bindParam(':date', $selectedDate);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "<div class='content center-table'>";
            echo "<h2>Showing available flights:</h2>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Flight No</th>";
            echo "<th>Departure City</th>";
            echo "<th>Departure Code</th>";
            echo "<th>Destination City</th>";
            echo "<th>Destination Code</th>";
            echo "<th>Class</th>";
            echo "<th>Flight Date</th>";
            echo "<th>Flight Time</th>";
            echo "<th>Actions</th>";
            echo "</tr>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['flight_no'] . "</td>";
                echo "<td>" . $row['departure_city'] . "</td>";
                echo "<td>" . $row['departure_code'] . "</td>";
                echo "<td>" . $row['destination_city'] . "</td>";
                echo "<td>" . $row['destination_code'] . "</td>";
                echo "<td>" . $row['class'] . "</td>";
                echo "<td>" . $row['flight_date'] . "</td>";
                echo "<td>" . $row['flight_time'] . "</td>";
                echo "<td><form method='post' action='index.php'><input type='hidden' name='flight' value='Sample Flight'><input type='submit' name='reserve' value='Reserve / Purchase Ticket'></form></td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "</div>";
        } else {
            echo "<div class='content center-table'>";
            echo "<h2>No flights available for the selected criteria.</h2>";
            echo "</div>";
        }
    }
    ?>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reserve_flight'])) {
        $flightReference = $_POST['flight_reference'];
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone_number'];

        $insertQuery = "INSERT INTO reservations (flight_reference, first_name, last_name, email, phone_number) VALUES (:flight_reference, :first_name, :last_name, :email, :phone_number)";

        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':flight_reference', $flightReference);
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phoneNumber);

        if ($stmt->execute()) {
            echo "<script>alert('Reservation successfully added to the database.'); window.location = 'index.php';</script>";
        } else {
            echo "<script>alert('Failed to add reservation to the database. Please try again.');</script>";
        }
    }
    ?>
<hr>
    <div class="city-grid">
        <!-- City 1: Istanbul -->
        <div class="city">
            <img src="istanbul.jpg" alt="Istanbul">
            <p class="city-name">Istanbul</p>
            <p class="city-description">Istanbul is a city that straddles Europe and Asia across the Bosphorus Strait. The Old city reflects the cultural influence of many empires.</p>
        </div>

        <!-- City 2: Bahamas -->
        <div class= "city">
            <img src="bahamas.jpg" alt="Bahamas">
            <p class="city-name">Bahamas</p>
            <p class="city-description">The Bahamas is a tropical paradise known for its crystal-clear waters and stunning beaches.</p>
        </div>

        <!-- City 3: Tokyo -->
        <div class="city">
            <img src="tokyo.jpg" alt="Tokyo">
            <p class="city-name">Tokyo</p>
            <p class="city-description">Tokyo is a vibrant metropolis that seamlessly combines modernity and tradition.</p>
        </div>

        <!-- City 4: Tehran -->
        <div class="city">
            <img src="tehran.jpg" alt="Tehran">
            <p class="city-name">Tehran</p>
            <p class="city-description">Tehran, the capital of Iran, is known for its rich history and bustling street life.</p>
        </div>

        <!-- City 5: Antarctica -->
        <div class="city">
            <img src="antratica.jpg" alt="Antarctica">
            <p class="city-name">Antarctica</p>
            <p class="city-description">Antarctica, the frozen continent, is an expedition destination for adventurous explorers.</p>
        </div>

        <!-- City 6: Sydney -->
<div class="city">
    <img src="sydney.jpg" alt="Sydney">
    <p class="city-name">Sydney</p>
    <p class="city-description">Sydney is a paradise for travelers with iconic landmarks and stunning beaches.</p>
</div>

<!-- City 7: Paris -->
<div class="city">
    <img src="paris.jpg" alt="Paris">
    <p class="city-name">Paris</p>
    <p class="city-description">Paris, the City of Love, is known for its romantic ambiance and iconic landmarks.</p>
</div>

<!-- City 8: Rome -->
<div class="city">
    <img src="rome.jpg" alt="Rome">
    <p class="city-name">Rome</p>
    <p class="city-description">Rome, the Eternal City, boasts a rich history and breathtaking architecture.</p>
</div>

<!-- City 9: London -->
<div class="city">
    <img src="london.jpg" alt="London">
    <p class= "city-name">London</p>
    <p class="city-description">London, a diverse metropolis, offers a blend of history and modernity.</p>
</div>

<!-- City 10: New York -->
<div class="city">
    <img src="newyork.jpg" alt="New York">
    <p class="city-name">New York</p>
    <p class="city-description">New York City, the Big Apple, is a bustling urban hub with endless opportunities.</p>
</div>

<!-- City 11: Nigeria -->
<div class="city">
    <img src="nigeria.jpg" alt="Nigeria">
    <p class="city-name">Nigeria</p>
    <p class="city-description">Nigeria, a country with diverse culture and landscapes, offers unique travel experiences.</p>
</div>

<!-- City 12: Dubai -->
<div class="city">
    <img src="dubai.jpg" alt="Dubai">
    <p class="city-name">Dubai</p>
    <p class="city-description">Dubai, a city of luxury and innovation, offers futuristic architecture and desert adventures.</p>
</div>
</div>

<footer>
    <img src="air_canada_logo.png" alt="Air Canada Logo" width="50">
    <p>&copy; 2023 Air Canada, All rights reserved.</p>
    <p>Contact: contact@itdcanada.com</p>
    <p>Follow us on  
        <ul class="social-icons">
            <li><a href="https://twitter.com/aircanada" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li> 
            <li><a href="https://facebook.com/aircanada" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
        </ul>
    </p>
</footer>

</body>
</html>
