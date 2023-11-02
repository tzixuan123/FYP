<?php include 'inc/header.php';?>

<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "db_shop");

$test = array();

$count = 0;
$res = mysqli_query($link, "SELECT * FROM tbl_order");

while ($row = mysqli_fetch_array($res)) {
    $type = $row["date"];
    $price = $row["price"];

    if (isset($test[$type])) {
        // If the type already exists in the $test array, add the price to it
        $test[$type]["y"] += $price;
    } else {
        // If it's a new type, create a new entry in the $test array
        $test[$type] = array("label" => $type, "y" => $price);
    }
}

// Convert the associative array back to a numerical indexed array
$test = array_values($test);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <meta name = 'keywords' content = 'houses to rent home for rent cheap houses for rent cheap apartments for rent'>
    <meta name = 'description' content = 'Looking for Houses to Rent ?  We got you covered . Rent a house at your desired location at Rent Heaven. Create an account now!'>
    <title>Chinese Medicine</title>

    <!--Meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boxicons -Import Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font-awesome CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <!--table-->
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script>
        window.onload = function() {
        
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            
            axisY: {
                title: "Total Sales (RM)",
                titleFontSize: 16,

            },
            axisX: {
                title: "Date"
            },
            legend: {
                fontSize: 14,
            },
            data: [{
                type: "column",
                color: "purple", // Custom color for the columns
                yValueFormatString: "RM#,##0.## ",
                showInLegend: true, // Show in the legend
                legendText: "Sales",
                dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        
        }

        
    </script>
    
    <style>
        body {
            background: linear-gradient(to bottom, #f7f7f7, #e0e0e0); /* Gradient background */
        }
        .card {
            margin-bottom: 20px; /* Add space between card sections */
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            
        }

        .homepage-container {
            text-align: center;
            max-width: 1200px; /* Adjust the maximum width as needed */
            margin: 0 auto; /* Center the container */
        }

        /* Example media query for smaller screens */
        @media (max-width: 768px) {
            .homepage-container {
                max-width: 90%; /* Reduce the width for smaller screens */
        }
    }
        h3, p {
             padding: 10px;
        }


        #chartContainer {
            height: 500px;
            width: 95%;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px; /* Add rounded corners for a nicer look */
}


        </style>
</head>

  <body>
    

<div class="homepage-container">
        
        <div class="row" style="respnsive">
        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                    <h3><i class='bx bx-credit-card-front' ></i> View Total Sales</h3>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered table-striped" >
                                        
                                    </table>
                                    <div style="margin-top:3%">
                                        <div id="chartContainer" ></div>
                                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#example').DataTable();
                    });
                </script>
            </div>
        </div>
      </div>   
</div>







</body>
</html>