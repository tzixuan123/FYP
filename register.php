
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

    <link href="assets/css/register.css" rel="stylesheet">
  
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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $customerReg = $cmr->customerRegistration($_POST);
}

?>          
    		<?php 

    		if (isset($customerReg)) {
    			echo $customerReg;
    		}
    		 ?>


    		






<h1>Registration</h1>
            <form action="" method="post">
            <div class="input-box">
                    <input type="text" name="name" placeholder="Enter your Name" maxlength="10" Required>
                    <i class='bx bx-user'></i>
                </div>
                
                <div class="input-box">
                    <input type="email" name="email" placeholder="Enter your Email" Required>
                    <i class='bx bxs-envelope' ></i>
                </div>

                <div class="input-box">
                    <input type="text" name="phone" placeholder="Enter your Phone" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" Required>
                    <i class='bx bx-phone'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="country" placeholder="Enter your Postal Code" pattern="[[0-9]{5}" title="Please enter 5 digits of postal code" Required>
                    <i class='bx bx-world'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="pass" placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" Required>
                    <i class='bx bxs-lock-alt' ></i>
                    
                </div>

                <div class="form-group col-sm-12">
                    <label>Delivery Address</label>
                    <textarea class="form-control"  name="address" rows="3" placeholder="Enter valid delivery address"  Required ></textarea>
                </div>


                        <input type="submit" class="btn" id="buttn" name="register"/> </input>
               
                

                <div class="register-link">
                    <p>Already have an Account? <a 
                    href="login.php">Sign In</a></p>
                </div>

                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            </form>
        </div>
      </div>
      
</div>   
                  


<?php




