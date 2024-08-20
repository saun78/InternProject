<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Body */
body {
    background-color: #f4f4f4;
    color: #333;
}

/* Navigation Bar */
.navbar {
    background-color: #333;
    color: #fff;
    padding: 1em 2em;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5em;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-left: 20px;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #f4f4f4;
}

.cart-icon img {
    width: 24px;
}

/* Product Grid */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    padding: 2em;
    background-color: #fff;
}

.product {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    text-align: center;
}

.product img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.product h3 {
    margin: 10px 0;
    font-size: 1.2em;
}

.product p {
    color: #888;
    margin-bottom: 15px;
}

.product button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.product button:hover {
    background-color: #555;
}

/* Footer */
.footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
    margin-top: 20px;
}

</style>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">ShopLogo</div>
        <ul class="nav-links">
            <li><a href="/index">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/userdetail">user</a></li>
            <li><a href="/useraddress">address</a></li>
        </ul>
        <div class="cart-icon">
            <a href="#"><img src="cart.png" alt="Cart"></a>
        </div>
    </nav>

    <!-- Product Section -->
    <section class="product-grid">
        <div class="product">
            <img src="product1.jpg" alt="Product 1">
            <h3>Product 1</h3>
            <p>$29.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h3>Product 2</h3>
            <p>$39.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="product3.jpg" alt="Product 3">
            <h3>Product 3</h3>
            <p>$19.99</p>
            <button>Add to Cart</button>
        </div>
        <!-- Add more products as needed -->
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Simple E-commerce. All rights reserved.</p>
    </footer>
</body>
</html>
