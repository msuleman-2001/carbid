<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend.index')->name('frontend.index');
Route::view('/sign-in', 'frontend.sign-in');


//Admin
Route::view('/admin/login', 'admindashboard.login-in')->name('admin.login');
Route::view('/admin', 'admindashboard.index')->name('admin.index');
Route::post('/admin/login', [AdminController::class, 'adminlogin'])->name('adminMatch');
Route::get('/admin', [AdminController::class, 'admindashboard'])->name('admin.index');
Route::view('/admin/profile', 'admindashboard.profile')->name('admin.profile');
Route::view('/admin/faq', 'admindashboard.faq')->name('admin.faq');
Route::view('/admin/setting', 'admindashboard.color-settings')->name('admin.setting');
