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
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/a5.jpg) no-repeat">
            <div class="content">
               <!-- <span>search, express, tour</span> -->
               <h3>eco-friendly travel</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/a3.jpg) no-repeat">
            <div class="content">
               <!-- <span>search, express, tour</span> -->
               <h3>Explore your destination on by bike</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>tour arround the universe</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<section class="home-about">
   <div class="image">
      <img src="images/a6.jpg" alt="">
   </div>
   <div class="content">
      <h3>Eco-Friendly Travel</h3>
      <p><b>Every step you take brings you closer to a beautiful destination</b>, but many times it also leaves behind carbon footprints. For many, to travel is to get closer to the serendipity of the environment. But what can be liberating to one’s soul can often be of great damage to our Mother Nature. Being in the lap of the marvellous beauty of nature comes along with certain duties and responsibilities. Right from booking your travel tickets to carrying back an extra bag of souvenirs, there are so many travel habits that do not sit right with the necessity for eco-friendly travel. </p>
      <a href="https://blog.akbartravels.com/eco-friendly-travel-ways-to-make-travel-more-sustainable/" class="btn">read more</a>
   </div>
</section>
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
   <div class="box">
         <div class="image">
            <a href="https://en.wikipedia.org/wiki/Western_Ghats"><img src="images/a.jpg" alt=""></a>
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
            <img src="images/b.jpg" alt="">
         </div>
         <div class="content">
            <h3>Kaziranga National Park, Assam</h3>
            <p>Kaziranga National Park is a World Heritage Site located in northeastern India.</p>
            <h2>Rs 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->

<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>cycling</h3>
      </div>
   
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->

<section class="home-about">
   <div class="image">
      <img src="images/a4.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>we are dedicated to changing the way people travel by offering sustainable and eco-friendly travel experiences. Our mission is to promote responsible tourism that minimizes negative impacts on the environment and supports local communities.

We believe that travel should not only be about exploring new destinations but also about preserving the planet for future generations. That's why we carefully curate our travel packages to include eco-friendly accommodations, transportation options, and activities that allow our clients to immerse themselves in the local culture while minimizing their carbon footprint.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>

<section class="home-offer home-packages">
   <div class="offerimage">
   <img src="images/g.jpg">
   </div>
   <div class="content">
      <div class="content">
         <h3>upto 40% off</h3>
         <p>One of India's oldest and most popular national parks, located in Uttarakhand, covers its sprawling terrain with majestic animals and vegetation. The park is home to India's Indian elephant and white tigers. The park also boasts a variety of birds and bird species. Jeep safaris, camping, and much more are also available.</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>


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