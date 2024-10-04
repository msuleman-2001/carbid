<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cars;
class HomeController extends Controller
{
    public function home(){

        $vehicles = cars::all();
        return view('frontend.index' , compact('vehicles'));
    }

    public function vehicle($slug){
        $vehicles = cars::where('slug',$slug)->get();
       
        if (!$vehicles) {
         abort(404, 'vehicle not found');
     }
     
        return view('frontend.vehicle-details', compact('vehicles'));
       }
}
