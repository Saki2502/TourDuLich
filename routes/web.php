<?php

use App\Http\Controllers\TourDuLichController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tourdulich', [
    TourdulichController::class,'index'
]);

Route::get('/login', function () {
    return view('tourdulich.login');
});

Route::get('/tourdulich/login', [
    TourdulichController::class,'login'
]);

Route::get('/tourdulich/register', [
    TourdulichController::class,'register'
]);