<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel </title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
   <style>
      :root{
    --main-color:#247ba0;
    --black:#222;
    --white:#fff;
    --tomato:#86198189;
    --light-black:#777;
    --light-white:#fff9;
    --dark-bg:rgba(0,0,0,.7);
    --light-bg:#eee;
    --border:.1rem solid var(--main-color);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);
 }
 
      /* about page */
      .about {
         display: flex;
         align-items: center;
         flex-wrap: wrap;
         gap: 3rem;
      }

      .about .image img {
         width: 100%;
         border-radius: 10px;
         animation: fadeIn 2s ease-in-out, scaleUp 3s ease-in-out;
      }

      @keyframes fadeIn {
         from {
            opacity: 0;
         }
         to {
            opacity: 1;
         }
      }

      @keyframes scaleUp {
         from {
            transform: scale(0.9);
         }
         to {
            transform: scale(1);
         }
      }

      .about .content {
         flex: 1 1 41rem;
         text-align: center;
      }

      .about .content h3 {
         font-size: 3rem;
         color: var(--black);
      }

      .about .content p {
         font-size: 1.5rem;
         color: var(--light-black);
         line-height: 2;
         padding: 1rem 0;
         text-align: justify;
      }

      .about .content .icons-container {
         margin-top: 2rem;
         display: flex;
         flex-wrap: wrap;
         gap: 1.5rem;
         align-items: flex-end;
      }

      .about .content .icons-container .icons {
         background: var(--light-bg);
         padding: 2rem;
         flex: 1 1 16rem;
         text-align: center;
         border-radius: 10px;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .about .content .icons-container .icons:hover {
         transform: translateY(-10px) scale(1.05);
         box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
      }

      .about .content .icons-container .icons i {
         font-size: 4rem;
         margin-bottom: 1rem;
         color: var(--main-color);
         animation: pulse 1.5s infinite ease-in-out;
      }

      .about .content .icons-container .icons span {
         font-size: 1.5rem;
         color: var(--light-black);
         display: block;
      }

      /* Keyframe animation for pulsing icons */
      @keyframes pulse {
         0%, 100% {
            transform: scale(1);
         }
         50% {
            transform: scale(1.1);
         }
      }

   </style>
</head>
<body>

<!-- header section starts  -->
<section class="header">
  <img src="images/logo.jpg">
   <nav class="navbar">
      <a href="index.php"> Home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="admin_login.php">Login</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img.jpg" alt="About Us Image">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Amazing Tours a Best tour Operator and Travel in Sri Lanka. Choose us for an unforgettable travel experience. Our meticulous planning, luxurious accommodations, and personalized service ensure a journey like no other.</p>
      <p>Fantastic getaway. Very good communication. and  adventure with friends, trust us to exceed your expectations.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>reasonable price</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="admin_login.php"> <i class="fas fa-angle-right"></i> Login</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94 456 3584 </a>
         <a href="#"> <i class="fas fa-phone"></i> +94 345 5670 </a>
         <a href="#"> <i class="fas fa-envelope"></i> travel@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Colombo, Sri Lanka  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>m.f.f afra</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->
</body>
</html>
