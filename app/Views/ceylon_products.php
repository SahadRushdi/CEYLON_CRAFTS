<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - Ceylon Arts & Crafts</title>
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

        .page-header {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            color: white;
            text-align: center;
            padding: 4rem 2rem;
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-bottom: 4rem;
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
            height: 280px;
            background: linear-gradient(135deg, #CD853F 0%, #D2691E 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }

        .product-info {
            padding: 2rem;
        }

        .product-info h3 {
            color: #8B4513;
            margin-bottom: 1rem;
            font-size: 1.7rem;
        }

        .product-info p {
            color: #666;
            line-height: 1.7;
            margin-bottom: 1rem;
        }

        .product-features {
            list-style: none;
            margin: 1rem 0;
        }

        .product-features li {
            padding: 0.5rem 0;
            color: #555;
            border-bottom: 1px solid #eee;
        }

        .product-features li:before {
            content: "✓ ";
            color: #8B4513;
            font-weight: bold;
            margin-right: 0.5rem;
        }

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
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="<?= base_url('/') ?>" class="logo">
                Ceylon<span>Crafts</span>
            </a>
            <ul class="nav-menu">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('/about') ?>">About</a></li>
                <li><a href="<?= base_url('/products') ?>" class="active">Products</a></li>
                <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="page-header">
        <h1>Our Product Collection</h1>
        <p>Authentic Sri Lankan Handicrafts</p>
    </div>

    <div class="container">
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">🗿</div>
                <div class="product-info">
                    <h3>Hand-Carved Wooden Sculptures</h3>
                    <p>Exquisite wooden sculptures meticulously carved from premium teak and ebony wood by master craftsmen.</p>
                    <ul class="product-features">
                        <li>Traditional Sri Lankan designs</li>
                        <li>Buddha statues and religious icons</li>
                        <li>Elephants and wildlife motifs</li>
                        <li>Custom designs available</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🎭</div>
                <div class="product-info">
                    <h3>Traditional Devil Masks</h3>
                    <p>Authentic ceremonial masks used in traditional Sri Lankan folk performances and healing rituals.</p>
                    <ul class="product-features">
                        <li>Hand-painted with natural colors</li>
                        <li>Cobra masks (Naga Raksha)</li>
                        <li>Demon masks (Yak Netum)</li>
                        <li>Collectible art pieces</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🧶</div>
                <div class="product-info">
                    <h3>Handwoven Textiles & Batik</h3>
                    <p>Beautiful traditional fabrics featuring intricate patterns created using ancient techniques.</p>
                    <ul class="product-features">
                        <li>100% cotton handloom fabrics</li>
                        <li>Traditional batik designs</li>
                        <li>Wall hangings and sarongs</li>
                        <li>Natural dyes and colors</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🏺</div>
                <div class="product-info">
                    <h3>Ceramic & Pottery</h3>
                    <p>Traditional clay pottery and ceramic pieces representing centuries of Sri Lankan ceramic artistry.</p>
                    <ul class="product-features">
                        <li>Hand-thrown pottery</li>
                        <li>Traditional water pots</li>
                        <li>Decorative vases</li>
                        <li>Glazed ceramic art</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">💎</div>
                <div class="product-info">
                    <h3>Handcrafted Jewelry</h3>
                    <p>Elegant jewelry featuring authentic Ceylon gemstones and traditional metalwork designs.</p>
                    <ul class="product-features">
                        <li>Ceylon sapphires and rubies</li>
                        <li>Traditional silver work</li>
                        <li>Antique-style designs</li>
                        <li>Certified gemstones</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🪔</div>
                <div class="product-info">
                    <h3>Brass & Metal Artwork</h3>
                    <p>Ornate brass lamps, vessels, and decorative items handcrafted using traditional metalworking techniques.</p>
                    <ul class="product-features">
                        <li>Traditional oil lamps</li>
                        <li>Decorative bowls and trays</li>
                        <li>Religious artifacts</li>
                        <li>Polished brass finish</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🥥</div>
                <div class="product-info">
                    <h3>Coconut Shell Crafts</h3>
                    <p>Unique eco-friendly products crafted from natural coconut shells by skilled artisans.</p>
                    <ul class="product-features">
                        <li>Decorative bowls and cups</li>
                        <li>Natural finish products</li>
                        <li>Sustainable and eco-friendly</li>
                        <li>Hand-polished finish</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🪵</div>
                <div class="product-info">
                    <h3>Lacquer Work</h3>
                    <p>Vibrant lacquerware items featuring traditional turning and painting techniques.</p>
                    <ul class="product-features">
                        <li>Hand-turned wooden items</li>
                        <li>Traditional patterns</li>
                        <li>Colorful lacquer finish</li>
                        <li>Decorative and functional</li>
                    </ul>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🎨</div>
                <div class="product-info">
                    <h3>Traditional Paintings</h3>
                    <p>Authentic Sri Lankan art depicting cultural scenes, religious themes, and natural beauty.</p>
                    <ul class="product-features">
                        <li>Canvas and palm leaf art</li>
                        <li>Traditional Kandyan style</li>
                        <li>Buddhist temple art</li>
                        <li>Custom commissions available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Ceylon Arts & Crafts</h3>
                <p>Preserving Sri Lankan heritage through authentic handmade crafts since 1990.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="<?= base_url('/') ?>" style="color: #FFD700; text-decoration: none;">Home</a></p>
                <p><a href="<?= base_url('/about') ?>" style="color: #FFD700; text-decoration: none;">About Us</a></p>
                <p><a href="<?= base_url('/products') ?>" style="color: #FFD700; text-decoration: none;">Products</a></p>
                <p><a href="<?= base_url('/contact') ?>" style="color: #FFD700; text-decoration: none;">Contact</a></p>
            </div>
            <div class="footer-section">
                <h3>Connect With Us</h3>
                <p>Follow us on social media</p>
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
            <p>&copy; <?= date('Y') ?> Ceylon Arts & Crafts. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
