<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wishlist - Simple RO</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    .wishlist-container {
      max-width: 1000px;
      margin: 100px auto 40px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: var(--shadow);
    }
    .wishlist-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: var(--bg-light);
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: var(--shadow);
    }
    .wishlist-item img {
      width: 80px;
      height: auto;
      border-radius: 8px;
    }
    .wishlist-info {
      flex: 2;
      margin-left: 20px;
    }
    .wishlist-info h3 { font-size: 18px; margin-bottom: 8px; color: black; }
    .wishlist-info p { font-size: 16px; color: black; }
    .back-to-shop {
      display: inline-block;
      margin-top: 20px;
      color: black;
      font-weight: 600;
      text-decoration: none;
      transition: var(--transition);
    }
    .back-to-shop:hover { text-decoration: underline; }
    .remove-btn {
      background-color: red;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.2s;
      margin-left: 20px;
    }
    .remove-btn:hover { background-color: darkred; }
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
  <section class="wishlist-container" id="wishlist-section">
    <h2 style="text-align: center; font-size: 28px; font-weight: 700; margin-bottom: 30px; color: black;">Your Wishlist</h2>
    <div id="wishlist-items"></div>
  </section>
  <section class="wishlist-container" style="text-align: center;">
    <a href="products.php" class="back-to-shop">← Continue Shopping</a>
  </section>
</main>

<script>
  const currentUser = "<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'guest'; ?>";
  function updateWishlistDisplay() {
    const wishlist = JSON.parse(localStorage.getItem(`${currentUser}_wishlist`)) || [];
    const wishlistContainer = document.getElementById('wishlist-items');
    wishlistContainer.innerHTML = '';
    if (wishlist.length === 0) {
      wishlistContainer.innerHTML = '<p style="text-align: center; font-size: 20px;">No items in Wishlist yet.</p>';
      return;
    }
    wishlist.forEach((item) => {
      const wishlistItem = document.createElement('div');
      wishlistItem.className = 'wishlist-item';
      wishlistItem.innerHTML = `
        <img src="./assets/images/${item.image}" alt="${item.name}">
        <div class="wishlist-info">
          <h3>${item.name}</h3>
          <p>Price: ₹${item.price.toLocaleString()}</p>
        </div>
        <button class="remove-btn" onclick="removeFromWishlist('${item.id}')">Remove</button>
      `;
      wishlistContainer.appendChild(wishlistItem);
    });
  }

  function removeFromWishlist(id) {
    let wishlist = JSON.parse(localStorage.getItem(`${currentUser}_wishlist`)) || [];
    wishlist = wishlist.filter(item => item.id !== id);
    localStorage.setItem(`${currentUser}_wishlist`, JSON.stringify(wishlist));
    updateWishlistDisplay();
    const badge = document.getElementById('wishlist-count');
    if (badge) badge.innerText = wishlist.length;
  }

  window.addEventListener('DOMContentLoaded', updateWishlistDisplay);
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
