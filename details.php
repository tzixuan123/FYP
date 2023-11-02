<?php include 'inc/productdetails.php';?>

<?php
if (isset($_GET['proid'])) {
   

    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['proid']);
}




if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];

    // Check if the quantity is not more than 10 and not less than 1
    if ($quantity > 10) {
        $addCart = "<span style='color: red; font-size: 18px;'>Quantity cannot exceed 10.</span>";
    } elseif ($quantity <= 0) {
        $addCart = "<span style='color: red; font-size: 18px;'>Quantity must be at least 1.</span>";
    } else {
        $addCart = $ct->addToCart($quantity, $id);
    }
}

?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])) {
	$productId = $_POST['productId'];
    $insertCom = $pd->insertCompareData($productId,$cmrId);
}

?> 

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wlist'])) {
    $saveWlist = $pd->saveWishListData($id,$cmrId);
}

?> 

<style>
	.mybutton{width: 100px;float: left;margin-right: 50px;}
	.product-desc p {
        font-size: 16px;
        line-height: 1.6;
        text-align: justify;
        color: #555;
    }

</style>

 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">	

				<?php 
				$getPd = $pd->getSingleProduct($id);
				if ($getPd) {
					while ($result = $getPd->fetch_assoc()) {
						
				

				 ?>			
					<div class="grid images_3_of_2">
						<img src="admin/<?php echo $result['image']; ?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result['productName']; ?> </h2>				
					<div class="price">
						<p>Price: <span>RM <?php echo $result['price']; ?></span></p>
						<!-- <p>Category: <span><?php echo $result['catName']; ?></span></p> -->
						 <p>Brand:<span><?php echo $result['brandName']; ?></span></p> 
						<p>Available Stock:<span><?php echo $result['stock']; ?></span></p>
						<p>Note: Any order will be cancelled If the stock is unavailable. </p>
					</div>
				<div class="add-cart">
					<form action="" method="post">
						<input type="number" class="buyfield" name="quantity" value="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
					</form>				
				</div>

				<span style="color: red;font-size: 18px;">
					<?php 

					if (isset($addCart)) {
						echo $addCart;
					}
					 ?>

					 <?php 

					if (isset($insertCom)) {
						echo $insertCom;
					}


					if (isset($saveWlist)) {
						echo $saveWlist;
					}
					 ?>

				</span>
				<?php 
				$login = Session::get("cuslogin");
				if ($login == true) {
					?>

				<div class="add-cart">
					<div class="mybutton">
					<form action="" method="post">
						<input type="hidden" class="buyfield" name="productId" value="<?php echo $result['productId']; ?>"/>
					</form>	
					</div>

						
				</div>
			<?php } ?>

			</div>
			<div class="product-desc">
			<h2>Product Details</h2>
			<?php echo $result['body']; ?>
	    </div>
			<?php } } ?>	
	</div>
				
 		</div>
 	</div>
	</div>
	<?php include 'Footer.php';?>