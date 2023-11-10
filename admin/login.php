<?php include '../classess/Adminlogin.php';?>
<?php
$al = new Adminlogin();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$adminUser = $_POST['adminUser'];
	$adminPassword = md5($_POST['adminPassword']);

	$loginchk = $al->adminlogin($adminUser,$adminPassword);
}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>

    <!-- Boxicons -Import Icons-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- Logo -->
<link rel="shortcut icon" href="assets/img/leaf.png" type="image/x-icon">

<!--Css -->
<link href="css/login.css" rel="stylesheet">

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


    <div class="container">
        <div class="wrapper">
	<?php
        if (isset($loginchk)) {
	echo $loginchk;
        }

	    ?>
        
        <h1>Admin Login</h1>
        <form action="login.php" method="post">
            <div class="input-box">
                <input type="text" name="adminUser" placeholder="Enter your Username" required>
                <i class='bx bx-user'></i>
            </div>

            <div class="input-box">
                <input type="password" name="adminPassword" placeholder="Enter your Password" required>
                <i class='bx bxs-lock-alt' ></i>
    
            </div>


                <input type="submit" value="Log in" class="btn"/> </input>



            <div class="register-link">
                <p>Login as User? <a 
                    href="http://localhost/shop/login.php">Sign In as User Now</a></p>
            </div>

            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        </form>
    </div>
</div>

</body>
</html>