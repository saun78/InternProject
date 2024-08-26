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

.product input {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.product input:hover {
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
            @auth
            <li class="nav-item">
                <button type="button" class="nav-link">
                    {{ auth()->user()->email }}
                </button>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <input type="submit" value="Logout" class="nav-link" style="background: transparent;border:0px;">
                </form>
            </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Sign Up</a>
        </li>
        @endauth
    </nav>

   @foreach ($data as $item)
   <form action="/index" method="POST">
    <section class="product-grid">
        <div class="product">
            <h3>{{ $item->name }}</h3>
            <p>RM{{ $item->price }} per KG</p>
            <p>{{ $item->category }}</p>
            <input type="submit" value="add to cart">
        </div>
<!-- Add more products as needed -->
    </section>
</form>
   @endforeach
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Simple E-commerce. All rights reserved.</p>
    </footer>
</body>
</html>
