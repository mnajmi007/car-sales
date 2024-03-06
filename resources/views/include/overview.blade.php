<div class="col-sm-12 col-md-3 col-xl-3">
    <div class="card text-center">
        <div class="card-body">
            <h6>Total Car</h6>
            <span class="number">{{$totalCar}}</span>
            <span>unit</span>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-3 col-xl-3">
    <div class="card text-center">
        <div class="card-body">
            <h6>Average ODO</h6>
            <span class="number">{{ round($avgOdo) }}</span>
            <span>KM</span> 
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-3 col-xl-3">
    <div class="card text-center">
        <div class="card-body">
            <h6>Average Price</h6> 
            <span>$</span> 
            <span class="number">{{ round($avgPrice) }}</span>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-3 col-xl-3">
    <div class="card text-center">
        <div class="card-body">
        <h6>Average MMR</h6>
        <span>$</span> 
        <span class="number">{{ round($avgMMR) }}</span>
        </div>
    </div>
</div>