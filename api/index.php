<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Themespace Interiors</title>
    <link rel="stylesheet" href="css/style.css?v=1.2">
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Services <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="interior.php">Interior</a></li>
                            <li><a href="secure.php">Secure systems(CCTV)</a></li>
                            <li><a href="electrical.php">Electrical & Networking</a></li>
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

    <!-- Hero Section with Form -->
    <section class="hero" id="quote">
        <div class="container hero-container">
            <div class="hero-content">
                <h1>Transform Your Space with Themespace Interiors</h1>
                <p>At Themespace Interiors, we bring your vision to life with bespoke designs that reflect your unique style and enhance your space</p>
                <a href="#quote" class="btn-primary">Get Started</a>
            </div>
            <div class="hero-form-wrapper">
                <h2>Get A Quote</h2>
                <form action="submit_quote.php" method="POST" class="quote-form">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <select name="package" required>
                            <option value="">Select Packages</option>
                            <option value="1BHK">1BHK</option>
                            <option value="2BHK">2BHK</option>
                            <option value="3BHK">3BHK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="comment" rows="3" placeholder="Leave a comment here"></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Submit Now</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <div class="container">
            <h2>Why Choose us</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/pic1.png" alt="300+ Home Delivered">
                    </div>
                    <h3>300+ Home Delivered</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/pic2.png" alt="Flat 10 Years warranty">
                    </div>
                    <h3>Flat 10Years warranty</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/pic3.png" alt="50+ Inbuilt Designers">
                    </div>
                    <h3>50+ Inbuilt Designers</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/days.jpg" alt="45 days">
                    </div>
                    <h3>45 days</h3>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="img/pic5.png" alt="No Hidden Costs">
                    </div>
                    <h3>No Hidden Costs</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Professional Services</h2>
                <p>We provide these services</p>
            </div>
            
            <div class="services-grid">
                <a href="interior.php" class="service-card">
                    <div class="service-img">
                        <img src="img/celling.jpg" alt="Interiors">
                    </div>
                    <div class="service-info">
                        <h3>Interiors</h3>
                        <p>Interior refers to the inner beauty part of a building or space.</p>
                    </div>
                </a>

                <a href="secure.php" class="service-card">
                    <div class="service-img">
                        <img src="img/cctv1.jpg" alt="Secure systems (CCTV)">
                    </div>
                    <div class="service-info">
                        <h3>Secure systems (CCTV)</h3>
                        <p>We believe in providing not only beautiful spaces but also secure environments.</p>
                    </div>
                </a>

                <a href="electrical.php" class="service-card">
                    <div class="service-img">
                        <img src="img/lan.jpg" alt="Electrical & Networking">
                    </div>
                    <div class="service-info">
                        <h3>Electrical & Networking</h3>
                        <p>Themespace Interiors offers comprehensive electrical and networking solutions.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="portfolio-filters">
                <button class="filter-btn active">FULL INTERIOR</button>
                <button class="filter-btn">KITCHEN</button>
                <button class="filter-btn">WARDROBES</button>
            </div>

            <div class="portfolio-grid">
                <div class="portfolio-card">
                    <img src="img/kitchen1.jpg" alt="Interior Design 1">
                </div>
                <div class="portfolio-card">
                    <img src="img/kitchen2.jpg" alt="Interior Design 2">
                </div>
                <div class="portfolio-card">
                    <img src="img/kitchen3.jpg" alt="Interior Design 3">
                </div>
                <div class="portfolio-card">
                    <img src="img/interior1.jpg" alt="Interior Design 4">
                </div>
                <div class="portfolio-card">
                    <img src="img/interior2.jpg" alt="Interior Design 5">
                </div>
                <div class="portfolio-card">
                    <img src="img/interior3.jpg" alt="Interior Design 6">
                </div>
                <div class="portfolio-card">
                    <img src="img/wardrobe1.jpg" alt="Interior Design 7">
                </div>
                <div class="portfolio-card">
                    <img src="img/wardrobe2.jpg" alt="Interior Design 8">
                </div>
                <div class="portfolio-card">
                    <img src="img/wardrobe3.jpg" alt="Interior Design 9">
                </div>
            </div>
        </div>
    </section>
    
    <section class="unique-features">
        <div class="container">
            <h2>Some Features that Made us Unique</h2>
            <p class="section-subtitle">At Themespace Interiors, we believe that exceptional interiors.</p>
            
            <div class="unique-grid">
                <div class="unique-card">
                    <div class="card-icon"><i class="fas fa-user"></i></div>
                    <h3>Tailored Design Solutions</h3>
                    <p>We pride ourselves on delivering highly personalized interior solutions that perfectly match the specific needs, taste, and vision of our clients.</p>
                </div>

                <div class="unique-card">
                    <div class="card-icon"><i class="fas fa-newspaper"></i></div>
                    <h3>Innovative Use Of Space</h3>
                    <p>Our team excels at maximizing space efficiency. Whether you have a small apartment or a large commercial office, we bring innovative space-planning solutions.</p>
                </div>

                <div class="unique-card">
                    <div class="card-icon"><i class="fas fa-leaf"></i></div>
                    <h3>Sustainable And Eco-Friendly Designs</h3>
                    <p>Sustainability is at the core of our design philosophy. We are committed to sourcing eco-friendly materials and using sustainable design.</p>
                </div>

                <div class="unique-card">
                    <div class="card-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Attention To Detail</h3>
                    <p>The magic is in the details, and we leave no stone unturned in ensuring that every element in your space is meticulously crafted and curated.</p>
                </div>

                <div class="unique-card">
                    <div class="card-icon"><i class="fas fa-gem"></i></div>
                    <h3>Project Management</h3>
                    <p>With Themespace Interiors, you can expect a hassle-free design journey. Our team handles everything from concept to completion.</p>
                </div>

                <div class="unique-card">
                    <div class="card-icon"><i class="fas fa-comments"></i></div>
                    <h3>Client-Centric Approach</h3>
                    <p>We believe that collaboration is the key to a successful design. From the very first consultation to the final reveal, we work closely with our clients.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-banner">
        <div class="container">
            <div class="cta-content">
                <h2>Looking for a <br>quality and affordable interior design?</h2>
                <p>Speak with our design experts to discuss your vision and get a personalized quote.</p>
                <a href="#quote" class="btn-quote">REQUEST QUOTE NOW</a>
            </div>
        </div>
    </section>

    <section class="how-we-do">
    <div class="container">
        <h2>how we do</h2>
        <div class="process-wrapper">
            <div class="process-step">
                <div class="icon-circle"><img src="img/meet-designer.png" alt=""></div>
                <span>Meet a Designer</span>
            </div>
            <div class="process-step">
                <div class="icon-circle"><img src="img/book-renovation.png" alt=""></div>
                <span>Book A Renovation</span>
            </div>
            <div class="process-step">
                <div class="icon-circle"><img src="img/execution.png" alt=""></div>
                <span>Execution begins</span>
            </div>
            <div class="process-step">
                <div class="icon-circle"><img src="img/final-installation.png" alt=""></div>
                <span>Final Installation</span>
            </div>
            <div class="process-step">
                <div class="icon-circle"><img src="img/move-in.png" alt=""></div>
                <span>Move In And Enjoy</span>
            </div>
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