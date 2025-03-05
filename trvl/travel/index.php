<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel</title>
   <!-- Swiper CSS Link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- Font Awesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- Custom CSS File Link -->
   <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
   <!-- Header Section Starts -->
   <section class="header">
      <img src="images/logo.jpg" alt="Travel Logo">
      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="package.php">Package</a>
         <a href="book.php">Book</a>
         <a href="admin_login.php">Login</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- Header Section Ends -->

   <!-- Home Section Starts -->
   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat; background-size: cover;">
               <div class="content">
                  <h2>Explore the World</h2>
                  <p>Discover amazing places with us!</p>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat; background-size: cover;">
               <div class="content">
                  <h2>Adventure Awaits</h2>
                  <p>Pack your bags for the journey of a lifetime.</p>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat; background-size: cover;">
               <div class="content">
                  <h2>Memories That Last</h2>
                  <p>Travel, explore, and create memories with us.</p>
               </div>
            </div>
         </div>
         <!-- Swiper Navigation Buttons -->
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </section>
   <!-- Home Section Ends -->

   <!-- Services Section Starts -->
   <section class="services">
      <h1 class="heading-title">Our Services</h1>
      <div class="box-container">
         <div class="box">
            <img src="images/icon-2.png" alt="Tour Guide">
            <h3>Tour Guide</h3>
         </div>
         <div class="box">
            <img src="images/icon-6.png" alt="Camping">
            <h3>Camping</h3>
         </div>
         <div class="box">
            <img src="images/icon-1.png" alt="Adventure">
            <h3>Adventure</h3>
         </div>
         <div class="box">
            <img src="images/icon-3.png" alt="Trekking">
            <h3>Trekking</h3>
         </div>
         <div class="box">
            <img src="images/icon-5.png" alt="Off Road">
            <h3>Off Road</h3>
         </div>
         <div class="box">
            <img src="images/icon-4.png" alt="Camp Fire">
            <h3>Camp Fire</h3>
         </div>
      </div>
   </section>
   <!-- Services Section Ends -->

   <!-- Footer Section Starts -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>Quick Links</h3>
            <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            <a href="admin_login.php"> <i class="fas fa-angle-right"></i> Login</a>
         </div>
         <div class="box">
            <h3>Extra Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         </div>
         <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +94 456 3584 </a>
            <a href="#"> <i class="fas fa-phone"></i> +94 345 5670 </a>
            <a href="#"> <i class="fas fa-envelope"></i> travel@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Colombo, Sri Lanka </a>
         </div>
         <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         </div>
      </div>
      <div class="credit">Designed by <span>M.F.F Afra</span> | All Rights Reserved!</div>
   </section>
   <!-- Footer Section Ends -->
  
   <!-- Swiper JS -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <script>
      document.addEventListener('DOMContentLoaded', function () {
         const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
               delay: 5000,
               disableOnInteraction: false,
            },
            navigation: {
               nextEl: '.swiper-button-next',
               prevEl: '.swiper-button-prev',
            },
         });
      });
   </script>
</body>
</html>
