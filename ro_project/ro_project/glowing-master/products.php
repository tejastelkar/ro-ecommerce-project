
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - Simple RO</title>

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="./assets/images/logo.png">

  <style>
    .shop-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }
    .shop-card {
      transition: transform 0.3s;
    }
    .shop-card:hover {
      transform: translateY(-5px);
    }
    .action-btn {
      cursor: pointer;
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
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">

      <!-- Left: Empty to center things properly -->
      <div style="flex: 1;"></div>

      <!-- Center: Logo -->
      <a href="index.php" class="logo" style="flex: 0;">
        <img src="./assets/images/logo.jpg" width="179" height="26" alt="RO-logo">
      </a>

      <!-- Center: Navbar -->
<nav class="navbar" style="flex: 2; text-align: center;">
  <ul class="navbar-list" style="display: inline-flex; gap: 30px; list-style: none; margin: 0; padding: 0;">
    <li><a href="../dashboard.php" class="navbar-link">Home</a></li>
    <li><a href="../dashboard.php#collection" class="navbar-link">Collection</a></li>
    <li><a href="/ro_project/glowing-master/products.php" class="navbar-link">Shop</a></li>
    <li><a href="index.php#offer" class="navbar-link">Offer</a></li>
    <li><a href="index.php#blog" class="navbar-link">Blog</a></li>
  </ul>
</nav>


      <!-- Right: Wishlist + Cart -->
      <div class="header-actions" style="flex: 1; display: flex; align-items: center; justify-content: flex-end; gap: 25px;">
        <button class="header-action-btn" aria-label="wishlist" onclick="window.location.href='wishlist.php'">
          <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
          <span id="wishlist-count" class="btn-badge">0</span>
        </button>

        <button class="header-action-btn" aria-label="cart" onclick="window.location.href='cart.php'" style="display: flex; align-items: center; gap: 5px; background: none; border: none; cursor: pointer;">
  <data id="cart-total" class="btn-text" value="0">₹0.00</data>
  <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
  <span id="cart-count" class="btn-badge" style="background: black; color: white; border-radius: 50%; font-size: 12px; padding: 2px 5px;">0</span>
</button>

      </div>

    </div>
  </div>
</header>


<main>
<article>

<section class="section shop" id="shop" aria-label="shop" data-section>
  <div class="container">
    <div class="title-wrapper">
      <h2 class="h2 section-title">Our Products</h2>
    </div>
    <div class="shop-grid">

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-01.jpg" width="540" height="720" alt="Big RO Plant - 3 vessels" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="1" data-name="Big RO Plant - 3 vessels" data-price="8999" data-image="product-01.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹8999</span></div>
      <h3><a href="#" class="card-title">Big RO Plant - 3 vessels</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-02.jpg" width="540" height="720" alt="Steel Industrial Plant" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="2" data-name="Steel Industrial Plant" data-price="255999" data-image="product-02.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹255999</span></div>
      <h3><a href="#" class="card-title">Steel Industrial Plant</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-03.jpg" width="540" height="720" alt="Double Blue Tanks" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="3" data-name="Double Blue Tanks" data-price="12499" data-image="product-03.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹12499</span></div>
      <h3><a href="#" class="card-title">Double Blue Tanks</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-04.jpg" width="540" height="720" alt="Chiller 2 Ton" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="4" data-name="Chiller 2 Ton" data-price="3999" data-image="product-04.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹3999</span></div>
      <h3><a href="#" class="card-title">Chiller 2 Ton</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-05.jpg" width="540" height="720" alt="250 LPH RO Plant" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="5" data-name="250 LPH RO Plant" data-price="70000" data-image="product-05.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹70000</span></div>
      <h3><a href="#" class="card-title">250 LPH RO Plant</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-03.jpg" width="540" height="720" alt="Double Blue Tanks" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="6" data-name="Double Blue Tanks" data-price="12499" data-image="product-03.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹12499</span></div>
      <h3><a href="#" class="card-title">Double Blue Tanks</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-01.jpg" width="540" height="720" alt="Big RO Plant - 3 vessels" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="7" data-name="Big RO Plant - 3 vessels" data-price="8999" data-image="product-01.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹8999</span></div>
      <h3><a href="#" class="card-title">Big RO Plant - 3 vessels</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-05.jpg" width="540" height="720" alt="250 LPH RO Plant" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="8" data-name="250 LPH RO Plant" data-price="70000" data-image="product-05.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹70000</span></div>
      <h3><a href="#" class="card-title">250 LPH RO Plant</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-02.jpg" width="540" height="720" alt="Steel Industrial Plant" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="9" data-name="Steel Industrial Plant" data-price="255999" data-image="product-02.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹255999</span></div>
      <h3><a href="#" class="card-title">Steel Industrial Plant</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

  <div class="shop-card">
    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
      <img src="./assets/images/product-04.jpg" width="540" height="720" alt="Chiller 2 Ton" class="img-cover">
      <div class="card-actions">
        <button class="action-btn add-to-cart" data-id="10" data-name="Chiller 2 Ton" data-price="3999" data-image="product-04.jpg" aria-label="add to cart">
          <ion-icon name="bag-handle-outline"></ion-icon>
        </button>
        <button class="action-btn add-to-wishlist" aria-label="add to wishlist">
          <ion-icon name="star-outline"></ion-icon>
        </button>
      </div>
    </div>
    <div class="card-content">
      <div class="price"><span class="span">₹3999</span></div>
      <h3><a href="#" class="card-title">Chiller 2 Ton</a></h3>
      <div style="color: #006666; font-size: 16px;">★★★★★</div>
    </div>
  </div>

    </div>
  </div>
</section>
</article>
</main>

<!-- 
    - #FOOTER
  -->

  <footer class="footer" data-section>
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <p class="footer-list-text">
              Find a location nearest you. See <a href="#" class="link">Our Stores</a>
            </p>
          </li>

          <li>
            <p class="footer-list-text bold">+91 9321573724</p>
          </li>

          <li>
            <p class="footer-list-text">simplero.com</p>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful links</p>
          </li>

          <li>
            <a href="#" class="footer-link">New Products</a>
          </li>

          <li>
            <a href="#" class="footer-link">Best Sellers</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Infomation</p>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping FAQ</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="newsletter-title">Good emails.</p>

          <p class="newsletter-text">
            Enter your email below to be the first to know about new collections and product launches.
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Enter your email address" required
              class="email-field">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <div class="wrapper">
          <p class="copyright">
            &copy; 2022 codewithtejrug
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>
        </div>

        <a href="#" class="logo">
          <img src="./assets/images/logo.jpg" width="179" height="26" loading="lazy" alt="Glowing">
        </a>

        <img src="./assets/images/pay.png" width="313" height="28" alt="available all payment method" class="w-100">

      </div>

    </div>
  </footer>

<script>
  const currentUser = "<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'guest'; ?>";

window.addEventListener('DOMContentLoaded', function () {
  const sections = document.querySelectorAll('[data-section]');
  sections.forEach(section => section.classList.add('active'));
});

function addToCart(button) {
  const id = button.dataset.id;
  const name = button.dataset.name;
  const price = parseInt(button.dataset.price);
  const image = button.dataset.image;

  let cart = JSON.parse(localStorage.getItem(`${currentUser}_cart`)) || [];
  let existing = cart.find(item => item.id === id);
  if (existing) {
    existing.quantity += 1;
  } else {
    cart.push({ id, name, price, image, quantity: 1 });
  }

  localStorage.setItem(`${currentUser}_cart`, JSON.stringify(cart));
  updateCartBadge();
}


// Attach event listeners
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', () => addToCart(button));
});


function addToWishlist(button) {
  const parentCard = button.closest('.shop-card');
  const id = parentCard.querySelector('.add-to-cart').dataset.id;
  const name = parentCard.querySelector('.add-to-cart').dataset.name;
  const price = parseInt(parentCard.querySelector('.add-to-cart').dataset.price);
  const image = parentCard.querySelector('.add-to-cart').dataset.image;

  let wishlist = JSON.parse(localStorage.getItem(`${currentUser}_wishlist`)) || [];
  let existing = wishlist.find(item => item.id === id);
  if (!existing) {
    wishlist.push({ id, name, price, image });
    localStorage.setItem(`${currentUser}_wishlist`, JSON.stringify(wishlist));
    updateWishlistBadge();
  }
}


function updateWishlistBadge() {
  const wishlist = JSON.parse(localStorage.getItem(`${currentUser}_wishlist`)) || [];
  document.getElementById('wishlist-count').innerText = wishlist.length;
}


  window.addEventListener('DOMContentLoaded', function () {
    updateWishlistBadge();
  });

  document.querySelectorAll('.add-to-wishlist').forEach(button => {
    button.addEventListener('click', () => addToWishlist(button));
  });

  function updateCartBadge() {
  const cart = JSON.parse(localStorage.getItem(`${currentUser}_cart`)) || [];
  const count = cart.reduce((sum, item) => sum + item.quantity, 0);
  const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);

  document.getElementById('cart-count').innerText = count;
  document.getElementById('cart-total').innerText = `₹${total.toLocaleString()}`;
}


window.addEventListener('DOMContentLoaded', function () {
  updateCartBadge();  // ✅ Load correct badge value
  updateWishlistBadge();  // If you use wishlist too
});

</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
