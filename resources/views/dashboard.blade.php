<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Dashboard | Car Sales</title>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <h1 class="title">CAR SALES</h1>

            <!-- Overview Information -->
            <div class="overview-card">
                <div class="row">
                    @include('include.overview')
                </div>
            </div>

            <div class="dash-information">
                <div class="row">
                    <!-- Jumlah brand mobil -->
                    @include('include.brandMobil')

                    <!-- Car Type -->
                    @include('include.carType')
                </div>
            </div>

            <div class="dash-information">
                <div class="row">
                    <!-- Price VS MMR -->
                    @include('include.priceMmr')

                    <!-- Price VS ODO -->
                    @include('include.priceOdo')
                </div>
            </div>

        </div>
    </div>
</body>
</html>