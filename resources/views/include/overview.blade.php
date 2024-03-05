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