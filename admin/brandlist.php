<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classess/Brand.php';?>
<?php
$brand = new Brand();


if (isset($_GET['delbrand'])) {
	$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delbrand']);
	$delbrand= $brand->delbrandById($id);

}

?>
<style>
    .box {
        background: #f9f9f9;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .data {
        width: 100%;
    }

    .datatable {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff;
        border-radius: 5px;
    }

    .datatable thead {
        background-color: #007bff;
        color: #fff;
    }

    .datatable thead th {
        padding: 10px;
        text-align: left;
    }

    .datatable tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    .datatable tbody tr td {
        padding: 10px;
    }

    .datatable tbody tr.odd.gradeX td {
        border-bottom: 1px solid #ddd;
    }

    .datatable tbody tr.odd.gradeX:last-child td {
        border-bottom: none;
    }

    .datatable tbody tr:hover {
        background-color: #e0f7ff;
    }

    .datatable tbody tr:hover td {
        transition: background-color 0.2s;
    }

    .datatable tbody tr:hover a {
        color: #007bff;
        text-decoration: none;
        transition: color 0.2s;
    }
</style>


        <div class="grid_10">
            <div class="box round first grid">
                <h2>Brand List</h2>
                <div class="block">   

                	<?php 

                
                	if (isset($delbrand)) {
                		echo $delbrand;
                	}

					
                	?>

                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Brand Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

				<?php
				$getBrand = $brand->getAllBrand();
				if ($getBrand) {
					$i = 0;
					while ($result = $getBrand->fetch_assoc()) {
						$i++;
				

				?>		
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $result['brandName'];?></td>
							<td><a href="brandedit.php?brandid=<?php echo $result['brandId'];?>">Edit</a> || <a onclick="return confirm('Are you sure to delete!')" href="?delbrand=<?php echo $result['brandId'];?>">Delete</a></td>
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

