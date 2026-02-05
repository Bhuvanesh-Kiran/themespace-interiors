<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical & Networking - Themespace Interiors</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="img/main-logo.png" alt="Themespace Interiors">
                </a>
            </div>
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Services <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="interior.php">Interior</a></li>
                            <li><a href="secure.php">Secure systems(CCTV)</a></li>
                            <li><a href="electrical.php" class="active">Electrical & Networking</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Service Hero -->
    <section class="service-hero">
        <div class="container">
            <h1>Electrical & Networking Services</h1>
            <p>Home -> About Us</p>
        </div>
    </section>

    <!-- Service Content -->
    <section class="service-content">
        <div class="container">
            <div class="secure-intro">
            <div class="secure-image">
                <img src="img/elec1.jpg" alt="CCTV Systems">
            </div>
            <div class="secure-text">
                <h2>Electrical & Networking</h2>
                <p>Electrical and networking systems are the backbone of modern infrastructure, enabling seamless power distribution and communication across homes, offices, and industries. These services ensure that buildings are equipped with reliable electrical wiring, lighting, and power solutions, while also integrating advanced networking capabilities for data transfer and connectivity.</p>
            </div>
        </div>

        <div class="category-label">
            <button class="filter-btn">Lighting</button>
        </div>

        <div class="secure-gallery">
            <div class="gallery-item">
                <img src="img/elec2.jpg" alt="CCTV Installation">
            </div>
            <div class="gallery-item">
                <img src="img/elec3.jpg" alt="CCTV Camera Setup">
            </div>
            <div class="gallery-item">
                <img src="img/elec4.jpg" alt="Security Monitoring">
            </div>
        </div>
            <div class="cta-section">
                <h2>Need Electrical or Network Services?</h2>
                <a href="contact.php" class="btn-primary">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col brand-col">
                <img src="img/main-logo.png" alt="Themespace Interiors" class="footer-logo">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Our Services</h3>
                <ul>
                    <li><a href="interior.php">Interior</a></li>
                    <li><a href="secure.php">Secure systems(CCTV)</a></li>
                    <li><a href="electrical.php">Electrical & Networking</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Our branches</h3>
                <ul>
                    <li>Bangalore</li>
                    <li>Vijayawada</li>
                    <li>Guntur</li>
                    <li>Nellore</li>
                    <li>Tirupathi</li>
                    <li>East Godavari</li>
                    <li>west godavari</li>
                </ul>
            </div>

            <div class="footer-col contact-col">
                <h3>Contact Us</h3>
                <p>Sarjapura road, Dommasandra<br>Bangalore - 562125</p>
                <p>Phone: +91 9380817772</p>
                <p>Email: contact@themespaceinteriors.com</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Copyright @ 2024-2026. All Rights Reserved by Themespace Interior. Developed by <a href="#">Bhuvanesh</a></p>
        </div>
    </div>
</footer>

    <script src="js/script.js"></script>
</body>
</html>
