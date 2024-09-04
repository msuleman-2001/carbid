<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend.index')->name('frontend.index');
Route::view('/sign-in', 'frontend.sign-in');


//Admin
Route::view('/admin/signup', 'admindashboard.sign-up')->name('admin.signup');
Route::view('/admin/login', 'admindashboard.login-in')->name('admin.login');

Route::post('/admin/signup', [AdminController::class, 'adminregister'])->name('adminSave');
Route::post('/admin/login', [AdminController::class, 'adminlogin'])->name('adminMatch');


Route::view('/admin', 'admindashboard.index')->name('admin.index');

Route::get('/admin', [AdminController::class, 'admindashboard'])->name('admin.index');

Route::view('/admin/faq', 'admindashboard.faq')->name('admin.faq');
Route::view('/admin/setting', 'admindashboard.color-settings')->name('admin.setting');
//admin profile
Route::get('/admin/profile', [ProfileController::class, 'adminprofile'])->name('admin.profile');
Route::post('/admin/update-profile', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');
