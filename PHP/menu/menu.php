<?php
include '../config-db.php';

// Fetch food items from the database
$query = "SELECT * FROM food_menu";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
      <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../assets/css/main.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    
    <!-- Custom CSS -->
    <style>
       body{
        background-color:white;
       }
       .text{
        color:black
       }
        .container_card {
            margin-top: 100px;
        }
        .menu-card {
            background-color:rgba(47, 37, 37, 0.1);
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(41, 32, 32, 0.1);
            padding: 15px;
            text-align: center;
            transition: 0.3s;
        }
        .menu-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .menu-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .menu-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-top: 10px;
        }
        .menu-price {
            color: #28a745;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .order-btn {
            margin-top: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .order-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="starter-page-page">
 <header id="header" class="header fixed-top">
  <div class="branding d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        
        <!-- <img src="assets/img/D-log.jpg" alt="Dinaspherlogo"> -->
        <h1 class="sitename">DineSphere</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#menu">Our Menu</a></li>
          <li><a href="#specials">Today's Specials</a></li>
          <li><a href="#events">Upcoming Events</a></li>
          <li><a href="#chefs">Our Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li class="dropdown">
            <a href="#"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Customer Reviews</a></li>
              <li class="dropdown">
                <a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Online Ordering</a></li>
                  <li><a href="#">Table Reservation</a></li>
                  <li><a href="#">Catering Services</a></li>
                  <li><a href="#">Private Events</a></li>
                  <li><a href="#">Gift Cards</a></li>
                </ul>
              </li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Book a Table</a>
    </div>
  </div>
</header>


<main>
        <div class="container_card container">
            <h2 class="text-center mb-4">Our Food Menu</h2>
            <div class="row">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="menu-card">
                            <form method="POST" action="add_to_cart.php">
                                <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Food Image">
                                <div class="menu-title text"><?php echo htmlspecialchars($row['name']); ?></div>
                                <div class="menu-price text">$<?php echo number_format($row['price'], 2); ?></div>
                                <p class="text"><?php echo htmlspecialchars($row['description']); ?></p>
                                
                                <!-- Hidden input fields to pass food details -->
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
                                <input type="hidden" name="price" value="<?php echo $row['price']; ?>">

                                <button type="submit" class="order-btn">Order Now</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

 <footer id="footer" class="footer">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">DineSphere</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Arbaminch University, Main Campus</p>
          <p>Arbaminch, Ethiopia</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+251 926 964 474</span></p>
          <p><strong>Email:</strong> <span>dinesphereinfo@gmail.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Other Services</h4>
        <ul>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Product Management</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Our Newsletter</h4>
        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
        <form action="forms/newsletter.php" method="post" class="php-email-form">
          <div class="newsletter-form">
            <input type="email" name="email" placeholder="Your Email">
            <input type="submit" value="Subscribe">
          </div>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your subscription request has been sent. Thank you!</div>
        </form>
      </div>

    </div>
  </div>

</footer>
<!-- Bootstrap JS -->



  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php $conn->close(); ?>





