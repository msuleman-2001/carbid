<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function adminprofile()
    {
        // Retrieve the currently authenticated admin
        $admin = Auth::guard('admin')->user();
    
        // Pass the admin data to the view
        return view('admindashboard.profile', compact('admin'));
    }
    
}
