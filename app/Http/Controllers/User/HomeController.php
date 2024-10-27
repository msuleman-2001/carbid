<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
class HomeController extends Controller
{
    public function home(){

        $vehicles = Car::all();
        return view('frontend.index' , compact('vehicles'));
    }

    public function vehicle($slug){
        $vehicles = Car::where('slug',$slug)->get();
       
        if (!$vehicles) {
         abort(404, 'vehicle not found');
     }
     
        return view('frontend.vehicle-details', compact('vehicles'));
       }
}
