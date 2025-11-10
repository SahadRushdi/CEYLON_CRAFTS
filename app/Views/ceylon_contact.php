<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ceylon Arts & Crafts</title>
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

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info {
            background: linear-gradient(135deg, #FFF8DC 0%, #FAEBD7 100%);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .contact-info h2 {
            color: #8B4513;
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .info-item {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .info-item h3 {
            color: #8B4513;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-item p {
            color: #666;
            line-height: 1.8;
        }

        .contact-form {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .contact-form h2 {
            color: #8B4513;
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #8B4513;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-family: 'Georgia', serif;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #8B4513;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
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

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
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
                <li><a href="<?= base_url('/products') ?>">Products</a></li>
                <li><a href="<?= base_url('/contact') ?>" class="active">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="page-header">
        <h1>Get In Touch</h1>
        <p>We'd Love to Hear From You</p>
    </div>

    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Contact Information</h2>
                
                <div class="info-item">
                    <h3>📍 Our Location</h3>
                    <p>Ceylon Arts & Crafts Gallery<br>
                    123 Galle Road, Colombo 03<br>
                    Sri Lanka</p>
                </div>

                <div class="info-item">
                    <h3>📞 Phone</h3>
                    <p>+94 11 234 5678<br>
                    +94 77 123 4567</p>
                </div>

                <div class="info-item">
                    <h3>📧 Email</h3>
                    <p>info@ceyloncrafts.lk<br>
                    orders@ceyloncrafts.lk</p>
                </div>

                <div class="info-item">
                    <h3>🕒 Business Hours</h3>
                    <p>Monday - Saturday: 9:00 AM - 6:00 PM<br>
                    Sunday: 10:00 AM - 4:00 PM<br>
                    Public Holidays: Closed</p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form action="<?= base_url('/contact/submit') ?>" method="post">
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
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
