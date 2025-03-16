<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PC FACTORY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, nav, footer {
            background-color: rgb(185, 34, 34);
            background: linear-gradient(135deg, rgb(51, 12, 206) 0%, rgb(13, 166, 72) 28%, rgb(0, 247, 255) 100%);
            background-color: rgb(0, 247, 255) 50%;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 4px;
        }
        .button {
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #05f715;} /* Green */
.button2 {background-color: #0009ba;} /* Blue */
.button3 {background-color: #e80c1e;}

.btn:hover {
  background-color: RoyalBlue;
}
        main {
            padding: 2px;
            background-color: #2b2c2c00;
        }
        .hero {
            background-color: #3a3a3a;
            text-align: center;
            padding: 2px;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product {
            border: 1px solid #081f02;
            padding: 20px;
            margin: 20px;
            background-color: rgb(215, 255, 219);
            width: 200px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        button {
            padding: 0.5em;
            background-color: #000000;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <header>
        <h1>PC FACTORY</h1>
        <nav>
        <a href="products.php"><button class="button button1">Products</button></a> |
            <a href="login.php"><button class="button button2">Login</button></a>|
            <a href="signup.php"><button class="button button3">Sign up</button></a>|
            
        </nav>
    </header>
    <main>
        <h2>Our Products</h2>
        <div class="product-list">
            <div class="product">
                <h3>Cabinet</h3>
                <img src="pro1.jpeg" alt="PC Cabinet">
                <p>High-quality PC cabinet.</p>
                <button><b>MORE</b></button>
            </div>
            <div class="product">
                <h3>Keyboard</h3>
                <img src="pro3.jpg" alt="PC keyboard">
                <p>Ergonomic keyboard for comfortable typing.</p>
                <button><b>MORE</b></button>
            </div>
            <div class="product">
                <h3>Mouse</h3>
                <img src="pro2.jpeg" alt="PC Cabinet">
                <p>Precision mouse for smooth navigation.</p>
                <button><b>MORE</b></button>
            </div>
            <div class="product">
                <h3>Controller</h3>
                <img src="pro4.jpeg" alt="PC Cabinet">
                <p>Responsive controller for gaming.</p>
                <button><b>MORE</b></button>
            </div>
            <div class="product">
                <h3>Motherboard</h3>
                <img src="pro5.png" alt="PC Cabinet">
                <p>Durable motherboard with advanced features.</p>
                <button><b>MORE

                    
                </b></button>
            </div>
    </main>
    <footer>
        <p>&copy; 2025 PC FACTORY</p>
    </footer>
</body>
</html>