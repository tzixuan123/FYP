<?php include 'inc/header.php';?>


<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "db_shop");

$test = array();

$res = mysqli_query($link, "SELECT productName, SUM(stock) as total_stock FROM tbl_product GROUP BY productName");

while ($row = mysqli_fetch_assoc($res)) {
    $productName = $row["productName"];
    $stock = $row["total_stock"];

    $test[] = array("label" => $productName, "y" => $stock);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your existing code) ... -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .homepage-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #333;
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 15px;
            font-size: 24px;
        }

        .card-body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #chartContainer, #pieChartContainer {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="homepage-container">
        <div class="row" style="responsive">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class='bx bx-credit-card-front'></i> View Total Stock</h3>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-striped">
                            <!-- ... (your table content) ... -->
                        </table>
                        <div style="margin-top:3%">
                            <div id="chartContainer"></div>
                            <div id="pieChartContainer" style="height: 400px; width: 100%;"></div>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                axisY: {
                    title: "Total Stock",
                    titleFontSize: 16,
                },
                axisX: {
                    title: "Product Name"
                },
                legend: {
                    fontSize: 14,
                },
                data: [{
                    type: "column",
                    color: "purple",
                    yValueFormatString: "#,##0.##",
                    dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
        }
    </script>
    <script>
        window.onload = function() {
            var pieChart = new CanvasJS.Chart("pieChartContainer", {
                animationEnabled: true,
                title: {
                    text: "Stock Distribution"
                },
                legend: {
                    fontSize: 14,
                },
                data: [
                    {
                        type: "pie",
                        
                        indexLabel: "{label}: #percent%",
                        indexLabelFontSize: 14,
                        dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
                    }
                ]
            });
            pieChart.render();
        }
    </script>
</body>
</html>
