<?php include 'inc/cart.php';?>

<!-- The cart won't work if the acc is login and will prompt a quantity message


<?php 
if (isset($_GET['delpro'])) {
	$delId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delpro']);
	$delProduct = $ct->delProductByCart($delId);
}

 ?>

<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartId = $_POST['cartId'];
    $quantity = $_POST['quantity'];

    // Check if the quantity is not more than 10 and not less than 1
    if ($quantity > 10) {
        $updateCart = "<span style='color: red; font-size: 18px;'>Quantity cannot exceed 10.</span>";
    } elseif ($quantity <= 0) {
        $updateCart = "<span style='color: red; font-size: 18px;'>Quantity must be at least 1.</span>";
    } else {
        $updateCart = $ct->updateCartQuantity($cartId, $quantity);

        if ($quantity <= 0) {
            $delProduct = $ct->delProductByCart($cartId);
        }
    }
}

 ?>

 
 <!--The Header was sent before executed -->
 <style>
    .cartoption {
        padding: 20px;
    }

    .cartpage {
        margin-top: 20px;
        padding: 20px;
        background-color: #f7f7f7;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .cartpage h2 {
        font-size: 28px;
        color: #333;
    }

    .cartpage span {
        font-size: 18px;
        color: red;
    }

    .tblone {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .tblone th, .tblone td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .tblone th {
        background-color: black;
    }

    .tblone td img {
        max-width: 100px;
        max-height: 100px;
    }

    .buyfield {
        width: 50px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .buysubmit {
        background-color: #ff0000;
        color: #fff;
        padding: 5px 15px;
        font-size: 18px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .tblone input[type="number"] {
        width: 50px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        text-align: center;
    }

    .tblone input[type="submit"] {
        background-color: #ff0000;
        color: #fff;
        padding: 5px 10px;
        font-size: 16px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .tblone a {
        color: #ff0000;
        text-decoration: none;
    }

    .tblone a:hover {
        text-decoration: underline;
    }

    table:last-child {
        margin-top: 20px;
    }

    table:last-child th, table:last-child td {
        border: none;
    }

    .shopping {
        margin-top: 20px;
    }

    .shopleft img,
    .shopright img {
        width: 150px;
        height: 100px;
    }

    .shopleft img {
        float: left;
    }

    .shopright img {
        float: right;
    }

    .shopleft a,
    .shopright a {
        display: block;
    }

    .clear {
        clear: both;
    }
</style>



 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Cart</h2>
			    	<?php 
			    	if (isset($updateCart)) {
			    		echo $updateCart;
			    	}

			    	if (isset($delProduct)) {
			    		echo $delProduct;
			    	}
			    	 ?>

						<table class="tblone">


							<tr>
								<th width="5%">SL</th>
								<th width="30%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="15%">Quantity</th>
								<th width="15%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							<tr>

							<?php 

							$getPro = $ct->getCartProduct();
							if ($getPro) {
								$i = 0;
								$sum = 0;
								$qty = 0;
								while ($result = $getPro->fetch_assoc()) {
								
								$i++;

							 ?>
								<td><?php echo $i;?></td>
								<td><?php echo $result['productName']; ?></td>
								<td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
								<td>RM <?php echo $result['price']; ?></td>

					<td>
						<form action="" method="post">

							<input type="hidden" name="cartId" value="<?php echo $result['cartId']; ?>"/>
							<input type="number" name="quantity" value="<?php echo $result['quantity']; ?>"/>
							<input type="submit" name="submit" value="Update"/>
						</form>
					</td>
								<td>
							RM <?php
						$total = $result['price'] * $result['quantity'];
						echo $total;
						 ?>
							

									</td>
								<td><a onclick="return confirm('Are you Sure to Delete!')" href="?delpro=<?php echo $result['cartId']; ?>">X</a></td>
							</tr>
							
							<?php 
							$qty = $qty + $result['quantity'];
							$sum = $sum + $total;
							Session::set("qty",$qty);
							Session::set("sum",$sum);
							 ?>


						<?php 
							 } } 
						
						?>	
						</table>

						<?php
						$getData = $ct->checkCartTable();
							if ($getData){

								?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Sub Total : </th>
								<td>RM <?php echo $sum; ?></td>
							</tr>
							<tr>
								<th>TAX : </th>
								<td>10%</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td>RM 
									<?php 
									$vat = $sum * 0.1;
									$gtotal = $sum + $vat;
									echo $gtotal;
									 ?>
								</td>
							</tr>

					   </table>

					   
					<?php }else{

						echo "<script>
						alert('There are no products on Cart. Click OK to continue...');
						window.location.href='index.php';
						</script>";
						//echo "Cart Empty ! Please Shop Now...";
					} ?>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php include 'Footer.php';?>