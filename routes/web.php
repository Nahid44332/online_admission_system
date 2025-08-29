<?php

use App\Http\Controllers\adminAuthController;
use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/courses', [FrontendController::class, 'courses']);
Route::get('/teachers', [FrontendController::class, 'teachers']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);
Route::get('/course-details', [FrontendController::class, 'courseDetails']);
Route::get('/admission', [FrontendController::class, 'admission']);

// Auth Route
Route::get('/admin/login', [adminAuthController::class, 'adminLogin']);
Route::get('/admin/logout', [adminAuthController::class, 'adminLogOut']);
Auth::routes();

Route::get('/admin/dashboard', [adminController::class, 'adminDashboard']);
