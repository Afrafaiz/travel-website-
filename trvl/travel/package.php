<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
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

 /*pakege style*/

.packages .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(37rem, 1fr));
   gap: 2rem;
}

.packages .box-container .box{
   border:var(--border);
   box-shadow: var(--box-shadow);
   background: var(--white);
   display: none;
}


/* Add this to your existing CSS */

.packages .box .content .btn {
    display: inline-block;
    background-color: var(--main-color);
    color: var(--white);
    padding: 1rem 2rem;
    border-radius: 5px;
    text-transform: uppercase;
    font-size: 1.4rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease-in-out; /* Added transition for smooth animation */
}

.packages .box .content .btn:hover {
    transform: scale(1.1); /* Scale up the button */
    background-color: var(--tomato); /* Change background color on hover */
    color: var(--white); /* Make the text color white */
}

.packages .box-container .box:nth-child(1),
.packages .box-container .box:nth-child(2),
.packages .box-container .box:nth-child(3),
.packages .box-container .box:nth-child(4),
.packages .box-container .box:nth-child(5),
.packages .box-container .box:nth-child(6){
   display: inline-block;
}

.packages .box-container .box:hover .image img{
   transform: scale(1.1);
}

.packages .box-container .box .image{
   height: 25rem;
   overflow: hidden;
}

.packages .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}

.packages .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}

.packages .box-container .box .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}



.packages .load-more{
         text-align: center;
         margin-top: 2rem;
         cursor: pointer;
         transition: background-color 0.3s ease-in-out;
      }

      .packages .load-more .btn {
         background-color: var(--main-color);
         color: var(--white);
         padding: 1rem 2rem;
         border-radius: 5px;
         text-transform: uppercase;
         font-size: 1.4rem;
         transition: background-color 0.3s ease-in-out;
      }

      .packages .load-more .btn:hover {
         background-color: var(--tomato);
      }

      /* Add animation effect for the "See More" button */
      .packages .load-more .btn {
         animation: fadeIn 0.5s ease-in-out forwards;
      }

      @keyframes fadeIn {
         0% { opacity: 0; transform: translateY(10px); }
         100% { opacity: 1; transform: translateY(0); }
      }



    </style>
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
         <a href="admin_login.php.">Login</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- Header Section Ends -->

   <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   
</div>


<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-21.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai Tour Packages</h3>
            <p>Explore the vibrant charm of Dubai with unforgettable experiences! Discover our top-selling packages for a journey of luxury and excitement!"</p>
          <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>India Tour Packages</h3>
            <p>"Experience the wonders of India with unforgettable adventures! Discover our top-selling packages for an incredible journey filled with culture and charm!"</p>
             <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-14.jpg" alt="">
         </div>
         <div class="content">
            <h3>paris Tour Packages</h3>
            <p>"Experience the magic of Paris! Discover our top-selling packages for an unforgettable journey filled with iconic landmarks and rich history!"
            </p>

            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Australia Tour Packages</h3>
            <p>"Experience the beauty of Australia! Discover our top-selling packages for an unforgettable journey filled with natural wonders!"</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-18.jpg" alt="">
         </div>
         <div class="content">
            <h3>china Tour Packages</h3>
            <p>"Explore the rich heritage of China with unforgettable experiences! Discover our top-selling packages for a journey of history and wonder!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-17.jpg" alt="">
         </div>
         <div class="content">
            <h3>Singapore Tour Packages</h3>
            <p>"Experience the wonders of Singapore! Discover our top-selling packages for an unforgettable journey filled with modern marvels and vibrant culture!"
            </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-16.jpg" alt="">
         </div>
         <div class="content">
            <h3>London Tour Packages</h3>
            <p>"Explore  the charm of London! Discover our top-selling packages for an unforgettable journey filled with iconic landmarks and rich history!" </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-15.jpg" alt="">
         </div>
         <div class="content">
            <h3>canada Tour Packages</h3>
            <p>"Experience the beauty of Canada! Discover our top-selling packages for an unforgettable journey filled with stunning landscapes and vibrant cities!"</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>bali Tour Packages</h3>
            <p>"Indulge in the beauty of Bali with unforgettable adventures! Explore our top-selling packages for a tropical escape like no other!"</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-19.jpg" alt="">
         </div>
         <div class="content">
            <h3>Switzerland Tour Packages</h3>
            <p>"Experience the allure of Switzerland! Discover our top-selling packages for an unforgettable journey filled with breathtaking landscapes and charming villages!"
            </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Thailand  Tour Packages</h3>
            <p>"Experience the wonders of Thailand! Discover our top-selling packages for an unforgettable journey filled with vibrant culture and breathtaking beaches!"

</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-20.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>"Experience the magic of Japan! Discover our top-selling packages for an unforgettable journey filled with rich culture and stunning landscapes!"
            </p>
         <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>
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
</body>
<script>
   $(document).ready(function () {
      let visibleBoxes = 6; // Initially visible boxes
      const totalBoxes = $(".packages .box").length; // Total boxes available

      $(".load-more .btn").click(function () {
         visibleBoxes += 6; // Load 6 more boxes each time
         $(".packages .box:lt(" + visibleBoxes + ")").slideDown(); // Show additional boxes
         
         // Hide "See More" button if all boxes are visible
         if (visibleBoxes >= totalBoxes) {
            $(".load-more").hide();
         }
      });
   });
</script>

<html>
