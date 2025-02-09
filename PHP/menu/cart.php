
<?php
session_start();
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
          <li><a href="../../dashboard.php #hero" class="active">Home</a></li>
          <li><a href=" ../../dashboard.php #specials">Specials</a></li>
          <li><a href="../../dashboard.php  #events">Upcoming Events</a></li>
          <li><a href="../../dashboard.php #chefs">Our Chefs</a></li>
          <li><a href="../../dashboard.php #gallery">Gallery</a></li>
            <ul>
              <li><a href="../../dashboard.php #testimonials">Customer Reviews</a></li>
                <ul>  
                </ul>
            </ul>
          </li>
          <li><a href="../../dashboard.php #contact">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-book-a-table d-none d-xl-block" href="../../dashboard.php #book-a-table">Book a Table</a>
    </div>
  </div>
</header>


<main>
       <?php


echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">';

echo '<style>
        .containero {
            background-color: white;
            border-radius: 10px;
            padding: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .btn {
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        h2, h3 {
            color: #007bff;
        }
        .total-price {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .empty-cart {
            color: #868e96;
            font-size: 1.2rem;
        }
    </style>';

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo '<div class="containero mt-5">';
    echo '<h2>Your Cart</h2>';
    echo '<table class="table table-bordered table-striped">';
    echo '<thead><tr><th>Food</th><th>Price</th><th>Quantity</th><th>Total</th><th>Actions</th></tr></thead>';
    echo '<tbody>';

    $totalPrice = 0;
    foreach ($_SESSION['cart'] as $id => $item) {
        $total = $item['price'] * $item['quantity'];
        $totalPrice += $total;

        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['name']) . '</td>';
        echo '<td>' . number_format($item['price'], 2) . ' Birr</td>';
        
        // Quantity input field with update form
        echo '<td>
                <form method="POST" action="update_cart.php">
                    <input type="hidden" name="id" value="' . htmlspecialchars($id) . '">
                    <input type="number" name="quantity" value="' . htmlspecialchars($item['quantity']) . '" min="1" class="form-control text-center" style="width: 80px; display: inline-block;">
                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                </form>
              </td>';

        echo '<td>' . number_format($total, 2) . ' Birr</td>';
        echo '<td><a href="remove_from_cart.php?id=' . htmlspecialchars($id) . '" class="btn btn-danger btn-sm">Remove</a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '<h3 class="total-price">Total Price: ' . number_format($totalPrice, 2) . ' Birr</h3>';
    
    // Proceed to Payment
    echo '<div class="d-flex justify-content-between mt-4">';
    echo '<a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<div class="containero mt-5">';
    echo '<p class="empty-cart">Your cart is empty. Add some items to proceed.</p>';
   
    echo '<p class="empty-cart"> <a href="menu.php" class="btn btn-info">Go back to the menu</a>.</p>';
  
    echo '</div>';
}
?>

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
   <form id="newsletterForm" action="PHP/feedback/newsletter.php" method="post" class="php-email-form">
  <div class="newsletter-form">
    <input type="email" name="email" id="email" placeholder="Your Email" required>
    <input type="submit" value="Subscribe">
  </div>
 
  <div class="sent-message" style="display: none;">Your subscription request has been sent. Thank you!</div>
</form>

<script>
  // Handle form submission using AJAX
  document.getElementById("newsletterForm").addEventListener("submit", function (event) {
  event.preventDefault();

  // Get the email value
  var email = document.getElementById("email").value;

  // Hide any previous messages
  document.querySelector(".loading").style.display = "block";
  document.querySelector(".error-message").style.display = "none";
  document.querySelector(".sent-message").style.display = "none";

  // Make an AJAX request
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "PHP/feedback/newsletter.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Hide the loading indicator
      document.querySelector(".loading").style.display = "none";

      // Check the response from the server
      if (xhr.responseText === "success") {
        // Show success message
        document.querySelector(".sent-message").style.display = "block";
        document.getElementById("newsletterForm").reset(); // Reset the form
      } else {
        // Show error message
        document.querySelector(".error-message").style.display = "block";
        if (xhr.responseText === "invalid_email") {
          document.querySelector(".error-message").innerHTML = "Invalid email address. Please try again.";
        } else {
          document.querySelector(".error-message").innerHTML = "There was an error. Please try again.";
        }
      }
    }
  };

  // Send the email value to the server
  xhr.send("email=" + encodeURIComponent(email));
});

</script>



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







