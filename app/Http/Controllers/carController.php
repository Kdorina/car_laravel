<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCarData;
use Illuminate\Support\Facades\DB;

class carController extends Controller
{
    public function newCar(){
        return view("car");
    }

    public function submitCar(StoreCarData $request){
        $request->validated();
        print_r($request->all());
    }




//     public function insertCar(){
//         $cars = DB::table("cars")->join("colors", "cars.id", "=", "colors.id")->get();
        
// // echo "beszúrás megtörtént " . $cars;
//         echo "<pre>";
//         print_r($cars);
    
//     }
    public function insertCar(){
        $cars = DB::table("cars")
        ->join("colors", "cars.car_id", "=", "colors.id")
        ->where("brand", "Opel" )->get();
        echo "<pre>";
       print_r($cars);
    
    }
}