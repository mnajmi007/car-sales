<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class showController extends Controller
{
    //
    public function index(){
        $car = DB::table('car_sales')->paginate(10);

        $totalCar = DB::table('car_sales')->get()->count();

        $avgOdo = DB::table('car_sales')->get()->avg('odometer');

        $avgPrice = DB::table('car_sales')->get()->avg('sellingprice');

        $avgMMR = DB::table('car_sales')->get()->avg('mmr');

        return view('dashboard',['car' => $car, 'totalCar'=>$totalCar, 'avgOdo'=>$avgOdo, 'avgPrice' => $avgPrice, 'avgMMR' => $avgMMR]);
    }
}
