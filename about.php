<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Shopping for specialty groceries. Here you’ll find a selection of small to medium brands taking the opportunity to present their products on a national stage. We put brands on the map and give customers and independent grocers opportunities to explore, sample or purchase products that have limited distribution. Our selection is innovative, growing, affordable, and ready for you to browse.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>An enhanced, interactive listing of neighborhood grocers, growers, bakers, makers, butchers, fish mongers, wine stores and farmer’s markets. Get a clear online perspective of what’s available locally with profiles, specialties, and weekly/daily specials, as well as free weekly emails of top specials. What’s new, fresh, just made, ready to eat, finally ready (wine), harvested yesterday and so on. For the first time, local grocers and residents have an open communication channel at one reputable source. And we’ll all save tons of trees.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-10.jpeg" alt="">
         <p>Excellent Delivery Services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Adarsh Panda</h3>
      </div>

      <div class="box">
         <img src="images/pic-7.jpeg" alt="">
         <p>Excellent Delivery Services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shivansi Das</h3>
      </div>

      <div class="box">
         <img src="images/pic-8.jpeg" alt="">
         <p>Excellent Delivery Services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>B.Sai Likhit</h3>
      </div>

      <div class="box">
         <img src="images/pic-9.jpeg" alt="">
         <p>Excellent Delivery Services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Peenka Panda</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Excellent Delivery Services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amresh Pattnaik</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Excellent Delivery Services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>A.Rajhamsa</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>