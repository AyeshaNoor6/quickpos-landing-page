<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuickPOS</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="navbar">
    <div class="logo">QuickPOS</div>

    <nav>
        <a href="#">Home</a>
        <a href="#">Features</a>
        <a href="#">Pricing</a>
        <a href="#">Contact</a>
    </nav>

    <button class="signup">Sign Up</button>
</header>
<section class="hero">
    <h1>Modern Point of Sale System</h1>
    <p>Manage your sales, inventory, and customers all in one powerful dashboard.</p>
    <button>Get Started</button>
</section>
<section class="features">
    <h2>Why Choose QuickPOS?</h2>

    <div class="feature-container">

        <div class="feature-box">
            <h3>Fast Billing</h3>
            <p>Generate bills in seconds with optimized workflow.</p>
        </div>

        <div class="feature-box">
            <h3>Inventory Management</h3>
            <p>Track stock in real-time with smart alerts.</p>
        </div>

        <div class="feature-box">
            <h3>Customer Tracking</h3>
            <p>Manage customer data and purchase history easily.</p>
        </div>

    </div>
</section>
<section class="pricing">
    <h2>Choose Your Plan</h2>
    <p class="subtext">Simple pricing for businesses of all sizes</p>

    <div class="pricing-container">

        <div class="price-card">
            <h3>Basic</h3>
            <h1>$10</h1>
            <p>Per Month</p>
            <ul>
                <li>✔ Billing System</li>
                <li>✔ Basic Reports</li>
                <li>✔ Email Support</li>
            </ul>
            <button>Start Basic</button>
        </div>

        <div class="price-card featured">
            <h3>Pro</h3>
            <h1>$25</h1>
            <p>Per Month</p>
            <ul>
                <li>✔ Everything in Basic</li>
                <li>✔ Inventory Management</li>
                <li>✔ Priority Support</li>
            </ul>
            <button>Start Pro</button>
        </div>

        <div class="price-card">
            <h3>Enterprise</h3>
            <h1>$50</h1>
            <p>Per Month</p>
            <ul>
                <li>✔ Multi Store Support</li>
                <li>✔ Advanced Analytics</li>
                <li>✔ Dedicated Manager</li>
            </ul>
            <button>Contact Us</button>
        </div>

    </div>
</section>
<section class="contact">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you</p>

    <form action="thank-you.php" method="POST" class="contact-form">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>

    </form>
</section>
</body>
</html>