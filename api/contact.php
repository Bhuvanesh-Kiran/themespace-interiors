<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Themespace Interiors</title>
    <link rel="stylesheet" href="/css/style.css?v=1.4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="/img/main-logo.png" alt="Themespace Interiors">
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
                            <li><a href="electrical.php">Electrical & Networking</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="service-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Home -> Contact Us</p>
    </div>
</section>

<section class="contact-details-section">
    <div class="container">
        <div class="contact-container-box">
            <div class="contact-simple-info">
                <div class="info-row">
                    <i class="fas fa-home"></i>
                    <p>1101/1, Sarjapura - Attibele Rd, next to Ravi Theatre, above Arun ice-creams, Sarjapura, Bengaluru, Karnataka 562125</p>
                </div>
                <div class="info-row">
                    <i class="fas fa-phone"></i>
                    <p>093808 17772</p>
                </div>
                <div class="info-row">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <p>contact@themespaceinteriors.com</p>
                        <span>Send us your query anytime!</span>
                    </div>
                </div>
            </div>

            <div class="contact-form-block">
                <form action="submit_contact.php" method="POST">
                    <div class="form-main-row">
                        <div class="form-inputs-col">
                            <input type="text" name="name" placeholder="Enter your name" required>
                            <input type="email" name="email" placeholder="Enter email address" required>
                            <input type="tel" name="phone" placeholder="Enter your number" required>
                        </div>
                        <div class="form-textarea-col">
                            <textarea name="message" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-send">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="main-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col brand-col">
                <img src="/img/main-logo.png" alt="Themespace Interiors" class="footer-logo">
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

    <script src="/js/script.js"></script>
</body>
</html>
