﻿<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classess/Category.php';?>
<?php
$cat = new Category();

if (isset($_GET['delcat'])) {
	$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delcat']);
	$delcat = $cat->delcatById($id);
}
?>
<style>
    .box {
        background: #f9f9f9;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .block {
        margin: 20px;
    }

    .data {
        width: 100%;
    }

    .data th, .data td {
        padding: 10px;
        text-align: center;
    }

    .data th {
        background-color: #007bff;
        color: #fff;
    }

    .data tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .data tr:nth-child(odd) {
        background-color: #fff;
    }

    .data a {
        text-decoration: none;
        color: #007bff;
    }

    .data a:hover {
        text-decoration: underline;
    }
</style>


        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">   

                	<?php 

                	if (isset($delcat)) {
                		echo $delcat;
                	}

                	?>

                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

				<?php
				$getCat = $cat->getAllCat();
				if ($getCat) {
					$i = 0;
					while ($result = $getCat->fetch_assoc()) {
						$i++;
				

				?>		
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $result['catName'];?></td>
							<td><a href="catedit.php?catid=<?php echo $result['catId'];?>">Edit</a> || <a onclick="return confirm('Are you sure to delete!')" href="?delcat=<?php echo $result['catId'];?>">Delete</a></td>
						</tr>
					<?php } } ?>	
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

