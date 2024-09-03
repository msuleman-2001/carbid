<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    
    public function adminlogin(Request $request)
{
    $credentials = $request->validate([
        'admin_email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::guard('admin')->attempt(['admin_email' => $credentials['admin_email'], 'password' => $credentials['password']])) {
        return redirect()->route('admin.index');
    }

    return back()->withErrors(['admin_email' => 'Invalid credentials']);
}


    public function admindashboard()
    {
        if (Auth::guard('admin')->check()) {
            $admin = Auth::guard('admin')->user();

            return view('admindashboard.index', );
        } else {
            return redirect()->route('admin.login');
        }
    }
}
