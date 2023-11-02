<section id="hero" class="d-flex align-items-center">
    <div class="container">
	<br><br>
	<br>
	<br>
	<br>
	<h1>Lists of Local Stores  <i class='bx bxs-leaf'></i> </h1>
	<p>Any online consultation can be performed through Whatapps </p>


  
    </div>
  </section>
  <section class="d-flex align-items-center">
	<div class="container">
		<br>
	    <?php
	    	$qry = $qry = $conn->query("SELECT p.*,c.name as category from posts p inner join category c on c.id = p.category_id where p.status = 1 order by date(p.date_published) desc limit 10");
	    	while($row=$qry->fetch_assoc()){
	    ?>
	    <div class="card col-md-12 list-items"  data-id="<?php echo $row['id'] ?>">
	    	<div class="card-body">
	    		<div class="row">
	    		<div class="col-md-4">
	    			<center><img src="assets/img/<?php echo $row['img_path'] ?>" alt="" class='col-sm-10'></center>
	    		</div>
	    		<div class="col-md-8 truncate">
	    			<h3><b><?php echo $row['title'] ?></b></h3>
	    			<p class="text-truncate">
	    				<?php echo html_entity_decode($row['category']) ?>
	    			</p>

	    		</div>
	    		</div>

	    	</div>
	    </div>
		<?php } ?>
		</div>
  </section>
  <style type="text/css">
  	.list-items p{
  		text-align: left !important;
  	}
  	.list-items{
  		cursor: pointer;
  	}
  	.truncate{
  		max-height: 10vw;
  		overflow: hidden;
  	}
  </style>]
  <script>
  	$(document).ready(function(){
  		$('.list-items').click(function(){
  			location.replace('indexEdu.php?page=preview_post&id='+$(this).attr('data-id'))
  		})
  	})
  </script>
   