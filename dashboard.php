<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DineSphere</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/D-log.jpg" rel="icon">
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/js/php-book-table-form.js"

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
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
          <li><a href="#specials">Specials</a></li>
          <li><a href="#events">Upcoming Events</a></li>
          <li><a href="#chefs">Our Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
         <li><a href="#testimonials">Customer Reviews</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-book-a-table d-none d-xl-block" href="PHP/login/logout.php">Log out</a>
    </div>
  </div>
</header>



  <main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>DineSphere</span></h2>
        <p data-aos="fade-up" data-aos-delay="200">Bringing you delightful dining experiences every day!</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="PHP/menu/menu.php" class="cta-btn">Explore Our Menu</a>
          <a href="#book-a-table" class="cta-btn">Reserve a Table</a>
        </div>
      </div>       
    </div>
  </div>

</section><!-- /Hero Section -->


 <section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/about.jpg" class="img-fluid about-img" alt="DineSphere - About Us">
      </div>
      <div class="col-lg-6 order-2 order-lg-1 content">
        <h3>Welcome to DineSphere</h3>
        <p class="fst-italic">
          At DineSphere, we bring exceptional dining experiences right to your doorstep. Whether you're ordering in, dining out, or reserving a table, we're here to make every meal special.
        </p>
        <ul>
          <li><i class="bi bi-check2-all"></i> <span>Easy and seamless online food ordering from local cafes.</span></li>
          <li><i class="bi bi-check2-all"></i> <span>Reserve your favorite table at top dining spots with just a click.</span></li>
          <li><i class="bi bi-check2-all"></i> <span>Comprehensive menu management for cafes and restaurants to keep customers updated with the best offerings.</span></li>
        </ul>
        <p>
          DineSphere is more than just a food ordering system. It's a platform designed to connect food lovers with the finest dining experiences. We aim to make dining out easier and more enjoyable, whether it's a casual meal or a special celebration.
        </p>
      </div>
    </div>

  </div>

</section><!-- /About Section -->


<!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>WHY DINESPHERE</h2>
    <p>Why Choose DineSphere for Your Dining Experience</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <span>01</span>
          <h4><a href="" class="stretched-link">Seamless Food Ordering</a></h4>
          <p>Browse through a wide variety of dishes and place your order with just a few clicks. It's quick, easy, and hassle-free.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item">
          <span>02</span>
          <h4><a href="" class="stretched-link">Table Reservations Made Easy</a></h4>
          <p>Reserve a table at your favorite cafe or restaurant with real-time availability, ensuring you never miss out on a perfect dining experience.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card-item">
          <span>03</span>
          <h4><a href="" class="stretched-link">Customer-Centric Features</a></h4>
          <p>From personalized recommendations to interactive feedback systems, DineSphere prioritizes your preferences to offer a customized experience.</p>
        </div>
      </div><!-- Card Item -->

    </div>

  </div>

</section><!-- /Why Us Section -->


   <!-- Menu Section -->
<section id="menu" class="menu section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Menu</h2>
    <p>Check Our Tasty Menu</p>
  </div><!-- End Section Title -->

  <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul class="menu-filters isotope-filters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-starters">Starters</li>
          <li data-filter=".filter-salads">Salads</li>
          <li data-filter=".filter-specialty">Specialty</li>
        </ul>
      </div>
    </div><!-- Menu Filters -->

    <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="assets/img/Food_items/ethiopian-food-kitfo-gored.jpg.webp" class="menu-img" alt="Kitfo">
        <div class="menu-content">
          <a href="#">Kitfo-Gored-Gored</a><span>250 Birr</span>
        </div>
        <div class="menu-ingredients">
          If kitfo piqued your interest, then you may want to try gored gored as well. It’s a similar dish to kitfo except it’s made with cubes of raw beef – usually tenderloin or round steak – seasoned with niter kibbeh, mitmita, berbere, and awaze (chili mustard sauce). Like kitfo, it’s usually served with injera..
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="assets/img/Food_items/qitha frfr.jpg" class="menu-img" alt="Doro Wat">
        <div class="menu-content">
          <a href="#">Qitha-Frfr</a><span>80 Birr</span>
        </div>
        <div class="menu-ingredients">
          Kixa fir-fir is a fit-fit variety prepared with a combination of torn pieces of kitcha flatbread, clarified butter, and berbere spices. The dish is traditionally served for breakfast, when it’s accompanied by plain yogurt. Unlike most Ethiopian dishes, kitcha fit-fit is typically consumed with a spoon instead of using the right hand.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="assets/img/Food_items/ethiopian-food-timatim-salata.jpg.webp" class="menu-img" alt="Sambusa">
        <div class="menu-content">
          <a href="#">Timatim-Salata</a><span>100 Birr</span>
        </div>
        <div class="menu-ingredients">
         Timatim Salata refers to a type of fresh Ethiopian tomato salad that’s also popular in Eritrea. It’s made with diced tomatoes, minced onions, and finely chopped peppers dressed with a mixture of berbere spices, olive oil, vinegar, and lemon juice.`,
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="assets/img/Food_items/Fethira.jpg" class="menu-img" alt="Atay">
        <div class="menu-content">
          <a href="#">Fethira</a><span>80 Birr</span>
        </div>
        <div class="menu-ingredients">
          Fatira is a traditional Ethiopian street food item that is commonly consumed for breakfast, consisting of a large, crispy, wheat flour pancake. It is traditionally served with scrambled eggs, honey, or both. Fatira is often cut into smaller pieces, and it is especially popular during Eid-al-Fitr in Ethiopia..
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="assets/img/Food_items/190205144959-shekla-tibs.jpg" class="menu-img" alt="Tibs">
        <div class="menu-content">
          <a href="#">Shekla-Tibs</a><span>250 Birr</span>
        </div>
        <div class="menu-ingredients">
          Sliced beef or lamb, pan-fried in butter, garlic and onion, tibs is one of the most popular dishes among Ethiopians. It comes in a variety of forms, varying in type, size or shape of the cuts of meat used, and can range from hot to mild or contain little to no vegetables. A particularly recommended variation is shekla tibs, in which the strips of meat arrive at your table roasting atop a clay pot stoked with hot coals – dramatic and delicious
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="assets/img/Food_items/Genfo.jpg" class="menu-img" alt="Fasolia">
        <div class="menu-content">
          <a href="#">Genfo</a><span>150 Birr</span>
        </div>
        <div class="menu-ingredients">
          Genfo is a simple Ethiopian porridge that is commonly consumed for breakfast, made by adding dry-roasted barley flour to boiling water and stirring the concoction with a wooden utensil until it develops a smooth, yet extremely thick consistency.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="assets/img/Food_items/Qinche.jpg" class="menu-img" alt="Enset">
        <div class="menu-content">
          <a href="#">Qinche</a><span>50 Birr</span>
        </div>
        <div class="menu-ingredients">
          Simple, nutritious, and inexpensive, kinche is an Ethiopian breakfast staple made with cracked wheat that is boiled in either water or milk. The best way to describe kinche would be as the Ethiopian equivalent of oatmeal. After it has been cooked, kinche is added to the pan with either clarified spiced butter known as niter qibe or with oil and fried onions, although kinche can also be consumed without any flavorings.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="assets/img/Food_items/ethiopian-food-kik-alicha.jpg.webp" class="menu-img" alt="Shiro">
        <div class="menu-content">
          <a href="#">kik-Alicha</a><span>100 Birr</span>
        </div>
        <div class="menu-ingredients">
          If you don’t have a high tolerance for spicy food, then you’re going to be thankful for kik alicha. It refers to an Ethiopian lentil stew made from split peas, niter kibbeh, and turmeric. Unlike many of the dishes in this Ethiopian food guide, it isn’t made with any berbere so it isn’t nearly as spicy as dishes like doro wat and siga wat.Kik alicha is a mildly flavored stew made with yellow split peas simmered with garlic, onions, ginger, turmeric, and niter kibbeh. It’s a popular type of vegetarian stew that’s often served as part of a combination platter. Like any wat, it’s best enjoyed with injera.
        </div>
      </div><!-- Menu Item -->

    </div><!-- Menu Container -->

  </div>

</section><!-- /Menu Section -->


<!-- Specials Section -->
<section id="specials" class="specials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>DineSphere Specials</h2>
    <p>Check Our DineSphere Specials</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">Kitfo Special</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">Doro Wat Delight</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">Special Piza</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">Shekla Tibs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">Shiro Stew</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="specials-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Kitfo Special</h3>
                <p class="fst-italic">Traditional minced beef cooked in spiced butter and served with injera or bread.</p>
                <p>Our signature Kitfo is tender minced beef mixed with spiced butter and chili, complemented with warm injera or bread for the perfect combination of flavors.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/Food_items/ethiopian-food-kitfo.jpg.webp" alt="Kitfo Special" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="specials-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Doro Wat Delight</h3>
                <p class="fst-italic">A rich chicken stew with hard-boiled eggs and a spicy blend of berbere.</p>
                <p>Our Doro Wat Delight features tender chicken simmered in a flavorful stew with a unique blend of spices, including the iconic berbere, and is served with a hard-boiled egg and injera.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/Food_items/Doro-Wat-square-2.jpg" alt="Doro Wat Delight" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="specials-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Special Piza</h3>
                <p class="fst-italic">Crispy pastry filled with a spiced mix of lentils or minced meat.</p>
                <p>Our Sambusa Crunch brings you crispy, golden pastries filled with a savory blend of lentils, minced meat, and Ethiopian spices, offering a perfect crunch with every bite.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/Food_items/Special piza.webp" alt="Sambusa Crunch" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="specials-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Tibs Feast</h3>
                <p class="fst-italic">Stir-fried beef, lamb, or chicken with fresh vegetables and traditional spices.</p>
                <p>The Tibs Feast brings you a flavorful stir-fry with tender meat of your choice, sautéed with vibrant vegetables and spiced to perfection, served with injera or your favorite side.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/Food_items/190205144959-shekla-tibs.jpg" alt="Tibs Feast" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="specials-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Shiro Stew</h3>
                <p class="fst-italic">A hearty stew made from ground chickpeas, simmered with spices.</p>
                <p>Our Shiro Stew is a comforting dish made from ground chickpeas, infused with berbere and served with injera, offering a rich and flavorful vegetarian experience.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/Food_items/Alicha-Shiro-Wot-Ethiopian-Mild-Pea-Stew-Recipe-500x375.jpg" alt="Shiro Stew" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Specials Section -->


   <!-- Events Section -->
<section id="events" class="events section">

  <!-- Background Image -->
  <img class="slider-bg" src="assets/img/events-bg.jpg" alt="Events Background" data-aos="fade-in">

  <div class="container">

    <!-- Swiper Slider -->
    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      
      <div class="swiper-wrapper">

        <!-- Slider Item 1: Birthday Party -->
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="assets/img/events-slider/events-slider-1.jpg" class="img-fluid" alt="Birthday Parties">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Party</h3>
              <div class="price">
                <p><span>10,000 Birr</span></p>
              </div>
              <p class="fst-italic">
                Celebrate your special day at DineSphere with an unforgettable birthday party. We offer tailored packages to suit your needs and ensure a fun and memorable experience.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Custom birthday packages available.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Delicious food and drink options.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Perfect for all age groups.</span></li>
              </ul>
              <p>
                Our birthday packages include personalized menus, entertainment options, and exclusive table reservations to create a joyful and exciting atmosphere for you and your guests.
              </p>
            </div>
          </div>
        </div><!-- End Slider Item 1 -->

        <!-- Slider Item 2: Private Party -->
        <div class="swiper-slide" id="Private-Party">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="assets/img/events-slider/events-slider-2.jpg" class="img-fluid" alt="Private Parties">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Party</h3>
              <div class="price">
                <p><span>15,000 Birr</span></p>
              </div>
              <p class="fst-italic">
                Host an intimate private party with family and friends at DineSphere. Enjoy an exclusive space, personalized service, and a curated menu to suit your event's vibe.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Exclusive venue booking.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Tailored food and drink selections.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Dedicated event coordinator.</span></li>
              </ul>
              <p>
                Whether it's a small gathering or a large celebration, our private party packages ensure that your guests are treated to the best of DineSphere’s services and hospitality.
              </p>
            </div>
          </div>
        </div><!-- End Slider Item 2 -->

        <!-- Slider Item 3: Custom Party -->
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="assets/img/events-slider/events-slider-3.jpg" class="img-fluid" alt="Custom Parties">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Party</h3>
              <div class="price">
                <p><span>20,000 Birr</span></p>
              </div>
              <p class="fst-italic">
                At DineSphere, we understand that every event is unique. Our custom party packages are designed to bring your vision to life, with flexible menu options, decor, and more.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Fully customizable event planning.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Choose from a variety of themes and styles.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Personalized catering services.</span></li>
              </ul>
              <p>
                Whether it’s a themed event or a special occasion, we’ll work with you to ensure everything is tailored to perfection. From food and drink to decor, everything is designed to suit your needs.
              </p>
            </div>
          </div>
        </div><!-- End Slider Item 3 -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Events Section -->


<!-- Book A Table Section -->
<section id="book-a-table" class="book-a-table section">
    <div class="container section-title" data-aos="fade-up">
        <h2>RESERVATION</h2>
        <p>Book a Table at DineSphere</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <form action="PHP/table/book-a-table.php" method="post" role="form" class="php-email-form" id="reservationForm">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address" required>
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required>
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="date" name="date" class="form-control" id="date" placeholder="Reservation Date" required>
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Reservation Time" required>
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="number" class="form-control" name="people" id="people" placeholder="Number of People" required>
                </div>
                <div class="col-lg-4 col-md-6">
                    <select class="form-control" name="table_number" id="table_number" required>
                        <!-- Available tables will be loaded here by JavaScript -->
                    </select>  
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Special Requests or Message (Optional)"></textarea>
            </div>
            <div class="text-center mt-3">
                <div class="loading">Processing...</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request has been sent successfully. We will confirm your reservation via phone or email. Thank you for choosing DineSphere!</div>
                <button type="submit">Book a Table</button>
            </div>
        </form>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    fetch("PHP/table/fetch_available_tables.php")  // Ensure correct path
        .then(response => response.json())
        .then(data => {
            let tableDropdown = document.getElementById("table_number");
            tableDropdown.innerHTML = ""; // Clear previous options

            if (data.length === 0) {
                tableDropdown.innerHTML = '<option value="">No tables available</option>';
            } else {
                data.forEach(table => {
                    let option = document.createElement("option");
                    option.value = table;
                    option.textContent = "Table " + table;
                    tableDropdown.appendChild(option);
                });
            }
        })
        .catch(error => console.error("Error fetching tables:", error));
});
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".php-email-form").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission
        
        let formData = new FormData(this);
        let loadingBox = document.querySelector(".loading");
        let messageBox = document.querySelector(".sent-message");
        let errorBox = document.querySelector(".error-message");

        // Show loading message
        loadingBox.style.display = "block";
        messageBox.style.display = "none";
        errorBox.style.display = "none";

        fetch(this.action, {
            method: "POST",
            body: formData
        })
        .then(response => response.json()) // Convert response to JSON
        .then(data => {
            loadingBox.style.display = "none"; // 

            if (data.status === "success") {
                errorBox.style.display = "none"; // Hide error
                errorBox.innerHTML = "";
                errorBox.classList.remove("error-message");

                messageBox.textContent = data.message;
                messageBox.style.display = "block";
                messageBox.style.backgroundColor = "green";
            } else {
                messageBox.style.display = "none";
                errorBox.textContent = data.message;
                errorBox.style.display = "block";
                errorBox.style.backgroundColor = "red";
            }
        })
        .catch(error => {
            loadingBox.style.display = "none"; // ✅ Hide "Processing..." on error
            errorBox.textContent = "An error occurred. Please try again.";
            errorBox.style.display = "block";
            errorBox.style.backgroundColor = "red";
        });
    });
});

document.getElementById("reservationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent page refresh

    // Collect form data
    let formData = new FormData(this);

    // Send data via Fetch API (AJAX)
    fetch("reservation_process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) 
    .then(data => {
        if (data.status === "success") {
            document.getElementById("responseMessage").innerText = data.message;
            document.getElementById("responseMessage").style.display = "block";

            // Clear input fields
            document.getElementById("reservationForm").reset();
        } else {
            alert("Error: " + data.message);
        }
    })
    .catch(error => console.error("Error:", error));
});



</script>




 <section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Customer Testimonials</h2>
    <p>What our happy customers are saying about DineSphere</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 20
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <!-- Testimonial 1 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"The food was amazing, and the service was even better! DineSphere made our family gathering unforgettable. Highly recommend!"</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/Leonardo_Phoenix_09_A_modern_Ethiopian_man_in_his_midtwenties_2.jpg" class="testimonial-img" alt="Customer 1">
            <h3>Sofonyas</h3>
            <h4>Happy Customer</h4>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 2 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"A fantastic dining experience! The ambiance and food quality were top-notch. Definitely will return soon!"</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
             <img src="assets/img/testimonials/Leonardo_Phoenix_09_A_modern_Ethiopian_man_in_his_midtwenties_3.jpg" class="testimonial-img" alt="Customer 2">
            <h3>Abrham</h3>
            <h4>Designer</h4>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 3 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"I had a wonderful time at DineSphere. The menu selection is fantastic, and the staff were incredibly accommodating!"</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/Leonardo_Phoenix_09_A_modern_Ethiopian_man_in_his_midtwenties_2.jpg" class="testimonial-img" alt="Customer 3">
            <h3>Kalid</h3>
            <h4>Store Owner</h4>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 4 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"The best dining experience I've ever had. Everything from the food to the service was exceptional."</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/Leonardo_Phoenix_09_A_modern_Ethiopian_man_in_his_midtwenties_1.jpg" class="testimonial-img" alt="Customer 4">
            <h3>Solomon</h3>
            <h4>Freelancer</h4>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 5 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"An unforgettable experience at DineSphere. The food was out of this world, and the atmosphere was perfect for our event."</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
             <img src="assets/img/testimonials/Leonardo_Phoenix_09_A_modern_Ethiopian_man_in_his_midtwenties_0.jpg" class="testimonial-img" alt="Customer 5">
            <h3>Feyisa</h3>
            <h4>Entrepreneur</h4>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->


 <section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Gallery</h2>
    <p>Explore the exquisite ambiance and delectable dishes from DineSphere</p>
  </div><!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0">

      <!-- Gallery Item 1 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/D-log.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/D-log.jpg" alt="Dining Experience" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <!-- Gallery Item 2 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/Description/Leonardo_Phoenix_09_Create_a_vibrant_Favicon_logo_for_Dinespha_0.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/Description/Leonardo_Phoenix_09_Create_a_vibrant_Favicon_logo_for_Dinespha_0.jpg" alt="Tasty Delicacies" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <!-- Gallery Item 3 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/Description/Leonardo_Phoenix_09_Create_a_vibrant_Favicon_logo_for_Dinespha_2.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/Description/Leonardo_Phoenix_09_Create_a_vibrant_Favicon_logo_for_Dinespha_2.jpg" alt="Restaurant Ambiance" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <!-- Gallery Item 4 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/Description/Leonardo_Phoenix_09_Create_a_vibrant_Favicon_logo_for_Dinespha_3.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/Description/Leonardo_Phoenix_09_Create_a_vibrant_Favicon_logo_for_Dinespha_3.jpg" alt="Fresh Ingredients" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->
      <!-- Gallery Item 5 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_1.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_1.jpg" alt="Elegant Table Setting" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <!-- Gallery Item 6 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_2 (1).jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_2 (1).jpg" alt="Happy Guests" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <!-- Gallery Item 7 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_3.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_3.jpg" alt="DineSphere Dishes" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <!-- Gallery Item 8 -->
      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_0.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/Description/Leonardo_Phoenix_09_please_give_a_logo_image_for_DineSphare_so_0.jpg" alt="Delicious Food Plating" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

    </div>

  </div>

</section><!-- /Gallery Section -->


 <section id="chefs" class="chefs section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Team</h2>
    <p>Meet the talented team behind DineSphere’s exceptional culinary experience</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- Chef 1 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
         <img src="assets/img/chefs/Leonardo_Phoenix_09_A_regal_Ethiopian_chef_standing_proudly_in_0.jpg" class="img-fluid" alt="Walter White">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Walter White</h4>
              <span>Master Chef</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <!-- Chef 2 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="assets/img/chefs/Leonardo_Phoenix_09_A_regal_Ethiopian_chef_standing_proudly_in_2.jpg" class="img-fluid" alt="Sarah Johnson">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Sarah Johnson</h4>
              <span>Pastry Chef</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <!-- Chef 3 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="assets/img/chefs/Leonardo_Phoenix_09_A_regal_Ethiopian_chef_standing_proudly_in_3.jpg" class="img-fluid" alt="William Anderson">
          <div class="member-info">
            <div class="member-info-content">
              <h4>William Anderson</h4>
              <span>Cook</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Chefs Section -->


 <section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Contact Us</p>
  </div><!-- End Section Title -->

  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d484824.6586540322!2d37.579324116452225!3d6.579688184067211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8af40f8b3b8f%3A0x6724382bb94432d9!2sArbaminch%20University!5e0!3m2!1sen!2set!4v1674551950594!5m2!1sen!2set" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div><!-- End Google Maps -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Location</h3>
            <p>Arbaminch University, Main Campus, Ethiopia</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Open Hours</h3>
            <p>Monday-Saturday:<br>6:00 AM - 12:00 PM</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+251 926 964 474</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>dinesphereinfo@gmail.com</p>
          </div>
        </div><!-- End Info Item -->

      </div>

        <div class="col-lg-8">
          <form id="feedbackForm" action="PHP/feedback/submit_feedback.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
         <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-12 text-center">
                <div id="responseMessage"></div>
                <button type="submit">Send Message</button>
            </div>
          </div>
         </form>
        </div>
  <script>
     document.getElementById("feedbackForm").addEventListener("submit", function(event) {
     event.preventDefault(); // Prevent the default form submission

    // Show "Processing..." message
     document.querySelector(".loading").style.display = "block";

    // Hide any previous response message
    document.getElementById("responseMessage").innerHTML = '';

    // Create a new FormData object to capture the form data
    var formData = new FormData(this);

    // Send the form data using Fetch API
    fetch("PHP/feedback/submit_feedback.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text()) // Get the response as text
    .then(data => {
        // Hide "Processing..." message
        document.querySelector(".loading").style.display = "none";
        
        // Show the response message
        document.getElementById("responseMessage").innerHTML = data;
    })
    .catch(error => {
        // Handle errors, hide "Processing..." and show error message
        document.querySelector(".loading").style.display = "none";
        document.getElementById("responseMessage").innerHTML = "<div class='alert alert-danger'>Error submitting feedback. Please try again.</div>";
      });
    });
  </script>

    </div>

  </div>

</section><!-- /Contact Section -->


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
      </div>

    </div>
  </div>

</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>