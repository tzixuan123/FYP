<?php include 'inc/orderdetails.php';?>
<?php 
$login = Session::get("cuslogin");
if ($login == false) {
    header("Location:login.php");
}
 ?>


<?php 
if (isset($_GET['customerId'])) {
    $id = $_GET['customerId'];
    $confirm = $ct->productShiftConfirm($id);

}

 ?>

<style>
.order {
    text-align: center;
}

.order h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.order p {
    font-size: 18px;
    margin-bottom: 10px;
}

.order a {
    color: #ff0000;
    text-decoration: none;
    font-weight: bold;
}

.tblone {
    width: 100%;
    margin: 0 auto;
    border: 2px solid #ddd;
    border-collapse: collapse;
    background-color: #fff;
}

.tblone th,
.tblone td {
    border: 2px solid #ddd;
    padding: 10px;
    text-align: center;
}

.tblone th {
    background-color: #333;
    color: #fff;
}

.tblone tr:nth-child(even) {
    background-color: #f2f2f2;
}

.tblone tr:nth-child(odd) {
    background-color: #fff;
}

.tblone tr:first-child {
    background-color: #333;
}

.tblone tr:first-child th {
    border: 2px solid #333;
}

.tblone tr:last-child td {
    border-bottom: 2px solid #ddd;
}

.tblone td img {
    max-width: 100px;
    max-height: 100px;
}

.tblone tr td:last-child {
    white-space: nowrap;
}

.tblone tr td:nth-child(6) {
    min-width: 150px;
}

.tblone tr td:last-child a {
    color: #007bff;
    text-decoration: underline;
    cursor: pointer;
}

.tblone tr td:last-child a:hover {
    text-decoration: none;
}

.clear {
    clear: both;
}
</style>

 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="order">
    			<h2>Your Ordered Details</h2>
                <br>

                <p>Note: Any cancellation of the order, will have to contact us for further changes. </p>
                <p><i class='bx bx-phone-call'></i><a href="contact.php"> Click Here</a> For contact.</p>
                <br>
                <table class="tblone">


                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>

                            <?php 
                            $cmrId = Session::get("cmrId");
                            $getOrder = $ct->getOrderedProduct($cmrId);
                            if ($getOrder) {
                                $i = 0;
                                while ($result = $getOrder->fetch_assoc()) {
                                
                                $i++;

                             ?>
                                <td><?php echo $i;?></td>
                                <td><?php echo $result['productName']; ?></td>
                                <td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
                                <td><?php echo $result['quantity']; ?></td>
                    
                                <td>RM <?php echo $result['price'];?></td>
                         <td><?php echo $fm->formatDate($result['date']); ?></td>

                         <td><?php

                         if ($result['status'] == '0') {
                             echo "Pending";
                         }elseif($result['status'] == '1'){
                            echo "Delivery";
                       } else{ 
                            echo "Delivered";
                         }


           ?></td>
                    </td>

                
                    <?php 
                    if ($result['status'] == '1') { ?>
                     <td> <a href="?customerId=<?php echo $result['id']; ?>">Confirm</a><td>
                   <?php } elseif($result['status'] == '2'){?>
                    <td>Completed</td>

                  <?php }elseif ($result['status'] == '0') {?>
                      <td>N/A</td>
                 <?php  }  ?>
                   
            </tr>
                            


                        <?php } } ?>    
                        </table>

    		</div>
    	</div>
    	
    	 	
       <div class="clear"></div>
    </div>
 </div>
