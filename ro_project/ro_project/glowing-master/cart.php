<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart - Simple RO</title>

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    .cart-item > div:last-child {
      color: black;
      font-weight: 600;
      font-size: 16px;
    }
    .cart-container {
      max-width: 1000px;
      margin: 100px auto 40px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: var(--shadow);
    }
    .cart-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: var(--bg-light);
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: var(--shadow);
    }
    .cart-item img {
      width: 80px;
      height: auto;
      border-radius: 8px;
    }
    .cart-info {
      flex: 2;
      margin-left: 20px;
    }
    .cart-info h3 { font-size: 18px; margin-bottom: 8px; color: black; }
    .cart-info p { font-size: 16px; color: black; }
    .cart-qty {
      display: flex;
      align-items: center;
      gap: 10px;
      flex: 1;
      justify-content: center;
    }
    .qty-btn {
      background: none;
      border: 1px solid var(--primary);
      color: black;
      padding: 2px 10px;
      cursor: pointer;
      border-radius: 4px;
      font-size: 18px;
      transition: var(--transition);
    }
    .qty-btn:hover { background: var(--primary); color: black; }
    .cart-total {
      text-align: right;
      margin-top: 30px;
      font-size: 24px;
      font-weight: bold;
      color: black;
    }
    .back-to-shop {
      display: inline-block;
      margin-top: 20px;
      color: black;
      font-weight: 600;
      text-decoration: none;
      transition: var(--transition);
    }
    .back-to-shop:hover { text-decoration: underline; }
    .cart-qty span { color: black; font-size: 18px; font-weight: 600; }
  </style>
</head>

<body id="top">
<header class="header">
  <div class="alert"><div class="container"><p class="alert-text">Free Shipping On All Orders ₹5000+</p></div></div>
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
  <section class="cart-container" id="cart-items"></section>
  <section class="cart-container">
    <div class="cart-total" id="grand-total">Grand Total: ₹0</div>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
      <a href="products.php" class="back-to-shop">← Continue Shopping</a>
      <button class="btn btn-primary" style="padding: 12px 24px; font-size: 16px; font-weight: 600; cursor: pointer;" onclick="proceedToCheckout()">Proceed to Checkout</button>
    </div>
  </section>
</main>

<script>
  const currentUser = "<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'guest'; ?>";
  function updateCartDisplay() {
    const cart = JSON.parse(localStorage.getItem(`${currentUser}_cart`)) || [];
    const cartContainer = document.getElementById('cart-items');
    const grandTotalElement = document.getElementById('grand-total');
    cartContainer.innerHTML = '';
    let grandTotal = 0;
    cart.forEach((item, index) => {
      const itemTotal = item.price * item.quantity;
      grandTotal += itemTotal;
      const cartItem = document.createElement('div');
      cartItem.className = 'cart-item';
      cartItem.innerHTML = `
        <img src="./assets/images/${item.image}" alt="${item.name}">
        <div class="cart-info">
          <h3>${item.name}</h3>
          <p>Price: ₹${item.price.toLocaleString()}</p>
        </div>
        <div class="cart-qty">
          <button class="qty-btn" onclick="changeQuantity(${index}, -1)">-</button>
          <span>${item.quantity}</span>
          <button class="qty-btn" onclick="changeQuantity(${index}, 1)">+</button>
        </div>
        <div>₹${itemTotal.toLocaleString()}</div>
      `;
      cartContainer.appendChild(cartItem);
    });
    grandTotalElement.textContent = `Grand Total: ₹${grandTotal.toLocaleString()}`;
  }

  function changeQuantity(index, change) {
    const cart = JSON.parse(localStorage.getItem(`${currentUser}_cart`)) || [];
    cart[index].quantity += change;
    if (cart[index].quantity <= 0) cart.splice(index, 1);
    localStorage.setItem(`${currentUser}_cart`, JSON.stringify(cart));
    updateCartDisplay();
  }

  function proceedToCheckout() {
  const cart = JSON.parse(localStorage.getItem(`${currentUser}_cart`)) || [];

  fetch('save-cart.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(cart)
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
      localStorage.removeItem(`${currentUser}_cart`);
      window.location.href = 'checkout.php';
    } else {
      alert('Failed to save cart before checkout.');
    }
  });
}


  window.addEventListener('DOMContentLoaded', updateCartDisplay);
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
