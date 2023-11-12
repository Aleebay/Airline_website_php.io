<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="discover.css"> <!-- Link to your CSS file -->
    <title>Discover - Airline Booking</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:#b55757;
}

h2{
    color: #231a1a;
    text-align: center;
}

p {
    text-align: center;
}
    .city-card {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 10px;
    }

    .city {
        text-align: center;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #db8e8e;
    }

    .city img {
        max-width: 100%;
        height: 50%;
    }



header {
    background-color: #de0f0f;
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 1.5rem;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: white;
}

.discover-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #ead7d7;
    margin: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.discover-content {
    flex: 1;
    padding: 20px;
}

.discover-image img {
    max-width: 50px;
    height: auto;
}

footer {
    background-color: #222;
    color: white;
    text-align: center;
    padding: 10px;
}

footer a {
    text-decoration: none;
    color: white;
}


    </style>
</head>
<body>
    <header>
        <!-- Navigation menu -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cancellation.php">Cancellation</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="discover.php">Discover</a></li>
            </ul>
        </nav>
    </header>

    <!-- Featured Destinations Section -->
    <section class="discover-section">
        <div class="explore-container">
            <h2>Explore the World</h2>
            <p>Discover amazing destinations around the globe. From vibrant cities to exotic beaches, we have the perfect flight for your next adventure.</p>

            <!-- Display featured destinations -->
            <div class="city-card">
                <?php
                // Define an array of featured destinations with descriptions and images
                $featured_destinations = [
                    "New York" => ["Explore the Big Apple, home to iconic landmarks like Times Square and Central Park.", "newyork.jpg"],
                    "Paris" => ["Experience the romance of Paris with the Eiffel Tower and Louvre Museum.", "paris.jpg"],
                    "Tokyo" => ["Discover Tokyo's blend of modern and traditional culture with sushi and ancient temples.", "tokyo.jpg"],
                    "Rome" => ["Walk through history in Rome, where you can visit the Colosseum and Vatican City.", "rome.jpg"],
                    "Sydney" => ["Enjoy the stunning views of the Sydney Opera House and the Harbor Bridge.", "sydney.jpg"],
                    "Barcelona" => ["Experience the vibrant culture of Barcelona with Gaudi's architectural marvels.", "barcelona.jpg"],
                    "Rio de Janeiro" => ["Party on Copacabana Beach and see Christ the Redeemer on a mountain top", "Rio.jpg"],
                    "Dubai" => ["Visit the futuristic city of Dubai, known for its skyscrapers and luxury shopping.", "dubai.jpg"],
                    "Cairo" => ["Explore the ancient wonders of Egypt, including the Pyramids of Giza.", "cairo.jpg"],
                    "Cape Town" => ["Admire the breathtaking landscapes of Cape Town, including Table Mountain.", "CapeTown.jpg"],
                    "Bali" => ["Relax on Bali's pristine beaches and experience its rich cultural heritage.", "bali.jpg"],
                    "Machu Picchu" => ["Embark on a journey to the Inca citadel of Machu Picchu, a UNESCO World Heritage Site.", "machu.jpg"],

                    // Add more destinations as needed
                ];

                foreach ($featured_destinations as $destination => $details) {
                    $description = $details[0];
                    $image = $details[1];
                    echo "<div class='city'>
                        <img src='$image' alt='$destination'>
                        <h3>$destination</h3>
                        <p>$description</p>
                        <p class='travel-package'><a href='#'>View Travel Packages</a></p>
                    </div>";
                }
                ?>
            </div>
        </div>
    </section>

   <!-- Travel Tips Section -->
<section class="discover-section">
    <div class="discover-content">
        <h2>Travel Tips</h2>
        <p>Get the best travel tips and advice for a smooth and enjoyable journey. We've got you covered with packing tips, local insights, and more.</p>

        <!-- Add more content or links here, if needed -->
        <p>Whether you're a seasoned traveler or embarking on your first journey, our travel tips will help you make the most of your adventure. From packing efficiently to exploring local culture, we have you covered.</p>
        <p>Here are some essential travel tips:</p>
        <ul>
            <li>Pack light and smart to make your journey more comfortable.</li>
            <li>Research the local customs and traditions of your destination.</li>
            <li>Try the local cuisine for a truly authentic experience.</li>
            <li>Stay hydrated and get enough rest during your travels.</li>
            <li>Don't forget to take your essential documents and travel insurance.</li>
        </ul>
    </div>
    <div class="discover-image">
        <img src="tips.png" alt="Travel Tips">
    </div>
</section>


  
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
