<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple_ro_db";  // Your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert cart items into orders table
if (isset($_SESSION['cart'])) {
  foreach ($_SESSION['cart'] as $item) {
    $product_name = $conn->real_escape_string($item['name']);
    $quantity = (int)$item['quantity'];

    $user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'guest';

    $sql = "INSERT INTO orders (user_name, product_name, quantity) VALUES ('$user_name', '$product_name', $quantity)";

    $conn->query($sql);
  }

  $_SESSION['ordered_items'] = $_SESSION['cart']; // ✅ Save cart before clearing
  unset($_SESSION['cart']); // ✅ Clear cart session
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout - Simple RO</title>

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    .checkout-container {
      max-width: 800px;
      margin: 100px auto 40px;
      padding: 40px 20px;
      background: #fff;
      text-align: center;
      border-radius: 10px;
      box-shadow: var(--shadow);
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .tick-icon {
    width: 100px;
    height: 100px;
    background-color: #e6f5e9;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    overflow: hidden;
  }
  .tick-icon img {
    width: 60%;
    height: 60%;
    object-fit: contain;
  }
    .checkout-heading {
      font-size: 28px;
      font-weight: 700;
      color: black;
      margin-bottom: 5px;
    }
    .product-list {
      margin: 30px 0 10px;
      text-align: center;
    }
    .product-list li {
      font-size: 18px;
      margin-bottom: 8px;
      color: black;
    }
    .confirmation-message {
      font-size: 20px;
      font-weight: bold;
      margin-top: 5px;
      color: black;
    }
    .home-btn {
      margin-top: 30px;
      display: inline-block;
      background: black;
      color: white;
      padding: 12px 24px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      text-decoration: none;
      transition: var(--transition);
    }
    .home-btn:hover {
      background: rgb(2,7,162);
    }
  </style>
</head>

<body id="top">

<header class="header">
  <div class="alert">
    <div class="container">
      <p class="alert-text">Free Shipping On All Orders ₹5000+</p>
    </div>
  </div>

  <div class="header-top" data-header>
    <div class="container" style="display: flex; flex-direction: column; align-items: center;">
      <a href="index.php" class="logo" style="margin: 20px 0;">
        <img src="./assets/images/logo.jpg" width="179" height="26" alt="Simple RO Logo">
      </a>
      <nav class="navbar" style="margin-top: 5px;">
        <ul class="navbar-list" style="display: flex; justify-content: center; gap: 30px; list-style: none; padding: 0; margin: 0;">
          <li><a href="index.php#home" class="navbar-link">Home</a></li>
          <li><a href="index.php#collection" class="navbar-link">Collection</a></li>
          <li><a href="products.php" class="navbar-link">Shop</a></li>
          <li><a href="index.php#offer" class="navbar-link">Offer</a></li>
          <li><a href="index.php#blog" class="navbar-link">Blog</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<main>
  <section class="checkout-container">
    <div class="tick-icon">
      <img src="./assets/images/green-tick.png" alt="Success">
    </div>
    <h2 class="checkout-heading">Booking Successful!</h2>

    <ul class="product-list">
      <?php
        if (isset($_SESSION['ordered_items'])) {
          foreach ($_SESSION['ordered_items'] as $item) {
            echo '<li>' . htmlspecialchars($item['name']) . ' (Quantity: ' . $item['quantity'] . ')</li>';
          }
          unset($_SESSION['ordered_items']);
        }
      ?>
    </ul>

    <div class="confirmation-message">
      These products have been successfully placed. <br>Our team will contact you shortly.
    </div>

    <a href="../dashboard.php" class="home-btn">Go To Home</a>
  </section>
</main>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
