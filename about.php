<?php

include 'lib/Session.php';
Session::init();

include 'lib/Database.php';
include 'helpers/Formate.php';
spl_autoload_register(function($class){
include_once "classess/".$class.".php";

});

$db = new Database();
$fm = new Format();
$pd = new Product();
$cat = new Category();
$ct = new Cart();
$cmr = new Customer();
?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Chinese Medicine</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--2nd Navigation Bar -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>


<!--Text inside 2nd Navigation bar-->
<link href="css/tougle.css" rel="stylesheet" type="text/css" media="all"/>


<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>



 <!--=============== FAVICON ===============-->
      <!-- Logo -->
      <link rel="shortcut icon" href="assets/img/leaf.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
      
      <!-- Boxicons -Import Icons-->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css?version=1">
      <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

 <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="about.css">

  
      <title>Chinese Medicine</title>

<style>

.sticky {
  position: fixed;
  top: 0;
  width: 78%;
  z-index: 10000;

}


.sticky + .content {
  padding-top: 102px;
  

}
</style>



</head>
<body>

<!-- Testing -->



<!--==================== HEADER ====================-->
<header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
            <img src="assets/img/animation.gif" alt="logo" />

        <!-- <img src="assets/img/leaf.png" alt="logo"> -->

            </a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav_item">
                     <a href="home.php" class="nav__link">Home</a>
                  </li>

                  <li class="nav_item">
                     <a href="index.php" class="nav__link">Product</a>
                  </li>

                  <li class="nav_item">
                     <a href="topbrands.php" class="nav__link">Brand</a>
                  </li>

                  <li class="nav_item">
                     <a href="about.php" class="nav__link">About</a>
                  </li>


                  <?php 
                  $cmrId = Session::get("cmrId");
                  $chkOrder = $ct->checkOrder($cmrId);
                     if ($chkOrder) { ?>
                     <a href="orderdetails.php">Order</a>
                  <?php } ?>


                 
               </ul>

               <div class="nav__buttons">


               <?php 
                     $chkCart = $ct->checkCartTable();
                     if ($chkCart) { ?>
                     <a href="cart.php" class="nav__button-ghost">Cart</a>
               <?php } ?>



               <?php 
                if (isset($_GET['cid'])) {
	                $cmrId = Session::get("cmrId");
	                $delData = $ct->delCustomerCart();
	                $delComp = $pd->delCompareData($cmrId);
	            Session::destroy();
                }


                ?>

		            <div class="login">

                    <?php 
                    $login = Session::get("cuslogin");
                    if ($login == false) {  ?>
    	                <a href="login.php">Login</a>
                    <?php }else{ ?>
                        <a href="?cid=<?php Session::get('cmrId') ?>">Logout</a>
                <?php }
                ?>

			    </div>

               <!-- Login and Logout
               
                 --> 
               
               </div>

               <!-- Close Button-->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <!--- Toggle Button -->
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line"></i>
            </div>
         </nav>
      </header>
     
      

      <!-- END -->



  
 

<body>


  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">About Us</h1>

            <p class="hero-text">
              We’re a creative company that focuses on establishing long-term relationships with customers.
            </p>

            <div class="btn-wrapper">

              <a href="index.php" class="btn btn-primary">Explore Now</a>

              <a href="blog.php" class="btn btn-outline">Blogs</a>

              <a href="contact.php" class="btn btn-outline">Contact Us</a>


            </div>

          </div>

          <div class="hero-slider" data-slider>

            <div class="slider-inner">
              <ul class="slider-container" data-slider-container>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="./assets/images/hero-slide-1.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>


              </ul>
            </div>

           

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-labelledby="service-label">
        <div class="container">

          <p class="section-subtitle" id="service-label">What We Do?</p>

          <h2 class="h2 section-title">
            The service we offer is specifically designed to meet your needs.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">24/7 Support</h3>

                <p class="card-text">
                Experience unparalleled convenience with our round-the-clock 24/7 hour services. 


                </p>

               

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Secure Payments </h3>

                <p class="card-text">
                It's a convenient and trustworthy way to ensure that your hard-earned money stays safe until you have the products you want in hand.
                </p>

                

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="cloud-download-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Shipping and Delivery</h3>

                <p class="card-text">
                Experience swift and reliable shipping and delivery services that cater to your convenience. We take pride in ensuring your orders reach your doorstep promptly and securely.
                </p>

                

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Quality Assurance</h3>

                <p class="card-text">
                At the heart of our commitment to excellence is our rigorous quality assurance process. We leave no room for compromise when it comes to the products and services we provide. 
                </p>

                

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="800" height="580" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle" id="about-label">Why Choose Us?</p>

            <h2 class="h2 section-title">
              We bring solutions to make life easier for our clients.
            </h2>

            <ul>

              <li class="about-item">
                <div class="accordion-card expanded" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <spna class="span h5">Holistic Health Solutions:</spna>
                    </button>
                  </h3>

                  <p class="accordion-content">
                  We offer a diverse range of Chinese medicine products that embrace holistic well-being, addressing health concerns through traditional wisdom.
                  </p>

                </div>
              </li>

             

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

          <figure class="feature-banner">
            <img src="./assets/images/feature-banner.png" width="800" height="531" loading="lazy" alt="feature banner"
              class="w-100">
          </figure>

          <div class="feature-content">

            <p class="section-subtitle" id="feautre-label">Our Solutions</p>

            <h2 class="h2 section-title">
            Discover our solutions and embrace the holistic approach to health that Chinese medicine offers.
            </h2>

            <p class="section-text">
            We offer a diverse range of Chinese medicine products that embrace holistic well-being, addressing health concerns through traditional wisdom.
            </p>

            <ul class="feature-list">

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                  Quality Assured.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                  Secure and Convenient.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                  Expert Guidance.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                  Trusted Tradition
                  </span>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #STATS
      -->

      <section class="stats" aria-label="our stats">
        <div class="container">

          <ul class="stats-card has-bg-image" style="background-image: url('./assets_about/images/stats-bg.jpg')">

            <li>
              <p class="card-text">
                <span class="h1">7518</span>

                <spna class="span">Completed Ordered</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">3472</span>

                <spna class="span">Happy Customers</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">2184</span>

                <spna class="span">Expert Employees</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">30</span>

                <spna class="span">Health Products</spna>
              </p>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PROJECT
      -->

      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          <p class="section-subtitle" id="project-label">Case Studies</p>

          <h2 class="h2 section-title">
            Check out some of our awesome educational lesson.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/blog-1.jpg" width="560" height="350" loading="lazy"
                    alt="Ligula tristique quis risus" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">A Beginner’s Guide to Traditional Chinese Medicine</a>
                  </h3>

                  <p class="card-text">
                  Traditional Chinese Medicine (TCM) is a holistic approach to treating a person’s mental and physical health problems. It developed thousands of years ago, and its core practices have changed little since then.i. The goal of TCM is to restore harmony within an individual and balance the forces of yin and yang, which are components of qi.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-04-14">14 Apr 2023</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Basic knowledge</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/blog-2.jpg" width="560" height="350" loading="lazy"
                    alt="Nullam id dolor elit id nibh" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Traditional Chinese Medicine Benefits, Herbs & Therapies</a>
                  </h3>

                  <p class="card-text">
                  Traditional Chinese Medicine (TCM) is an ancient form of healthcare that dates back over 2,500 years and includes natural treatments such as acupuncture, herbal remedies, dietary advice, stress/emotional support, exercise including tai chi and qi gong and treatments such as cupping and moxibustion.
                  <br>TCM along with Ayurveda two of the oldest and most renowned forms of ancient medicine in the world and are returning quickly in popularity. TCM practitioners look to treat the root cause of disease and take a holistic approach to helping people experience complete healing without the use of conventional drugs.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-03-29">29 Mar 2023</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Basic Knowledges</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/blog-3.jpg" width="560" height="350" loading="lazy"
                    alt="Ultricies fusce porta elit" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Ultricies fusce porta elit</a>
                  </h3>

                  <p class="card-text">
                    Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras
                    imperdiet nun eu dolor.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-02-26">26 Feb 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Meeting</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

     

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container grid-list">

      <div class="footer-brand">

        <a href="#" class="logo">
          <img src="./assets/images/logo-light.svg" width="74" height="24" alt="Adex home">
        </a>

        <p class="footer-text">
          &copy; 2022 CMs. <br> All rights reserved.
        </p>

        

      </div>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title"> <i class='bx bx-message-dots' > </i> Get in Touch</p>
        </li>

        <li>
          <address class="footer-text">
            Moonshine St. 14/05 Light City, London, United Kingdom
          </address>
        </li>

        <li>
        <a href="mailto:CMs@email.com" class="footer-link"><i class='bx bx-envelope'> </i> CMs@email.com </a>

        </li>

        <li>
        <a href="tel:001234567890" class="footer-link"> <i class='bx bx-phone' > </i>  00 (123) 456 78 90</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title"><i class='bx bxl-redux' ></i> Learn More</p>
        </li>

        <li>
          <a href="about.php" class="footer-link">About Us</a>
        </li>

        <li>
          <a href="blog.php" class="footer-link">Blogs</a>
        </li>

        <li>
          <a href="topbrands.php" class="footer-link">Top brands</a>
        </li>

        <li>
          <a href="allproduct.php" class="footer-link">Products</a>
        </li>

        <li>
          <a href="indexEdu.php" class="footer-link">Consultation</a>
        </li>

      </ul>

      <div class="footer-list">

        <p class="h4 footer-list-title"> <i class='bx bx-news' ></i>  Our Newsletter</p>

        <p class="footer-text">
          Subscribe to our newsletter to get our news & deals delivered to you.
        </p>

        <form action="" class="input-wrapper">
          <input type="email" name="email_address" placeholder="Email Address" required class="input-field">

          <button type="submit" class="submit-btn">Join</button>
        </form>

      </div>

    </div>
  </footer>


  <script>
         window.onscroll = function() {myFunction()};

         var header= document.getElementById("myHeader");
         var sticky = header.offsetTop;

         function myFunction() {
             if (window.pageYOffset > sticky) {
             header.classList.add("sticky");
         } else {
            header.classList.remove("sticky");
  }
}
</script>
      
      <!--=============== GSAP ===============-->
      <script src="assets/js/gsap.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>

      <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
   </body>


  <!-- 
    - custom js link
  -->
  <script src="assets/js/script.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>