<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce</title>
    <link rel="stylesheet" href="styles.css">
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
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #444;
            color: #fff;
            padding: 1em 3em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 1.8em;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 25px;
        }

        .nav-links a,
        .nav-link button {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 1em;
            border: none;
            background: none;
            cursor: pointer;
            padding: 0.5em 1em;
            border-radius: 4px;
        }

        .nav-links a:hover,
        .nav-link button:hover {
            background-color: #555;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 30px;
            padding: 3em 2em;
            background-color: #f9f9f9;
        }

        .product {
            background-color: #fff;
            padding: 25px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .product h3 {
            margin: 15px 0;
            font-size: 1.3em;
            color: #333;
        }

        .product p {
            color: #666;
            margin-bottom: 20px;
        }

        .product input {
            padding: 12px 25px;
            background-color: #444;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .product input:hover {
            background-color: #666;
        }

        /* Footer */
        .footer {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 2em 0;
            margin-top: 30px;
            font-size: 0.9em;
        }

        .footer p {
            margin-bottom: 10px;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #ddd;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">ShopLogo</div>
        <ul class="nav-links">
            <li><a href="/index">Home</a></li>
            @auth
            <li class="nav-item">
                <a href="/useraddress" type="button" class="nav-link"  >
                    {{ auth()->user()->email }}
                </a>
            </li>
            <li class="nav-item">       
                <form action="{{ route('logout') }}" method="post" >
                    @csrf
                    <input type="submit" value="Logout" class="nav-link"style="background: #5e5c5c">
                </form>
            </li>
            @else
            <li class="nav-item"><a class="nav-link" href="/login">Sign In</a></li>
            <li class="nav-item"><a class="nav-link" href="/register">Sign Up</a></li>
            @endauth
        </ul>
    </nav>

    <!-- Product Grid -->
    <section class="product-grid">
    @foreach($data as $item)
        <form action="{{ route('product.add', ['id' => $item->id]) }}" class="product" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $item->id }}">
            <h3><img src="{{ asset("$item->picture") }}" alt="abbc"></h3>
            <h3>{{ $item->name }}</h3>
            <p>RM{{ $item->price }} per KG</p>
            <p>{{ $item->description }}</p>
            <button type="submit">add to cart</button>
        </form>
        @endforeach
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Simple E-commerce. All rights reserved.</p>
        <p><a href="#">Contact Us</a> | <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></p>
    </footer>
</body>

</html>
