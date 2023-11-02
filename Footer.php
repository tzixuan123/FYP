<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Chinese Medicine</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <!--=============== FAVICON ===============-->
      <!-- Logo -->
      <link rel="shortcut icon" href="images/leaf.png" type="image/x-icon">

      <!-- Boxicons -Import Icons-->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
      
      <!--=============== CSS ===============-->
       <link rel="stylesheet" href="assets/css/styles.css">
      
      <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

 <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="footer.css">

  
      <title>Chinese Medicine</title>
<!-- 
    - #FOOTER
  -->
<body>
  <footer class="footer">
    <div class="containered grid-list">

      <div class="footer-brand">

        <a href="#" class="logo">
          <img src="./assets/images/logo-light.svg" width="74" height="24" alt="CMs">
        </a>
        <br>

        <p class="footer-text">
          &copy; 2023 CMs. <br> All rights reserved.
        </p>

        

      </div>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title" ><i class='bx bx-message-dots' ></i> Get in Touch</p>
        </li>

        <li>
          <address class="footer-text"><i class='bx bx-home' ></i>
             Moonshine St. 14/05 Light City, London, United Kingdom
          </address>
        </li>

        <li>
          
           <p><i class='bx bx-envelope'> </i><a href="mailto:CMs@email.com" class="footer-link"> CMs@email.com </a></p>
        </li>

        <li>
          <p><i class='bx bx-phone' > </i> <a href="tel:001234567890" class="footer-link"> 00 (123) 456 78 90</a></p>
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
          <a href="indexEdu.php" class="footer-link">Consultation</a>
        </li>

        <li>
          <a href="topbrands.php" class="footer-link">Top brands</a>
        </li>
        <li>
          <a href="allproduct.php" class="footer-link">Products</a>
        </li>

        <li>
          <a href="blog.php" class="footer-link">Blogs</a>
        </li>
       

      </ul>

      <div class="footer-list">

        <p class="h4 footer-list-title"> <i class='bx bx-news' ></i> Our Newsletter</p>

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
</body>

  <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>