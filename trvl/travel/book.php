<?php session_start(); ?>
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
 /*book form style*/

    .booking .book-form{
   padding:2rem;
   background: var(--light-bg);
}

.booking .book-form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:2rem;
}

.booking .book-form .flex .inputBox{
   flex:1 1 41rem;
}

.booking .book-form .flex .inputBox input{
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
}

.booking .book-form .flex .inputBox input:focus{
   background: var(--black);
   color:var(--white);
}

.booking .book-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

.booking .book-form .flex .inputBox span{
   font-size: 1.5rem;
   color:var(--light-black);
}

.booking .book-form .btn{
   margin-top: 2rem;
}
.content h2 {
   font-size: 25px;
   font-weight: normal;
   color: #247ba0;
}
.partner{
   text-align: center;
   cursor: pointer;
   padding: 10px 30px;
}
.scroll-top{
        position: fixed;
        bottom: 10px;
        right: 10px;
        z-index: 99;
        background: var(--tomato);
        color: #fff;
        border-radius: 50px;
        padding: 15px;
        font-weight: bold;
        line-height: normal;
        border: none;
        width: 50px;
        height: 50px;
        cursor: pointer;
    }
    /* Submit button style */
.booking .book-form .btn {
    display: inline-block;
    padding: 1rem 2rem;
    font-size: 1.8rem;
    color: var(--white);
    background: var(--main-color);
    border: none;
    border-radius: 5px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: var(--box-shadow);
}

/* Hover effect */
.booking .book-form .btn:hover {
    background: var(--tomato);
    color: var(--white);
    transform: scale(1.1);
    box-shadow: 0 .8rem 1.6rem rgba(0, 0, 0, 0.2);
}

/* Active state */
.booking .book-form .btn:active {
    transform: scale(1);
    box-shadow: 0 .3rem 0.8rem rgba(0, 0, 0, 0.2);
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
         <a href="admin_login.php">Login</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- Header Section Ends -->

   <!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
  </div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

<form action="book_form.php" method="post" class="book-form">

<div class="flex">
   <div class="inputBox">
      <span>name :</span>
      <input type="text" placeholder="enter your name" name="name">
   </div>
   <div class="inputBox">
      <span>email :</span>
      <input type="email" placeholder="enter your email" name="email">
   </div>
   <div class="inputBox">
      <span>phone :</span>
      <input type="number" placeholder="enter your number" name="phone">
   </div>
   <div class="inputBox">
      <span>address :</span>
      <input type="text" placeholder="enter your address" name="address">
   </div>
   <div class="inputBox">
      <span>where to :</span>
      <input type="text" placeholder="place you want to visit" name="location">
   </div>
   <div class="inputBox">
      <span>how many :</span>
      <input type="number" placeholder="number of guests" name="guests">
   </div>
   <div class="inputBox">
      <span>arrivals :</span>
      <input type="date" name="arrivals">
   </div>
   <div class="inputBox">
      <span>leaving :</span>
      <input type="date" name="leaving">
   </div>
</div>

<input type="submit" value="submit" class="btn" name="send">

</form>
</section>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- booking section ends -->

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
  </html>

   