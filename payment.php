<?php include 'inc/payment.php';?>

<?php 
$login = Session::get("cuslogin");
if ($login == false) {
    header("Location:login.php");
}
 ?>
<style>
.payment1 {
    min-height: 200px;
    text-align: center;
    border: 1px solid #ddd;
    margin: 0 auto;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
    margin-top: 50px;
}

.payment1 h2 {
    border-bottom: 1px solid #ddd;
    margin-bottom: 40px;
    padding-bottom: 10px;
    color: #333;
}

.payment1 a {
    background: #007bff;
    border: 2px solid #0056b3;
    border-radius: 5px;
    color: #fff;
    font-size: 25px;
    padding: 10px 30px;
    text-decoration: none;
    margin: 10px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.payment1 a:hover {
    background-color: #0056b3;
}

.back a {
    width: 160px;
    margin: 10px auto 0;
    padding: 10px 0;
    text-align: center;
    display: block;
    background: #555;
    border: 1px solid #333;
    color: #fff;
    border-radius: 5px;
    font-size: 25px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.back a:hover {
    background-color: #333;
}
</style>


 <div class="main">
    <div class="content">
    	<div class="section group">
    	<div class="payment1">
    		<h2>Choose Payment Option</h2>
    		<a href="paymentoffline.php">Cash on Delivery</a>
    		<!-- <a href="paymentonline.php">Online Payment</a> -->
    	</div>
    	<div class="back">
    		
    		<a href="cart.php">Previous</a>
    	</div>
 		</div>
 	</div>
	</div>
	<?php include 'Footer.php';?>