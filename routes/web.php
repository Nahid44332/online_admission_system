<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



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