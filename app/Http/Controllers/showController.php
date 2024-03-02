<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class showController extends Controller
{
    //
    public function index(){
        $car = DB::table('car_sales')->paginate(10);

        return view('dashboard',['car' => $car]);
    }
}
