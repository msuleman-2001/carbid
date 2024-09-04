<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    

    public function adminregister(Request $request)
    {
        $data = $request->validate([
            'admin_name' => 'required',
            'admin_email' => 'required|email|unique:admins',
            'admin_number' => 'required',
            'password' => 'required',
        ]);
    
        $data['password'] = Hash::make($data['password']);
    
        $admin = Admin::create($data);
    
        if ($admin) {
            return redirect()->route('admin.login');
        }
    
        return back()->withErrors(['registration' => 'Failed to register owner.']);
    }
    
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


    public function updateProfile(Request $request)
    {
        // Retrieve the currently authenticated admin
        $admin = Auth::guard('admin')->user();
    
        // Validate the incoming request data
        $data = $request->validate([
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|string|email|max:255|unique:admins,admin_email,' . $admin->admin_id, // Correct usage
            'admin_city' => 'nullable|string|max:50',
            'admin_number' => 'nullable|string|max:50',
            'admin_address' => 'nullable|string|max:50',
        ]);
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('admin_image')) {
            $image = $request->file('admin_image');
            $imagePath = $image->store('admin_avatars', 'public');
            $data['admin_image'] = $imagePath;
    
            // Delete the old image if it exists
            if ($admin->admin_image) {
                Storage::disk('public')->delete($admin->admin_image);
            }
        }
    
        // Update the admin's details
        $admin->update($data);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

}
