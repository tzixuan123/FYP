<?php
// ... Your existing code ...

// Initialize your Cart and Format objects
$ct = new Cart();
$fm = new Format();

// Function to retrieve available stock for a product
function getAvailableStock($productId, $connection) {
    // Replace 'tbl_product' and 'tbl_order' with the actual table names
    $query = "SELECT p.product_id, p.stock, p.productName, SUM(o.quantity) AS total_ordered
              FROM tbl_product p
              LEFT JOIN tbl_order o ON p.product_id = o.product_id
              WHERE p.product_id = $productId
              GROUP BY p.product_id";

    $result = mysqli_query($connection, $query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stockQuantity = $row['stock'];
        $totalOrdered = $row['quantity'];
        $availableStock = $stockQuantity - $totalOrdered;
        return $availableStock;
    }

    return 0; // Return 0 if product data not found
}

$getOrder = $ct->getAllOrderProduct();
if ($getOrder) {
    while ($result = $getOrder->fetch_assoc()) {
        $productId = $result['productId'];
        $availableStock = getAvailableStock($productId, $db_shop); // Replace with your database connection
        
        // Output the available stock
        echo "Available Stock: $availableStock";
        
        // Rest of your code to display the order details
        // ...
    }
}
// ... Rest of your code ...
?>



$query = "INSERT INTO tbl_cart(sId,productId,productName,price,quantity,image) VALUES('$sId','$productId','$productName','$price','$quantity','$image') ";
			$inserted_row = $this->db->insert($query);
			if ($inserted_row) {
				echo "<script>
						alert('Product is added.');
						window.location.href='index.php';
						</script>";
			} else{
				header("Location:404.php");
			}
		}
}














/////////////////////////////////////


<?php 
include 'inc/header.php';
include 'inc/sidebar.php';
require 'functions.php';

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classess/Cart.php');
$cart = new Cart();
$fm = new Format();

if (isset($_GET['shiftid'])) {
	$id = $_GET['shiftid'];
	$shift = $ct->productShifted($id);

}

if (isset($_GET['delproid'])) {
	$id = $_GET['delproid'];
	$delOrder = $ct->delProductShifted($id);

}
 ?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Ordered</h2>
				<!--<td><a href="productedit.php">Edit the Stock</a></td> -->
                <?php 
                if (isset($shift)) {
                	echo $shift;
                }

                if (isset($delOrder)) {
                	echo $delOrder;
                }


                 ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>ID</th>
							<th>Order Time</th>
							<th>Product</th>
							<th>Quantity</th>
							<th>Price</th>
							<!-- <th>Stock</th> -->
							<!-- <th>Cust. ID</th> -->
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php

						$getOrder = $cart->getAllOrderProduct();
						if ($getOrder) {
							while ($result = $getOrder->fetch_assoc()) {
								$productId = $result['productId'];
								$availableStock = $cart-> getAvailableStock($productId, $connection); 

						  ?>
						<tr class="odd gradeX">
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $fm->formatDate($result['date']); ?></td>
							<td><?php echo $result['productName']; ?></td>
							<td><?php echo $result['quantity']; ?></td>
							<td>RM  <?php echo $result['price']; ?></td>
							<td>Available <?php echo $availabelStock ;?></td> 
							<!-- <td><?php echo $result['cmrId']; ?></td> -->
							<td><a href="customer.php?custId=<?php echo $result['cmrId']; ?>">View Details</a></td>

							<?php 

							if ($result['status'] == '0') { ?>
							<td><a href="?shiftid=<?php echo $result['id']; ?>">Shifted</a></td>	
							<?php }elseif($result['status'] == '1'){?>
								<td>Pending</td>
							<?php } else{ ?>
								<td><a href="?delproid=<?php echo $result['id']; ?>">Completed</a></td>
						<?php } ?>
						</tr>
					<?php }} ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
		
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>