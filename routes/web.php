<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\ProfileController;

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ResultController;
use App\Http\Controllers\User\VehicleController;
use Illuminate\Support\Facades\Route;


//home page routes
Route::get('/' , [HomeController::class , 'home'])->name('frontend.home');
//authentication page
Route::view('/sign-in', 'frontend.sign-in');

//detail page
// Route::view('/vehicle-detail', 'frontend.vehicle-details')->name('frontend.vehicle-detail');
Route::get('vehicle-detail/{slug}',[HomeController::class, 'vehicle'])->name('frontend.vehicle-detail');

//result page
Route::get('/search',[ResultController::class , 'result']);
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


//filter 
Route::get('/get-cars', [ResultController::class, 'getCars']);
Route::get('/get-makes', [ResultController::class, 'getMakes'])->name('cars.getMakes');
Route::get('/get-models', [ResultController::class, 'getModels'])->name('cars.getModels');
Route::get('/get-years', [ResultController::class, 'getYears'])->name('cars.getYears');
Route::get('/get-colors', [ResultController::class, 'getColors'])->name('cars.getColors');
Route::get('/get-bodytypes', [ResultController::class, 'getBodyTypes'])->name('cars.getBodyTypes');
Route::get('/get-salebranches', [ResultController::class, 'getSaleBranch'])->name('cars.getSaleBranch');
Route::get('/get-drives', [ResultController::class, 'getDrive'])->name('cars.getDrive');
Route::get('/get-fuels', [ResultController::class, 'getFuels'])->name('cars.getFuels');
Route::get('/get-engines', [ResultController::class, 'getEngines'])->name('cars.getEngines');
Route::get('/get-transmissions', [ResultController::class, 'getTransmissions'])->name('cars.getTransmissions');
Route::get('/get-auctions', [ResultController::class, 'getAuctions'])->name('cars.getAuctions');
//upload

// Route::get('/admin/hello', [UploadController::class, 'hello'])->name('hello');
Route::get('admin/upload' , [CarController::class, 'showUploadForm']);
Route::post('/upload', [CarController::class, 'uploadCsv'])->name('cars.upload');


Route::get('/search-cars', [ResultController::class, 'searchCars']);

// Route for storing verified images
Route::post('/store-verified-images', [CarController::class, 'storeVerifiedImages'])->name('admin.store.verified.images');