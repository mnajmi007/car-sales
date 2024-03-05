<div class="col-sm-12 col-md-6 col-xl-6">
    <h4 class="sub-title">Car Type</h4>
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