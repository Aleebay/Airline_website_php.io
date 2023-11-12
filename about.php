<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Airline Booking</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link to your CSS file -->
    <style>
/* Reset default margin and padding for better consistency */
* {

    padding: 0;
    box-sizing: border-box;
    text-align: match-parent;
}

/* Set a background color for the entire page */
body {
    background-color: #5e2e2e;
    font-family: Arial, sans-serif;
}

/* Style the header with a background color, padding, and center-align text */
header {
    background-color: #333;
    padding: 10px 0;
    text-align: center;
}

/* Style the navigation menu with horizontal alignment and list styling */
nav {
    text-align: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

/* Style the h1 element for the page title */
h1 {
    font-size: 2em;
    color: #fff;
    margin-top: 10px;
}

/* Style content sections with a white background, padding, and margin */
.content {
    background-color: #fff;
    padding: 20px;
    margin: 20px;
}

/* Style headings within content sections */
.content h2 {
    font-size: 1.5em;
    color: #dc1717;
    text-align: center;
}

/* Style paragraphs within content sections */
.content p {
    color: #fff;
    line-height: 1.4;
}

/* Style the background of the team and testimonials sections */
#team, #testimonials {
    background-color: #333;
    
}

/* Style the testimonials */
.testimonial {
    background-color: #333;
    border: 1px solid #fff;
    border-radius: 5px;
    margin: 20px;
    padding: 20px;
    max-width: 400px;
    display: inline-block;
}

.testimonial-content {
    text-align: left;
}

/* Style the team members and grid */
/* Style team member sections */
#team .team-member {
    margin: 0 10px;
    text-align: center;
}

#team .team-member img {
    max-width: 100px;
    border-radius: 50%;
    margin: 10px 0;
}

#team .team-member h3 {
    font-size: 1.2em;
    color: #fff;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}


/* Style the footer with a background color, padding, and center-align text */
footer {
    background-color: #333;
    padding: 10px 0;
    text-align: center;
}

/* Style footer text and links */
footer p {
    color: #fff;
    margin: 5px 0;
}

.social-icons li {
    display: inline;
    margin: 0 10px;
}

.social-icons a {
    text-decoration: none;
    color: #fff;
}

/* Add hover effect for social media icons */
.social-icons a:hover {
    color: #ffcd00;
}


    </style>
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
    </header>

    <!-- About Us Section -->
    <div id="about-us" class="content" style="background-color: #333; text-align: center; color: #fff;">
        <h2>About Us</h2>
        <p>Welcome to Air Canada, your trusted partner in travel. We are passionate about making your
             travel dreams come true. Our dedicated team works tirelessly to provide you with the best flight deals, 
             hotel bookings, and more. With a commitment to excellence, we ensure that your journey is seamless and
              stress-free. Our customer-centric approach and 24/7 support make us the preferred choice for travelers 
              worldwide. Join us to explore the world and create unforgettable memories. Your adventure begins with 
              AirlineBooking.com!</p>
    </div>
<!-- Team Section -->
<div id="team" class="content" style="background-color: #333;">
    <h2>Our Team</h2>
    <div class="team-members">
        <div class="team-member top-member">
            <img src="ali.jpg" alt="Ali">
            <h3>Ali Abdulquadir</h3>
            <p>CEO & Founder</p>
            <p>With years of experience in the airline industry, </p>
            <p> leads our team with a vision for innovation and customer satisfaction.</p>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <img src="teejay.jpg" alt="Tee Jay">
                <h3>Tee Jay</h3>
                <p>Customer Support Manager</p>
                <p>Tee is dedicated to ensuring that your journey is smooth and enjoyable.</p>
                <p>His expertise in customer service is unparalleled.</p>
            </div>
            <div class="team-member">
                <img src="teema.jpg" alt="Tee Ma">
                <h3>Tee Ma</h3>
                <p>Head of Sales</p>
                <p>Tee's extensive knowledge of travel sales</p>
                <p> helps us bring you the best deals and offers.</p>
            </div>
            <div class="team-member">
                <img src="kenny.jpg" alt="Ms Kenny">
                <h3>Ms Kenny</h3>
                <p>Marketing Manager</p>
                <p>Kenny is a creative genius</p> 
                <p>who ensures our brand and services are well-represented in the market.</p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div id="testimonials" class="content" style="background-color: #333; text-align: center; color: #fff;">
    <h2>Customer Testimonials</h2>
    <div class="testimonial">
        <div class="testimonial-content">
            <blockquote>
                "Booking my flights with [Your Company Name] was a breeze. The customer support team was incredibly helpful, and I got the best deals!"
            </blockquote>
            <p class="customer-name">- Jane Doe</p>
        </div>
    </div>
    <div class="testimonial">
        <div class="testimonial-content">
            <blockquote>
                "I've been using [Your Company Name] for years now, and they've never disappointed. Easy booking, great prices, and fantastic service!"
            </blockquote>
            <p class="customer-name">- John Smith</p>
        </div>
    </div>
    <div class= "testimonial">
        <div class="testimonial-content">
            <blockquote>
                "I had a last-minute change in travel plans, and [Your Company Name] helped me rebook without any hassle. Impressive service!"
            </blockquote>
            <p class="customer-name">- Sarah Johnson</p>
        </div>
    </div>
</div>

<!-- Partnerships Section -->
<div id="partnerships" class="content" style="background-color: #333; text-align: center; color: #fff;">
    <h2>Our Partnerships</h2>
    <p>We are proud to collaborate with industry leaders to provide you with the best travel options and experiences. Our trusted partners include:</p>
    <ul style="list-style-type: none; padding: 0;"> <!-- Use CSS to remove list-style and padding -->
        <li><strong>Airline Partners:</strong> We work closely with major airlines to offer you a wide range of destinations and flight options.</li>
        <li><strong>Hotel Partners:</strong> Our hotel partnerships ensure you have comfortable accommodations during your travels.</li>
        <li><strong>Travel Agency Partners:</strong> Our network of travel agencies assists in planning the perfect itinerary for your journey.</li>
        <li><strong>Car Rental Partners:</strong> Need a vehicle at your destination? Our car rental partners have you covered.</li>
    </ul>
</div>

<!-- Community and Environment Section -->
<div id="community-environment" class="content" style="background-color: #333; text-align: center; color: #fff;">
    <h2>Community and Environment</h2>
    <p>At Airline Booking, we are dedicated to making a positive impact on both the community and the environment. Here's how we contribute:</p>
    <ul style="list-style-type: none; padding: 0;"> <!-- Set list-style-type to none to remove bullet points -->
        <li><strong>Community Outreach:</strong> We actively engage in community outreach programs, supporting local charities and initiatives to make a difference in people's lives.</li>
        <li><strong>Environmental Responsibility:</strong> We are committed to reducing our carbon footprint. Our efforts include fuel-efficient flight options and eco-friendly practices in our offices.</li>
        <li><strong>Partnerships for Good:</strong> We partner with organizations that share our commitment to social responsibility and environmental sustainability.</li>
    </ul>
</div>



<footer style="background-color: #333; text-align: center; color: #fff;">
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
