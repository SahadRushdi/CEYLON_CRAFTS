<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Arts & Crafts - Authentic Sri Lankan Handicrafts</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #333;
        }

        /* Navigation Bar */
        .navbar {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo span {
            color: #FFD700;
            margin-left: 0.5rem;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-menu li a:hover {
            background-color: rgba(255, 215, 0, 0.2);
            transform: translateY(-2px);
        }

        .nav-menu li a.active {
            background-color: #FFD700;
            color: #8B4513;
        }

        /* Banner */
        .banner {
            background: linear-gradient(rgba(139, 69, 19, 0.7), rgba(160, 82, 45, 0.7)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23D2691E" width="1200" height="600"/><circle fill="%23CD853F" cx="200" cy="150" r="80"/><circle fill="%23CD853F" cx="600" cy="400" r="100"/><circle fill="%23CD853F" cx="1000" cy="200" r="90"/><path fill="%238B4513" d="M0,500 Q300,450 600,500 T1200,500 L1200,600 L0,600 Z"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 8rem 2rem;
            position: relative;
        }

        .banner h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .banner p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #FFD700;
            color: #8B4513;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .btn:hover {
            background-color: #FFA500;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #8B4513;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, #FFD700, #FFA500);
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-text p {
            margin-bottom: 1.5rem;
            text-align: justify;
        }

        .about-image {
            background: linear-gradient(135deg, #CD853F 0%, #D2691E 100%);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
        }

        .about-image-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(45deg, #8B4513 25%, transparent 25%, transparent 75%, #8B4513 75%, #8B4513),
                        linear-gradient(45deg, #8B4513 25%, transparent 25%, transparent 75%, #8B4513 75%, #8B4513);
            background-size: 30px 30px;
            background-position: 0 0, 15px 15px;
            background-color: #D2691E;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #CD853F 0%, #D2691E 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-info h3 {
            color: #8B4513;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .product-info p {
            color: #666;
            line-height: 1.6;
        }

        /* Features Section */
        .features {
            background: linear-gradient(135deg, #FFF8DC 0%, #FAEBD7 100%);
            padding: 4rem 0;
            margin-top: 4rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            color: #8B4513;
            margin-bottom: 1rem;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #8B4513 0%, #654321 100%);
            color: white;
            padding: 3rem 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: #FFD700;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .footer-section p {
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 215, 0, 0.2);
            color: #FFD700;
            border-radius: 50%;
            text-decoration: none;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: #FFD700;
            color: #8B4513;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 215, 0, 0.3);
            color: #FFD700;
        }

        @media (max-width: 768px) {
            .nav-menu {
                gap: 1rem;
            }

            .nav-menu li a {
                font-size: 0.9rem;
                padding: 0.5rem;
            }

            .banner h1 {
                font-size: 2.5rem;
            }

            .banner p {
                font-size: 1.2rem;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .logo {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="<?= base_url('/') ?>" class="logo">
                Ceylon<span>Crafts</span>
            </a>
            <ul class="nav-menu">
                <li><a href="<?= base_url('/') ?>" class="active">Home</a></li>
                <li><a href="<?= base_url('/about') ?>">About</a></li>
                <li><a href="<?= base_url('/products') ?>">Products</a></li>
                <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Banner -->
    <section class="banner">
        <h1>Authentic Ceylon Arts & Crafts</h1>
        <p>Discover the Rich Heritage of Sri Lankan Handicrafts</p>
        <a href="<?= base_url('/products') ?>" class="btn">Explore Our Collection</a>
    </section>

    <!-- About Ceylon Arts & Crafts -->
    <div class="container">
        <h2 class="section-title">About Ceylon Arts & Crafts</h2>
        <div class="about-content">
            <div class="about-text">
                <p>
                    Welcome to Ceylon Arts & Crafts, your gateway to the magnificent world of authentic Sri Lankan handicrafts. 
                    For over three decades, we have been dedicated to preserving and promoting the rich cultural heritage of Ceylon 
                    through our exquisite collection of handmade artworks.
                </p>
                <p>
                    Our artisans are skilled craftspeople who have inherited generations of traditional knowledge, creating each piece 
                    with meticulous attention to detail and passion. From intricately carved wooden sculptures to vibrant handwoven 
                    textiles, every item tells a unique story of Sri Lankan culture and artistry.
                </p>
                <p>
                    We work directly with local communities across Sri Lanka, ensuring fair trade practices and supporting the 
                    livelihoods of traditional craftsmen. When you purchase from Ceylon Arts & Crafts, you're not just acquiring 
                    a beautiful piece of art – you're preserving a cultural legacy.
                </p>
            </div>
            <div class="about-image">
                <div class="about-image-placeholder">
                    🎨 Traditional Craftsmanship
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="container">
        <h2 class="section-title">Our Featured Crafts</h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">🗿 Wood Carvings</div>
                <div class="product-info">
                    <h3>Hand-Carved Sculptures</h3>
                    <p>Exquisite wooden sculptures carved from high-quality teak and ebony, featuring traditional Sri Lankan motifs and Buddhist imagery.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">🎭 Traditional Masks</div>
                <div class="product-info">
                    <h3>Ceremonial Masks</h3>
                    <p>Authentic devil masks and traditional dance masks used in Sri Lankan folk performances, hand-painted with vibrant colors.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">🧶 Textiles</div>
                <div class="product-info">
                    <h3>Handwoven Fabrics</h3>
                    <p>Beautiful batik and handloom textiles featuring traditional patterns, created using age-old techniques passed down through generations.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">🏺 Pottery</div>
                <div class="product-info">
                    <h3>Ceramic Artwork</h3>
                    <p>Traditional pottery and ceramic pieces, hand-thrown and glazed, representing centuries of Sri Lankan ceramic artistry.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">💎 Jewelry</div>
                <div class="product-info">
                    <h3>Handcrafted Jewelry</h3>
                    <p>Elegant jewelry featuring Ceylon gemstones and traditional metalwork, combining ancient designs with modern aesthetics.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">🪔 Brassware</div>
                <div class="product-info">
                    <h3>Brass Artifacts</h3>
                    <p>Ornate brass lamps, vessels, and decorative items handcrafted by master artisans using traditional metalworking techniques.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Ceylon Crafts</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">✨</div>
                    <h3>Authentic Quality</h3>
                    <p>100% genuine handmade crafts directly from Sri Lankan artisans</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h3>Fair Trade</h3>
                    <p>Supporting local communities through ethical trade practices</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🌍</div>
                    <h3>Worldwide Shipping</h3>
                    <p>Safe and secure delivery to destinations across the globe</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎁</div>
                    <h3>Unique Pieces</h3>
                    <p>Each item is one-of-a-kind, showcasing individual artisan craftsmanship</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Ceylon Arts & Crafts</h3>
                <p>Preserving Sri Lankan heritage through authentic handmade crafts since 1990. We connect traditional artisans with art lovers worldwide.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="<?= base_url('/') ?>" style="color: #FFD700; text-decoration: none;">Home</a></p>
                <p><a href="<?= base_url('/about') ?>" style="color: #FFD700; text-decoration: none;">About Us</a></p>
                <p><a href="<?= base_url('/products') ?>" style="color: #FFD700; text-decoration: none;">Our Products</a></p>
                <p><a href="<?= base_url('/contact') ?>" style="color: #FFD700; text-decoration: none;">Contact</a></p>
            </div>
            <div class="footer-section">
                <h3>Connect With Us</h3>
                <p>Follow us on social media to stay updated with our latest collections and artisan stories.</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/ceyloncrafts" target="_blank" title="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/ceyloncrafts" target="_blank" title="YouTube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> Ceylon Arts & Crafts. All Rights Reserved. | Handcrafted with ❤️ in Sri Lanka</p>
        </div>
    </footer>
</body>
</html>
