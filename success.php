<?php include 'inc/success_log.php';?>

<?php 
$login = Session::get("cuslogin");
if ($login == false) {
    header("Location:login.php");
}
 ?>
<style>
    .psuccess {
        width: 500px;
        min-height: 200px;
        text-align: center;
        border: 1px solid #ddd;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
        margin-top: 50px;
    }

    .psuccess h2 {
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
        padding-bottom: 10px;
        color: #333;
    }

    .psuccess p {
        line-height: 25px;
        text-align: left;
        font-size: 18px;
        color: #555;
        margin-bottom: 15px;
    }

    .psuccess a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .psuccess a:hover {
        text-decoration: underline;
    }
</style>



 <div class="main">
    <div class="content">
    	<div class="section group">
    	<div class="psuccess">
    		<h2>Success</h2>
            <?php 
            $cmrId = Session::get("cmrId");
            $amount = $ct->payableAmount($cmrId);
            if ($amount) {
                $sum = 0;
               while ($result = $amount->fetch_assoc()) {
                  $price = $result['price'];
                  $sum = $sum+$price;
               }
            }
             ?>
        
            <p>Thanks for Purchase.</p>
            <p>Receive your order Successfully. </p>
            <p>We will contact you soon with delivery details.</p>
            <p>Here is your order details....<a href="orderdetails.php"><b>Visit Here...</b></a></p>
            
    	</div>
    	
 		</div>
 	</div>
	</div>
    <?php include 'Footer.php';?>