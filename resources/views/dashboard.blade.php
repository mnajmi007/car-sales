<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Dashboard | Car Sales</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Car Sales Dashboards</h1>
            
            <!-- Overview Information -->
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h6>Total Car</h6>
                        <h2><b>{{$totalCar}}</b></h2>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h6>Average ODO</h6> 
                        <h2><b>{{ round($avgOdo) }}</b></h2>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h6>Average Price</h6> 
                        <h2><b>{{ round($avgPrice) }}</b></h2>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                    <h6>Average MMR</h6> 
                    <h2><b>{{ round($avgMMR) }}</b></h2>
                    </div>
                </div>
            </div>

            <!-- Jumlah brand mobil -->
            <div class="col-sm-12 col-md-6 col-xl-6">
                <h4>Car Brands</h4>
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                <script>
                    function brandTotal(){
                        const xValues = ["KIA", "BMW", "VOLVO", "NISSAN", "Chevrolet"];
                        const yValues = [55, 49, 44, 24, 15];
                        const barColors = [
                        "#b91d47",
                        "#00aba9",
                        "#2b5797",
                        "#e8c3b9",
                        "#1e7145"
                        ];

                        new Chart("myChart", {
                            type: "doughnut",
                            data: {
                                labels: xValues,
                                datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                                }]
                            },
                            options: {
                                title: {
                                display: true,
                                text: "Most Selling Brand"
                                }
                            }
                        });
                    }
                    brandTotal();
                </script>
            </div>

            <!-- Car Type -->
            <div class="col-sm-12 col-md-6 col-xl-6">
                <h4>Car Type</h4>
                <canvas id="carType" style="width:100%;max-width:600px"></canvas>
                <script>
                    function carType(){
                        const xValues = ["SUV", "SEDAN", "COUPE", "CONVERTIBLE", "WAGON"];
                        const yValues = [55, 49, 44, 24, 15];
                        const barColors = ["red", "green","blue","orange","brown"];

                        new Chart("carType", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                                }]
                            },
                            options: {
                                legend: {display: false},
                                title: {
                                display: true,
                                text: "Most Selling Type"
                                }
                            }
                        });
                    }
                    carType();
                </script>
            </div>

        </div>
    </div>
</body>
</html>