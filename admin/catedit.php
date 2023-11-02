<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classess/Category.php';?>
<?php
if (!isset($_GET['catid']) || $_GET['catid'] == NULL) {
   
   echo "<script>window.location='catlist.php';</script>";
   
} else {

    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['catid']);
}

$cat = new Category();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['catName'];
    $updateCat = $cat->catUpdate($catName,$id);
}

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 

<?php
if (isset($updateCat)){
echo $updateCat;

}

        ?>


     <?php
     $getCat = $cat->getCatById($id);
     if ($getCat) {
        while ($result = $getCat->fetch_assoc()) {
    
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

    .form {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }

    .form input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .form input[type="submit"] {
        background-color: lightblue;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form input[type="submit"]:hover {
        background-color: grey;
    }
</style>
 
                 <form action="" method="post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <input type="text" name="catName" value="<?php echo $result['catName'];?>" class="medium" />
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