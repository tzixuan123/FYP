<?php include 'inc/contact.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = $fm->validation($_POST['name']);
	$email = $fm->validation($_POST['email']);
	$contact = $fm->validation($_POST['contact']);
	$message = $fm->validation($_POST['message']);
	

	$name = mysqli_real_escape_string($db->link, $name);
	$email = mysqli_real_escape_string($db->link, $email);
	$contact = mysqli_real_escape_string($db->link, $contact);
	$message = mysqli_real_escape_string($db->link, $message);

	$error = "";

	if (empty($name)) {
		$error = "Name must not be empty !";
	} elseif (empty($email)) {
		$error = "Email must not be empty !";
	} elseif (empty($contact)) {
		$error = "Contact field must not be empty !";

	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid Email Address !";
	} elseif (empty($message)) {
		$error = "Subject field not be empty !";

	} else {
 $query = "INSERT INTO tbl_contact(name,email,contact,message) VALUES('$name','$email','$contact','$message')";

    $inserted_rows = $db->insert($query);

    if ($inserted_rows) {
     //$msg = "Message Sent Successfully.";//
	 $msg= "<script>
			alert('Messages has been sent.');
			</script>";

    }else {
    $error = "<script>
				alert('Messages has not been sent.');
				</script>";
    }
	}

	}

	?>





 <div class="main">
    <div class="content">
    	<div class="support">
  			<div class="support_desc">
  				<h3>Live Support</h3>
  				<p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Live Technical Support</span></p>
  				<p> Discover the power of ancient wisdom and holistic wellness with our Ecommerce Chinese Medicine store. Explore a diverse selection of traditional Chinese herbal remedies, supplements, and wellness products that have been trusted for centuries to promote balance, vitality, and overall health. From herbal teas and acupuncture tools to herbal remedies and wellness consultations, we offer a comprehensive range of products and services to support your well-being. Unlock the secrets of Chinese medicine and embark on a journey towards natural healing and harmony. Shop with us today to experience the age-old wisdom of Chinese medicine in the modern world.</p>
  			</div>
  				<img src="images/tech.gif" alt="logo" width="100px" height="100px" />
  			<div class="clear"></div>
  		</div>
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>

				  <?php 
				if (isset($error)) {
					echo "<span style = 'color:red'>$error</span>";
				}

				if (isset($msg)) {
					echo "<span style = 'color:green'>$msg</span>";
				}


				?>
					    <form action="" method="post">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input type="text" name="name" value="" maxlength="15" Required></span>
						    </div>
						    <div>
						    	<span><label>E-Mail</label></span>
						    	<span><input type="text" name="email" value="" Required></span>
						    </div>
						    <div>
						     	<span><label>Mobile.No</label></span>
						    	<span><input type="text" name="contact" value="" pattern="\d{10}" title="Please enter exactly 10 digits" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" Required></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="message" Required> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="SUBMIT"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
      			<div class="company_address">
				     	<h2>Want to Chat with us? :</h2>
						<p><i class='bx bxl-whatsapp'></i><a href="https://wa.link/yrea0y"> Click Here to Whatapps Us</a></p>
				   </div>
				 </div>
			  </div>    	
    </div>
 </div>
 <?php include 'Footer.php';?>