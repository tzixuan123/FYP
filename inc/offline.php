


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
<link href="css/newstyle.css?version=1" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
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

<!--==================== HEADER ====================-->
<header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
            <img src="assets/img/animation.gif" alt="logo" />
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
<div class="nav_buttons">

<?php 
$login = Session::get("cuslogin");
if ($login == false) {  ?>
    	<a href="login.php">Login</a>
<?php }else{ ?>
<a href="?cid=<?php Session::get('cmrId') ?>">Logout</a>
<?php }
?>

		   	

		   </div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
</div>


       


</nav>
</header>
      

      <!-- END -->

    <!--For Container setup -->
  <div class="wrap">
  <br>
  <br>
  <br>

		<div class="header_top">			

		<div class="menu">

		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>





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
<script type="text/javascript" src="js/toggle.js"></script>

