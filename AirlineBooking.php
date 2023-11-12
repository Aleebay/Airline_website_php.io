<!DOCTYPE html>
<html>
<head>
    <title>Airline Booking</title>
    <style>
        /* General Style for the Black and Yellow Theme */
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #FFD700;
            margin: 20px;
        }

        h1 {
            color: #000;
            background-color: #FFD700;
            padding: 10px;
        }

        h2 {
            color: #FFD700;
        }

        form {
            margin: 20px 0;
            background: #000;
        }

        input[type='text'],
        input[type="number"],
        input[type="date"] {
            width: 10%;
            padding: 5px;
            margin: 5px 0;
            background: #000;
            color: #FFD700;
            border: 1px solid #FFD700;
        }

        input[type="submit"] {
            background: #FFD700;
            color: #000;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        table {
            width: 10%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #FFD700;
            color: #000;
            padding: 5px 10px;
        }

        tr:nth-child(even) {
            background: #000;
        }

        td {
            padding: 5px 10px;
        }

        .error {
            color: #d9534f;
        }

        /* Additional style for the airline website */
        .flight-info {
            background: #FFD700;
            color: #000;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            margin-top: 20px;
        }

        .reservation-list,
        .purchase-list,
        .cancellation-list,
        .ticket-class {
            background: #FFD700;
            color: #000;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            margin-top: 20px;
        }

        .reservation-list h2,
        .purchase-list h2,
        .cancellation-list h2,
        .ticket-class h2 {
            font-size: 20px;
        }

        .reservation-list ul,
        .purchase-list ul,
        .cancellation-list ul,
        .ticket-class ul {
            list-style: none;
            padding: 0;
        }

        .reservation-list li,
        .purchase-list li,
        .cancellation-list li,
        .ticket-class li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>Welcome to Airline Booking</h1>
<!-- Form to book a Flight -->
<h2>Book A Flight</h2>
<form method="post">
    First Name: <input type="text" name="first_name" required>
    Last Name: <input type="text" name="last_name" required>
    Flight Number: <input type="text" name="flight_number" required>
    Departure Date: <input type="date" name="departure_date" required> <!-- Corrected input tag -->
    <div class="ticket-class">
        <h2>Select Class:</h2>
        <input type="radio" name="class" value="economy" id="economy" required>
        <label for="economy">Economy</label>
        <input type="radio" name="class" value="business" id="business" required>
        <label for="business">Business</label>
        <input type="radio" name="class" value="first_class" id="first_class" required> <!-- Corrected label for attribute -->
        <label for="first_class">First Class</label>
    </div>
    <input type="submit" name="book_flight" value="Book Flight">
</form>

<!-- Form to cancel a Flight -->
<h2>Cancel Flight</h2>
<form method="post">
    Booking Reference: <input type="text" name="booking_reference" required> <!-- Corrected input name attribute -->
    <input type="submit" name="cancel_flight" value="Cancel Flight">
</form>

<!-- Flight Information -->
<div class="flight-info">
    <h2>Your Upcoming Flight</h2>
    <p>Flight: AC123</p>
    <p>Departure Date: June 15, 2023</p>
    <p>Passenger: AAA BBB</p>
    <p>Seat: 12A</p>
</div>

<!-- Reservation Form -->
<h2>24-Hour Reservation</h2>
<form method="post">
    Full Name: <input type="text" name="full_name" required>
    Flight Number: <input type="text" name="flight_number" required> <!-- Corrected input type attribute -->
    Departure Date: <input type="date" name="departure_date" required>
    <div class="ticket-class">
        <h2>Select Class:</h2>
        <input type="radio" name="class" value="economy" id="economy" required>
        <label for="economy">Economy</label>
        <input type="radio" name="class" value="business" id="business" required>
        <label for="business">Business</label>
        <input type="radio" name="class" value="first_class" id="first_class" required> <!-- Corrected label for attribute -->
        <label for="first_class">First Class</label>
    </div>
    <input type="submit" name="reserve_flight" value="Reserve Flight">
</form>

<!-- Reservation List -->
<div class="reservation-list">
    <h2>Reserved Tickets</h2>
    <ul>
        <li>Reservation #1: AAA BBB, Flight AC123, June 16, 2023, Economy Class</li>
        <li>Reservation #2: CCC DDD, Flight AC456, June 17, 2023, Business Class</li>
    </ul>
</div>

<!-- Purchase Completed List -->
<div class="purchase-list">
    <h2>Purchase Completed</h2>
    <ul>
        <li>Booking #1: AAA BBB, Flight AC123, June 16, 2023, Economy Class</li>
        <li>Booking #2: CCC DDD, Flight AC456, June 17, 2023, Business Class</li>
    </ul>
</div>

<!-- Cancellation List -->
<div class="cancellation-list">
    <h2>Cancellations</h2>
    <ul>
        <li>Cancellation #1: AAA BBB, Flight AC123, June 16, 2023, Economy Class</li>
        <li>Cancellation #2: CCC DDD, Flight AC456, June 17, 2023, Business Class</li>
    </ul>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Corrected $_SERVER variable
    try {
        // Database Connection
        $pdo = new PDO("pgsql:host=localhost;port=5433;dbname=ITDCanada;user=postgres;password=mydatabase"); // Corrected PDO constructor

        $pdo->beginTransaction();

        if (isset($_POST['book_flight'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $flight_number = $_POST['flight_number'];
            $departure_date = $_POST['departure_date'];
            $ticket_class = $_POST['class'];

            // Implement flight booking logic here

        } elseif (isset($_POST['cancel_flight'])) {
            $booking_reference = $_POST['booking_reference'];

            // Implement flight cancellation logic here
        } elseif (isset($_POST['reserve_flight'])) {
            $full_name = $_POST['full_name'];
            $flight_number = $_POST['flight_number'];
            $departure_date = $_POST['departure_date'];
            $ticket_class = $_POST['class'];

            // Implement 24-hour reservation logic here
        }

        $pdo->commit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
</body>
</html>
