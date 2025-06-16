<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows === 1) {
    $stmt->bind_result($id, $name, $hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
      $_SESSION["user_id"] = $id;
      $_SESSION["user_name"] = $name;
      header("Location: dashboard.php");
      exit;
    } else {
      $error = "Invalid password!";
    }
  } else {
    $error = "No user found with this email!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Simple RO</title>
  <link rel="stylesheet" href="glowing-master/assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">


  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <style>
    :root {
      --ff-urbanist: 'Urbanist', sans-serif;
      --gray-bg: #f3f3f3;
      --green-hover: #024da2;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: var(--ff-urbanist);
      background-color: var(--gray-bg);
      color: #000;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: var(--white);
    padding-block: 18px;
    z-index: 4;
  }

  .navbar .navbar-list {
    display: flex;
    justify-content: center;
    gap: 45px;
  }

  .navbar .navbar-link {
    font-family: var(--ff-urbanist);
    color: var(--black);
    font-size: 15px;
    font-weight: var(--fw-600);
  }

  .navbar .navbar-link::after {
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: var(--black);
    transition: var(--transition-1);
    transform: scaleX(0);
    transform-origin: left;
  }

  .navbar .navbar-link:is(:hover, :focus)::after {
    transform: scaleX(1);
  }

  .header-top.active .navbar {
    position: fixed;
    top: -80px;
    bottom: auto;
    padding-block: 28px;
    box-shadow: var(--shadow-1);
    transform: translateY(100%);
    transition: var(--transition-2);
  }

  .header-top.header-hide .navbar {
    box-shadow: none;
    transform: translateY(0);
  }

  .login-container {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
}

.login-wrapper {
  width: 100%;
  max-width: 500px;
  padding: 0 1rem;
}

.login-wrapper h2 {
  text-align: center;
  font-size: 3.8rem; /* was 3rem */
  font-weight: 700;
  margin-bottom: 3rem;
}

.login-wrapper form input {
  width: 100%;
  padding: 24px 27px; /* was 16px 18px */
  margin-bottom: 2.25rem;
  border: 1px solid #ccc;
  border-radius: 10px;
  font-size: 1.5rem; /* was 1.3rem */
}

.login-wrapper form input::placeholder {
  font-size: 1.95rem; /* was 1.3rem */
  color: #999;
}

.login-wrapper button {
  width: 100%;
  padding: 24px; /* was 16px */
  background-color: #000;
  color: #fff;
  font-size: 1.6rem; /* was 1.3rem */
  font-weight: 600;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.login-wrapper button:hover {
  background-color: var(--green-hover);
}

.login-wrapper p {
  text-align: center;
  font-size: 1.5rem; /* was 1.2rem */
  margin-top: 2.25rem;
}

.login-wrapper a {
  color: #000;
  text-decoration: underline;
  font-weight: 500;
  font-size: 1.5rem; /* was 1.2rem */
}

.error {
  color: red;
  text-align: center;
  margin-bottom: 1rem;
  font-size: 1.4rem; /* optional: scale up error font too */
}

  </style>
</head>
<body>

  <!-- 
    - #HEADER
  -->

  <header class="header">

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

        <a href="glowing-master/index.html" class="logo">
          <img src="./glowing-master/assets/images/logo.jpg" width="179" height="40" alt="Glowing">
        </a>

        <div class="header-actions">

          <a href="../signup.php" class="header-action-btn" aria-label="user">
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </a>

          <button class="header-action-btn" aria-label="favourite item">
            <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

            <span class="btn-badge">0</span>
          </button>

          <button class="header-action-btn" aria-label="cart item">
            <data class="btn-text" value="0">₹0.00</data>

            <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

            <span class="btn-badge">0</span>
          </button>

        </div>

        <nav class="navbar">
          <ul class="navbar-list">

            <li>
              <a href="glowing-master/index.php" class="navbar-link has-after">Home</a>
            </li>

            <li>
              <a href="#collection" class="navbar-link has-after">Collection</a>
            </li>

            <li>
              <a href="#shop" class="navbar-link has-after">Shop</a>
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
    <a href="glowing-master/index.html" class="logo">

    <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
  </a>


        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">

        <li>
          <a href="glowing-master/index.html" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li>
          <a href="#collection" class="navbar-link" data-nav-link>Collection</a>
        </li>

        <li>
          <a href="#shop" class="navbar-link" data-nav-link>Shop</a>
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


  </header>

  <!-- ✅ Login Form -->
  <main class="login-container">
    <div class="login-wrapper">
      <h2>Log In</h2>
      <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
      <form method="post">
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Log In</button>
      </form>
      <p style = "font-size: 18px";>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
  </main>

</body>
</html>
