<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <title>Contact Us - Air Canada</title>
    
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
        <div class="contact-container">
            <img src="air_canada_logo.png" alt="Air Canada logo" width="200">
            <h1>Contact Us</h1>
        </div>
    </header>

    <div class="contact-content">
        <h2>We'd love to hear from you!</h2>
        <p>If you have any questions or feedback, please fill out the form below, and we'll get back to you as soon as possible.</p>

        <div class="form-container">
            <form method="post" action="contact.php">
                <label for="name">Your Name:</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Your Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="message">Your Message:</label>
                <textarea name="message" id="message" rows="4" required></textarea>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            // Get form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Validate and sanitize form data (you can add more validation)
            $name = filter_var($name, FILTER_SANITIZE_STRING);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $message = filter_var($message, FILTER_SANITIZE_STRING);

            // Set up email parameters
            $to = 'contact@itdcanada.ca'; 
            $subject = 'Contact Us Form Submission';
            $headers = 'From: ' . $email;
            $messageBody = "Name: $name\nEmail: $email\n\n$message";

            // Send email
            if (mail($to, $subject, $messageBody, $headers)) {
                // Email sent successfully
                echo "Thank you for contacting us. We will get back to you shortly.";
            } else {
                // Email not sent
                echo "Sorry, there was an issue. Please try again later.";
            }
        }
        ?>

    </div>

    <footer>
        <div class="footer-content">
            <img src="air_canada_logo.png" alt="Air Canada Logo" width="50">
            <p>&copy; 2023 Air Canada, All rights reserved.</p>
            <p>Contact: contact@itdcanada.com</p>
            <p>Follow us on:
                <ul class="social-icons">
                    <li><a href="https://twitter.com/aircanada" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://facebook.com/aircanada" target="_blank"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </p>
        </div>
    </footer>
</body>
</html>
