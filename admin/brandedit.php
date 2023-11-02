<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classess/Brand.php';?>
<?php
if (!isset($_GET['brandid']) || $_GET['brandid'] == NULL) {
   
   echo "<script>window.location='brandlist.php';</script>";
   
} else {

    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['brandid']);
}

$brand = new Brand();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brandName = $_POST['brandName'];
    $updateBrand = $brand->brandUpdate($brandName,$id);
}

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Brand</h2>
               <div class="block copyblock"> 

<?php
if (isset($updateBrand)){
echo $updateBrand;

}

        ?>


     <?php
     $getBrand = $brand->getBrandById($id);
     if ($getBrand) {
        while ($result = $getBrand->fetch_assoc()) {
    
     ?>   
     <style>
    .box {
        background: #f9f9f9;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form {
        width: 100%;
    }

    .medium {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: lightblue;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: grey;
    }
</style>

                 <form action="" method="post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <input type="text" name="brandName" value="<?php echo $result['brandName'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>

                    <?php } } ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>