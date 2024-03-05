<div class="col-sm-12 col-md-6 col-xl-6">
    <h4>Price and MMR</h4>
    <canvas id="priceMMR" style="width:100%;max-width:600px"></canvas>
    <script>
        function priceMMR(){
            const xValues = [50,60,70,80,90,100,110,120,130,140,150];
            const yValues = [7,8,8,9,9,9,10,11,14,14,15];

            new Chart("priceMMR", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                    }]
                },
                options: {
                    legend: {display: false},
                    scales: {
                    yAxes: [{ticks: {min: 6, max:16}}],
                    }
                }
            });
        }
        priceMMR();
    </script>
</div>