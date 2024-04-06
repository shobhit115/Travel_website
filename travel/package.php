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

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo"><div class="logo_n"><div><img src="images/logo2.png" height=100vh  width=110vh></div><div><b>E TRAVEL</b></div></div></a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/a.jpg" alt="">
         </div>
         <div class="content">
            <h3>The Western Ghats, Maharashtra</h3>
            <p>The Indian mountain range known as the Western Ghats runs for over a thousand miles along the western coast of India.</p>
            <h2>Rs 10,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Delhi top selling packages!</p>
            <h2>Rs 9,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/b.jpg" alt="">
         </div>
         <div class="content">
            <h3>Kaziranga National Park, Assam</h3>
            <p>Kaziranga National Park is a World Heritage Site located in northeastern India.</p>
            <h2>Rs 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/c.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ranthambore National Park, Rajasthan</h3>
            <p>Ranthambore National Park is a national park located in the Sawai Madhopur district of Rajasthan.</p>
            <h2>Rs 13,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/d.jpg" alt="">
         </div>
         <div class="content">
            <h3>The Andaman and Nicobar Islands</h3>
            <p>The Andaman and Nicobar Islands are a group of islands in the Indian Ocean, known for their tropical rainforests, coral reefs, and pristine beaches.</p>
            <h2>Rs 7,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/e.jpg" alt="">
         </div>
         <div class="content">
            <h3>Valley of Flowers, Uttarakhand</h3>
            <p>Valley of Flowers is a national park located in the Chamoli district of Uttarakhand.</p>
            <h2>Rs 12,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/f.jpg" alt="">
         </div>
         <div class="content">
            <h3>Silent Valley National Park, Kerala</h3>
            <p>Silent Valley National Park is a national park in Kerala's Palakkad district that stands out for its lush tropical forests.</p>
            <h2>Rs 18,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/g.jpg" alt="">
         </div>
         <div class="content">
            <h3>Jim Corbett National Park, Uttrakhand</h3>
            <p>One of India's oldest and most popular national parks, located in Uttarakhand</p>
            <h2>Rs 21,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/h.jpg" alt="">
         </div>
         <div class="content">
            <h3>Spiti Valley, Himachal Pradesh</h3>
            <p>Spiti Valley is located in the northeastern part of the state of Himachal Pradesh.</p>
            <h2>Rs 14,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>nepal Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our nepal top selling packages!</p>
            <h2>Rs 70,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>bangladesh Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our bangladesh top selling packages!</p>
            <h2>Rs 35,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>Rs 51,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
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
         <a href="#"> <i class="fas fa-phone"></i> +0000000000 </a>
         <a href="#"> <i class="fas fa-phone"></i> +11111111111 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shobhit@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> roorkee, Uttarakhand - XXXXXX  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>Infinite Coders</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>