<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
     public function uplaod(){
        return view('admindashboard.upload');
    }
}
