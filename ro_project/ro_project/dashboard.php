<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Simple RO</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="glowing-master/favicon.svg" type="image/svg+xml">

  <!-- custom css -->
  <link rel="stylesheet" href="glowing-master/assets/css/style.css">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="glowing-master/assets/images/logo.png">
  <link rel="preload" as="image" href="glowing-master/assets/images/hero-banner-1.png">
  <link rel="preload" as="image" href="glowing-master/assets/images/hero-banner-2.png">
  <link rel="preload" as="image" href="glowing-master/assets/images/hero-banner-3.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  
<header class="header">
  <div style="text-align: center; font-family: var(--ff-urbanist); font-size: 2rem; color: black; margin: 2rem 0;">
  <?php 
  session_start(); 
  $username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest'; 
  echo "Welcome, " . htmlspecialchars($username) . "!"; 
?>

  </div>


    <div class="alert">
      <div class="container">
        <p class="alert-text">Free Shipping On All Orders ₹5000+</p>
      </div>
    </div>

    <div class="header-top" data-header>
      <div class="container">

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Search product" class="search-field">

          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <a href="#" class="logo">
          <img src="glowing-master/assets/images/logo.jpg" width="179" height="26" alt="Glowing">
        </a>

        <div class="header-actions">

          
<style>
  .dropdown {
    position: relative;
    display: inline-block;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 1001;
    font-family: 'Urbanist', sans-serif;
  }
  .dropdown-content p {
    margin: 0;
    padding: 12px 16px;
    color: black;
    font-size: 14px;
  }
  .dropdown-content a {
    color: red;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 14px;
    font-weight: 600;
  }
  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>

<div class="dropdown">
  <button class="header-action-btn" aria-label="user">
    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
  </button>
  <div class="dropdown-content">
    <p>Hi <?php echo $_SESSION['user_name']; ?>!</p>
    <a href="logout.php">Logout</a>
  </div>
</div>


<button class="header-action-btn" aria-label="favourite item" onclick="window.location.href='glowing-master/wishlist.php'">

            <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

            <span class="btn-badge">0</span>
          </button>

          <button class="header-action-btn" aria-label="cart item" onclick="window.location.href='glowing-master/cart.php'">

          <data class="btn-text" value="0">₹0.00</data>

            <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

            <span class="btn-badge">0</span>
          </button>

        </div>

        <nav class="navbar">
          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link has-after">Home</a>
            </li>

            <li>
              <a href="#collection" class="navbar-link has-after">Collection</a>
            </li>

            <li>
            <a href="glowing-master/products.php" class="navbar-link" data-nav-link>Shop</a>
            </li>

            <li>
              <a href="#offer" class="navbar-link has-after">Offer</a>
            </li>

            <li>
              <a href="#blog" class="navbar-link has-after">Blog</a>
            </li>

          </ul>
        </nav>

      </div>
    </div>

  </header>





  <!-- 
    - #MOBILE NAVBAR
  -->

  <div class="sidebar">
    <div class="mobile-navbar" data-navbar>

      <div class="wrapper">
        <a href="#" class="logo">
          <img src="glowing-master/assets/images/logo.jpg" width="179" height="26" alt="Glowing">
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">

        <li>
          <a href="#home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li>
          <a href="#collection" class="navbar-link" data-nav-link>Collection</a>
        </li>

        <li>
        <a href="glowing-master/products.php" class="navbar-link" data-nav-link>Shop</a>

        </li>

        <li>
          <a href="#offer" class="navbar-link" data-nav-link>Offer</a>
        </li>

        <li>
          <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
        </li>

      </ul>

    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero" data-section>
        <div class="container">

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('glowing-master/assets/images/hero-banner-1.png')">

                <div class="card-content">

                <h1 class="h1 hero-title">
                    Experience the <br>
                    Purity of Every Drop
                  </h1>

                  <p class="hero-text">
                    Our RO systems ensure clean, mineral-rich water—engineered for homes, businesses, and industrial use.                  </p>

                  <p class="price">Starting at ₹5000</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('glowing-master/assets/images/hero-banner-2.png')">

                <div class="card-content">

                <h1 class="h1 hero-title">
                    Experience the <br>
                    Purity of Every Drop
                  </h1>

                  <p class="hero-text">
                    Our RO systems ensure clean, mineral-rich water—engineered for homes, businesses, and industrial use.                  </p>

                  <p class="price">Starting at ₹5000</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('glowing-master/assets/images/hero-banner-3.png')">

                <div class="card-content">

                <h1 class="h1 hero-title">
                    Experience the <br>
                    Purity of Every Drop
                  </h1>

                  <p class="hero-text">
                    Our RO systems ensure clean, mineral-rich water—engineered for homes, businesses, and industrial use.                  </p>

                  <p class="price">Starting at ₹5000</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #COLLECTION
      -->

      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="container">

          <ul class="collection-list">

            <li>
              <div class="collection-card has-before hover:shine">

              <h2 class="h2 card-title">Domestic RO</h2>

<p class="card-text">Starting at ₹1,999</p>

<a href="glowing-master/products.php" class="btn-link">
  <span class="span">Book Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('glowing-master/assets/images/collection-1.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

              <h2 class="h2 card-title">Industrial RO</h2>

<p class="card-text">Starting at ₹10,999</p>

<a href="glowing-master/products.php" class="btn-link">
  <span class="span">Book Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('glowing-master/assets/images/collection-2.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

              <h2 class="h2 card-title">Commercial RO</h2>

                <p class="card-text">Starting at ₹8,499</p>

                <a href="glowing-master/products.php" class="btn-link">
                  <span class="span">Book Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('glowing-master/assets/images/collection-3.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>



<!-- 
        - #SHOP
      -->

      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Our Bestsellers</h2>

            <a href="glowing-master/products.php" class="btn-link">
              <span class="span">Shop All Products</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="glowing-master/assets/images/product-01.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">₹8,999</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Big RO plant - 3 vessels</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="glowing-master/assets/images/product-02.jpg" width="540" height="720" loading="lazy"
                    alt="Bio-shroom Rejuvenating Serum" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>


                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">₹2,55,999</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Steel Industrial plant</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">530 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="glowing-master/assets/images/product-03.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">₹12,499</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Double blue tanks</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">70 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="glowing-master/assets/images/product-04.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>


                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">₹3,999</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Chiller 2 Ton</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">346 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="glowing-master/assets/images/product-05.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">

                    <span class="span">₹70,000</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">250 LPH RO Plant</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="glowing-master/assets/images/product-06.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                <div class="price">
                    <span class="span">₹7,00,000</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">500 to 1000 LPH RO Plant</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">239 reviews</p>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>


      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-label="feature" data-section>
        <div class="container">

          <h2 class="h2-large section-title">Why Shop with Simple RO?</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="feature-card">

                <img src="glowing-master/assets/images/feature-1.jpg" width="204" height="236" loading="lazy" alt="Guaranteed PURE"
                  class="card-icon">

                <h3 class="h3 card-title">Guaranteed Purity</h3>

                <p class="card-text">
                Advanced filtration that delivers safe, clean, and mineral-rich water—ideal for homes, offices, and industries.                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="glowing-master/assets/images/feature-2.jpg" width="204" height="236" loading="lazy"
                  alt="Completely Cruelty-Free" class="card-icon">

                <h3 class="h3 card-title">Built for Safety</h3>

                <p class="card-text">
                Each unit is engineered with multi-layer protection, ensuring reliable performance and peace of mind with every drop.                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="glowing-master/assets/images/feature-3.jpg" width="204" height="236" loading="lazy"
                  alt="Ingredient Sourcing" class="card-icon">

                <h3 class="h3 card-title">Fast Service & Support</h3>

                <p class="card-text">
                On-time installation and responsive servicing across Pune and nearby regions. We're just a call away
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>




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
          <img src="glowing-master/assets/images/logo.jpg" width="179" height="26" loading="lazy" alt="Glowing">
        </a>

        <img src="glowing-master/assets/images/pay.png" width="313" height="28" alt="available all payment method" class="w-100">

      </div>

    </div>
  </footer>




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>



  <script>
    window.addEventListener("DOMContentLoaded", () => {
  const currentUser = "<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'guest'; ?>";
  const cart = JSON.parse(localStorage.getItem(`${currentUser}_cart`)) || [];
  const wishlist = JSON.parse(localStorage.getItem(`${currentUser}_wishlist`)) || [];

  const cartCount = cart.reduce((sum, item) => sum + item.quantity, 0);
  const cartTotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);

  // Update badges
  const badgeEls = document.querySelectorAll('.btn-badge');
  if (badgeEls.length >= 2) {
    badgeEls[0].innerText = wishlist.length;       // wishlist badge
    badgeEls[1].innerText = cartCount;            // cart badge
  }

  // Update cart ₹ value
  const cartValueEls = document.querySelectorAll('.btn-text');
  cartValueEls.forEach(el => el.innerText = `₹${cartTotal.toLocaleString()}`);
});


  const currentUser = "<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'guest'; ?>";
  console.log("Dashboard loaded for:", currentUser);
</script>


  <!-- 
    - custom js link
  -->
  <script src="glowing-master/assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>