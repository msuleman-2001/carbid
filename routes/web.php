<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


Route::view('/admin', 'admindashboard.sign-in');
Route::view('/sign-in', 'frontend.sign-in');






//Admin
Route::view('/admin/sign-in', 'admindashboard.sign-in')->name('admin.sign-in');
Route::view('/admin-dashboard', 'admindashboard.index')->name('admin.index');
