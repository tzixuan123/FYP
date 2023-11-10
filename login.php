
<!DOCTYPE html>
<html lang="en" >



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

<!-- Boxicons -Import Icons-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- Logo -->
<link rel="shortcut icon" href="assets/img/leaf.png" type="image/x-icon">

    <link href="assets/css/login.css" rel="stylesheet">
  
    <style>
    video {
      position: fixed;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }
  </style>

</head>
<body>
 <video autoplay muted loop id="video-background">
    <source src="video.mp4" type="video/mp4">
  </video>
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



<div class="container">
        <div class="wrapper">

<?php 
$login = Session::get("cuslogin");
if ($login == true) {
	header("Location:order.php");
}
 ?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $custLogin = $cmr->customerLogin($_POST);
}

// Display the error message //

?> 
<?php 
// The error message is comming from classess/Customer.php
if (isset($custLogin)) {
    echo $custLogin;
}
 ?>


                 
                 <h1>Login</h1>
            <form action="" method="post">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Enter your Email" required>
                    <i class='bx bxs-envelope' ></i>
                </div>

                <div class="input-box">
                    <input type="password" name="pass" placeholder="Enter your Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                    
                </div>


                        <input type="submit" class="btn" id="buttn" name="login"/> </input>
               
                
                <div class="register-link">
                    <p>Don't have account? <a 
                    href="register.php">Sign Up Now</a></p>
                </div>

                <div class="register-link">
                    <p>Login as Admin? <a 
                    href="admin/login.php">Sign In as Admin Now</a></p>
                </div>

                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            </form>
        </div>
      </div>
      
</div>   
                  


<?php




