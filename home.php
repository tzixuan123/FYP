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
      
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css?version=1">

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


      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home">
            <div class="home__container container">
               <div class="home__content">
                  <div class="home__data">
                     <h3 class="home__subtitle">
                        A LIFETIME EXPERIENCE
                     </h3>

                     <h1 class="home__title">
                        Chinese Medicine Formulas <br>
                        To Improve
                     </h1>

                     <p class="home__description">
                        Your Health and Wellness
                     </p>

                     <a href="indexEdu.php" class="home__button">
                        Explore More
                     </a>
                  </div>

                  <img src="assets/img/bird-1.svg" alt="image" class="home__bird-1">
                  <img src="assets/img/bird-2.svg" alt="image" class="home__bird-2">

               </div>

               <div class="home__images">
                  <img src="assets/img/img-4.svg" alt="image" class="home__img-4">
                  <img src="assets/img/img-3.svg" alt="image" class="home__img-3">
                  <img src="assets/img/img-2.svg" alt="image" class="home__img-2">
               </div>
               
               <!-- Herbs Icon {Responsive View error }-->
            <!-- <div class="home__images_1">  
                  <img src="assets/img/Simple Herbal Pharmacy Medicine Logo.svg" alt="image" class="home__img-1">
               </div>
            -->
               </div>
            </div>
         </section>
      </main>

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
</html>