<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>


<?php
if (!isset($_GET['msgid']) || $_GET['msgid'] == NULL) {
   
   echo "<script>window.location='inbox.php';</script>";
   
} else {

    $id = $_GET['msgid'];
}


 ?>


        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>View Message</h2>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  echo "<script>window.location='inbox.php';</script>"; 

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

    .form {
        width: 70%;
        margin: 0 auto;
    }

    .form label {
        display: block;
        font-weight: bold;
    }

    .form input[type="text"],
    .form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .form textarea {
        height: 150px;
    }

    .form input[type="submit"] {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .form input[type="submit"]:hover {
        background: #0056b3;
    }
</style>



                <div class="block">               
                 <form action="" method="post" >

             <?php

            $query = "select * from tbl_contact where id='$id'";
            $msg = $db->select($query);
            if ($msg) {

            while ($result = $msg->fetch_assoc()) {


           ?>
                    <table class="form">
                       
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $result['name'];?>" class="medium" />
                    </td>
                </tr>

                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['email'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Phone</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['contact'];?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Date</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $fm->formatDate($result['date']);?>" class="medium" />
                            </td>
                        </tr>
                     
                    
                   
                    
                       
                    
                        <tr>
                            <td>
                                <label>Message</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="message">
                                    <?php echo $result['message'];?>

                                </textarea>
                            </td>
                        </tr>

                       
                        

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Ok" />
                            </td>
                        </tr>
                    </table>

                    <?php } } ?>

                    </form>
                </div>
            </div>
        </div>


 <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>


 <!-- Load TinyMCE -->

 <?php include 'inc/footer.php'; ?>



