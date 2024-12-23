<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spots</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css">

     <!-- Inline CSS -->
     <style>
        /* Latar belakang seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../assets/images/blackgradient.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #333;
        }

        /* Hero section dengan gambar Bromo */
        .hero {
            background-image: url('../assets/images/bromo_foto.jpg');
            background-size: cover;
            background-position: center;
            height: 500px; /* Atur tinggi hero */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero h1, .hero h2 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
</head>
<body>
<header>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="../assets/images/spotslogovertical.png" alt="Spots Logo">
            </div>
            <ul>
            <li class="dropdown">
                <a href="destination.php">Destinations</a>
                <ul class="dropdown-content">
                    <li><a href="semarang.php">Semarang</a></li>
                    <li><a href="bandung.php">Bandung</a></li>
                    <li><a href="surabaya.php">Surabaya</a></li>
                    <li><a href="malang.php">Malang</a></li>
                    <li><a href="yogyakarta.php">Yogyakarta</a></li>
                    <li><a href="surakarta.php">Surakarta</a></li>
                </ul>
            </li>
                <li><a href="interest.php">Interests</a></li>
                <li><a href="trip-finder.php">Trip Finder</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="../admin/admin.php">Admin </a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container">
            <h2>FIND YOUR FAVOURITE PLACE WITH SPOTS</h2><br>
            <h1>Explore the best places to <em>relax</em>, unwind, <br>and create memories with Spots</h1>
        </div>
    </section>

    <section class="search">
        <div class="container">
            <div class="search-box">
                <select id="destinations">
                    <option value="">Select Destinations</option>
                    <option value="semarang.php">Semarang</option>
                    <option value="bandung.php">Bandung</option>
                    <option value="surabaya.php">Surabaya</option>
                    <option value="malang.php">Malang</option>
                    <option value="yogyakarta.php">Yogyakarta</option>
                    <option value="surakarta.php">Surakarta</option>
                </select>

                <select id="interests">
                    <option value="family">Family Trip</option>
                    <option value="nature">Food & Drink</option>
                    <option value="adventure">Hidden Gems</option>
                    <option value="culture">Wildlife & Nature</option>
                </select>

                <button class="search-button" onclick="performSearch()">Search</button>
            </div>
        </div>
    </section>
        
    <div class="container">
        <div class="slide-container">
            <div class"card-wrapper">  
                <div class"card"></div> 
                    <div class="image-box">

        <div class="section">
          <h2>WHY SPOTS</h2><br>
          <h1>Spots is all about <br> storytelling and experience</h1><br>
          <p>Our trips are inspired by our beloved country Indonesia, but right now Spots only has a version for Java</p><br>
        </div>
        <div class="features">
          <div class="feature">
            <img src="../assets/images/grouptraveler.jpeg" alt="Small Group Travel">
            <h3>Small group travel</h3>
            <p>Explore the best places to relax, chill, and create unforgettable memories with your group.</p>
          </div>
          <div class="feature">
            <img src="../assets/images/solotraveler.webp" alt="Curious Co-Travelers">
            <h3>Curious co-travelers</h3>
            <p>Spots travelers are curious, adventurous, and excited to discover unique experiences that go beyond typical destinations.</p>
          </div>
          <div class="feature">
            <img src="../assets/images/hiddengem.jpg" alt="Places No One Else">
            <h3>Places nowhere else</h3>
            <p>We uncover hidden gems that least expect them, seeking out incredible places that others can't.</p>
          </div>
        </div>
      </div>

       <div class="slider">
    <button class="slide-arrow left-arrow">&#8249;</button>
    <div class="slider-container">
        <div class="slide">
            <img src="../assets/images/semarang.jpg" alt="Semarang" class="slider-image">
            <div class="content-overlay">
                <h1 class="title">Semarang</h1>
                <p class="subtitle">Dive into the charm of Semarang, where vibrant city life meets historical gems.</p>
                <button class="explore-button"><a href="semarang.php" class="explore-btn">Explore trips idea to Semarang</a></button>
            </div>
        </div>
        <div class="slide">
            <img src="../assets/images/bandung.jpg" alt="Bandung" class="slider-image">
            <div class="content-overlay">
                <h1 class="title">Bandung</h1>
                <p class="subtitle">Escape to Bandung, the "Paris of Java," with trendy cafes and shopping!</p>
                <button class="explore-button"><a href="bandung.php" class="explore-btn">Explore trips idea to Bandung</a></button>
            </div>
        </div>
        <div class="slide">
            <img src="../assets/images/malang.jpg" alt="Malang" class="slider-image">
            <div class="content-overlay">
                <h1 class="title">Malang</h1>
                <p class="subtitle">Explore Malang’s picturesque landscapes and cozy vibes.</p>
                <button class="explore-button"><a href="malang.php" class="explore-btn">Explore trips idea to Malang</a></button>
            </div>
        </div>
        <div class="slide">
            <img src="../assets/images/surabaya.jpg" alt="Surabaya" class="slider-image">
            <div class="content-overlay">
                <h1 class="title">Surabaya</h1>
                <p class="subtitle">Discover Surabaya’s modern energy, rich history, and lively culinary scene – your ultimate urban getaway!</p>
                <button class="explore-button"><a href="surabaya.php" class="explore-btn">Explore trips idea to Surabaya</a></button>
            </div>
        </div>
        <div class="slide">
            <img src="../assets/images/yogya.jpg" alt="Yogyakarta" class="slider-image">
            <div class="content-overlay">
                <h1 class="title">Yogyakarta</h1>
                <p class="subtitle">Feel the heartbeat of Javanese culture in Yogyakarta, where ancient wonders and artsy streets set the stage for adventure.</p>
                <button class="explore-button"><a href="yogyakarta.php" class="explore-btn">Explore trips idea to Yogyakarta</a></button>
            
            </div>
        </div>
        <div class="slide">
            <img src="../assets/images/jakarta.jpg" alt="Jakarta" class="slider-image">
            <div class="content-overlay">
                <h1 class="title">Jakarta</h1>
                <p class="subtitle">Experience Jakarta’s dynamic rhythm, with its skyscrapers, nightlife, and hidden gems perfect for all-day exploring.</p>
                <button class="explore-button"><a href="jakarta.php" class="explore-btn">Explore trips idea to Jakarta</a></button>
            </div>
        </div>
        <div class="slide">
            <img src="../assets/images/surakarta.jpg" alt="Surakarta" class="slider-image">
            <div class="content-overlay">
                <h1 class="title">Surakarta</h1>
                <p class="subtitle">Step into the soul of tradition in Solo, a city that celebrates heritage with royal charm and cultural elegance.</p>
                <button class="explore-button"><a href="surakarta.php" class="explore-btn">Explore trips idea to Surakarta</a></button>
             </div>
        </div>
    </div>
    
    <button class="slide-arrow right-arrow">&#8250;</button>
</div>

<div class="subscription-form">
    <h1>Do you want to subscribe for more amazing features?</h1>
    <p>Sign up for our <span style="color: #b74a2b;">emails</span>.</p>
    <form action="/subscribe" method="POST">
      <input type="email" name="email" placeholder="Enter your email" required>
      <button type="submit">Subscribe</button>
    </form>
  </div>

  <div class="container">
    <h1>Fast Search from SPOTS - YOGYAKARTA</h1>
    <br>
    <h2>Orange Mark is showing the most Popular Foods, most Popular Areas, And most Hidden Gems in Daerah Istimewa Yogyakarta </h2>
    <br>
    <p>Fast Search is a feature that allows users to quickly search for and discover popular or hidden spots in Yogyakarta through an interactive map. 
    The feature is designed to provide an intuitive experience where users can immediately see various trending or viral locations marked on the map.</p><br>
    <div id="map"></div>
</div>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

<script src="../assets/js/map.js"></script>

<div id="map"></div>
    <script src="../assets/js/map.js"></script>

</main>

     <footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Questions about our trips?</p>
            <p>Call us at +62 822 2658 7429</p>
            <p><a href="#">Send us a message</a></p>
            <p><a href="#">Check out our FAQ</a></p>
        </div>
        <div class="footer-section">
            <h3>Destinations</h3>
            <ul>
                <li><a href="semarang.php">Semarang</a></li>
                <li><a href="bandung.php">Bandung</a></li>
                <li><a href="surabaya.php">Surabaya</a></li>
                <li><a href="malang.php">Malang</a></li>
                <li><a href="yogyakarta.php">Yogyakarta</a></li>
                <li><a href="jakarta.html">Jakarta</a></li>
                <li><a href="surakarta.html">Surakarta</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Interests</h3>
            <ul>
                <li><a href="#">Family Trip</a></li>
                <li><a href="#">Food & Drink</a></li>
                <li><a href="#">Hidden Gem</a></li>
                <li><a href="#">Wildlife & Nature</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Resources</h3>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Spots. All Rights Reserved.</p>
    </div>
</footer> 

    <script src="../assets/js/script.js"></script>
</body>
</html>