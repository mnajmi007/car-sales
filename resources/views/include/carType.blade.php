<div class="col-sm-12 col-md-6 col-xl-6">
    <h4 class="sub-title">Car Body</h4>
    <canvas id="carType" style="width:100%;max-width:600px"></canvas>
    <script>
        function carType(){
            const xValues = ["SUV", "SEDAN", "COUPE", "CONVERTIBLE", "WAGON"];
            const yValues = [
                <?php
                echo DB::table('car_sales')->where('body','=','SUV')->count();
                ?>,
                <?php
                echo DB::table('car_sales')->where('body','=','Sedan')->count();
                ?>, 
                <?php
                echo DB::table('car_sales')->where('body','=','Coupe')->count();
                ?>, 
                <?php
                echo DB::table('car_sales')->where('body','=','Convertible')->count();
                ?>, 
                <?php
                echo DB::table('car_sales')->where('body','=','Wagon')->count();
                ?>
            ];
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