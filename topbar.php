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
      <link rel="shortcut icon" href="images/leaf.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
      
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

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

                  <div class="login">





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


        <!--=============== GSAP ===============-->
        <script src="assets/js/gsap.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>
     
      

      <!-- END -->