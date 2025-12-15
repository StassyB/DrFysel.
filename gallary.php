<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dr Feysel Dermatology Specialized Clinic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/4.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">
  

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      
      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/4.png" alt="Logo" style="max-width: 100%; max-height: 100px;">
        <!-- <h1 class="sitename">HeroBiz</h1> -->
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="index.html">Home<br></a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="services.php"> Our Services</a></li>
          <li><a href="gallary.php" class="active" >Gallery</a></li>
          <li><a href="doc.php">Doctors</a></li>
          <li><a href="contact.php" >Contact</a></li>
          <!-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#contact">Contact</a></li> -->
        <!-- </ul> -->
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav> 

      <a class="btn-getstarted" href="#appointment">Book Appointment</a>

    </div>
  </header>

  <main class="main">

    <style>
      .custom-image {
          width: 300px;
          height: 200px;
      }
          
    .carousel-item img {
      max-height: 500px; 
      object-fit: cover;
      width: 100%;}

      .justified-text {
       text-align: justify;
}

#appointment {
  padding: 60px 0;
  background: #f7f9fa;
}
h2 {
  font-family: Arial, sans-serif; /* Choose your preferred font */
  font-size: 20px; /* Adjust the size as needed */
  color: #333; /* Set the color */
  font-weight: bold; /* Ensure the font is bold */
  text-align: center; /* Center the text, if desired */
  margin-top: 20px; /* Add some margin at the top */
  margin-bottom: 20px; /* Add some margin at the bottom */
}
h1 {
font-size: 32px; /* Adjust the size as needed */
font-weight: bold; /* Ensure the font is bold */
}

h3 {
font-size: 20px; /* Adjust the size as needed */
font-weight: bold; /* Ensure the font is bold */
color: #222121;
}
p {
font-size: 17px; /* Adjust the size as needed */
color: #1a1919;
font-weight: normal; /* Ensure the font is normal */
}
.php-email-form {
  background: #fff;
  padding: 30px;
  box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
}
.btn-getstarted {
  border-radius: 50px;
  padding: 10px 30px;
  color: #fff;
  transition: 0.3s;
  background: #0ea2bd;
  border: none;
}
.btn-getstarted:hover {
  background: #098aa1;
}
  .about-img img {
    display: block; /* Ensure the image behaves as a block element */
    width: 100%; /* Make the image fill its container */
    height: auto; /* Maintain aspect ratio */
    position: absolute; /* Allows absolute positioning within the container */
    top: 0;
    left: 0;
    cursor: grab; /* Change cursor to indicate draggability */
  }
  .tick-list {
    list-style-type: none; /* Remove default bullets */
    padding: 0; /* Remove padding */
    text-align: left; /* Align list items to the right */
}
    
    .tick-list li {
        position: relative; /* Create a positioning context */
        padding-left: 25px; /* Space for the tick */
    }
    
    .tick-list li::before {
        content: "\2713"; /* Unicode character for tick */
        position: absolute; /* Position it absolutely */
        left: 0; /* Align to the left */
        color: rgb(0, 124, 128); /* Tick color */
        font-size: 1.2em; /* Tick size */
    }
  
  
  </style>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
       <!-- Portfolio Section -->
       <section id="portfolio" class="portfolio section">
      
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2> Our Gallery</h2><hr>
      </div><!-- End Section Title -->
      
      <div class="container-fluid">
      
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Backspots</li>  
            <li data-filter=".filter-product">Allergies</li>
            <li data-filter=".filter-branding">Acne</li>
            <li data-filter=".filter-books">Fungal Infection</li>
          </ul><!-- End Portfolio Filters -->
      
          <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">
      
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/2.jpg" class="img-fluid custom-image" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/2.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
      
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/5.jpg" class="img-fluid custom-image" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
      
         
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/2.jfif" class="img-fluid custom-image" alt="">
          <div class="portfolio-info">
            <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      
      
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/3.jpg" class="img-fluid custom-image" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
      
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/56.jpg" class="img-fluid custom-image" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
      
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/0.jfif" class="img-fluid custom-image" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/8.jfif" class="img-fluid custom-image" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/9.jfif" class="img-fluid custom-image" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
      
          </div><!-- End Portfolio Container -->
      
        </div>
      
      </div>
      
      </section><!-- /Portfolio Section -->
      
   

   
  </main>

  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Dr feysel dermatology clinic</span>
            </a>
            <div class="footer-contact pt-3">
              <p>XPQ4+5V6, Addis Ababa</p>
              <p>011 832 3201</p>
              <p class="mt-3"><strong>Phone:</strong> <span>0118 322653</span></p>
              <p class="mt-3"><strong>Phone:</strong> <span>093 571 4919</span></p>
              <p><strong>Email:</strong> <span>doctorfeyseldermaclinic@gmail.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Book an Appointment</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">General Dermatology</a></li>
              <li><a href="#">Dermatologic Surgery</a></li>
              <li><a href="#">Cosmetic Dermatology</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Cosmetic Dermatology</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div> -->

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>