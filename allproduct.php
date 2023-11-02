<?php include 'inc/main.php';?>

<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>

						<?php 

						$getCat = $cat->getAllCat();
						if ($getCat) {
							while ($result = $getCat->fetch_assoc()) {
								
						
						 ?>
				      <li><a href="productbycat.php?catId=<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></a></li>
				      <?php }} ?>
				    
    				</ul>
    	
 				</div>

 <div class="main">
    <div class="content">	
			<div class="content_top">
    		<div class="heading">
    		<h3>All Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">


	      	<?php
	      	$getNpd = $pd->getAllProducts();
	      	if ($getNpd) {
	      		while ($result = $getNpd->fetch_assoc()) { 
	      			
	      
	      	?>

				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img class="img1" src="admin/<?php echo $result['image']; ?>" /></a>
					 <h2><?php echo $result['productName']; ?></h2>
					 <p><span class="price">RM <?php echo $result['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
		
			</div>
    </div>
	
 </div>

 <?php include 'Footer.php';?>
