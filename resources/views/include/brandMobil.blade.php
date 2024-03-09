<div class="col-sm-12 col-md-6 col-xl-6">
    <h4 class="sub-title">Car Brands</h4>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    <script>
        function brandTotal(){
            const xValues = ["Kia", "BMW", "VOLVO", "NISSAN", "Chevrolet"];
            const yValues = [
                <?php
                echo DB::table('car_sales')->where('make','=','Kia')->count();
                ?>, 
                <?php
                echo DB::table('car_sales')->where('make','=','BMW')->count();
                ?>, 
                <?php
                echo DB::table('car_sales')->where('make','=','Volvo')->count();
                ?>, 
                <?php
                echo DB::table('car_sales')->where('make','=','Nissan')->count();
                ?>, 
                <?php
                echo DB::table('car_sales')->where('make','=','Chevrolet')->count();
                ?>
            ];
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