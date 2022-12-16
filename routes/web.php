<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadShapefileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route Home
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/maps', function () {
    return view('pages.maps');
});

Route::get('/register', [RegisterController::class, 'index']);

Route::resource('/form', UploadShapefileController::class);

Route::get('/contact', function () {
    return view('pages.contact');
});



Route::get('/login', function () {
    return view('pages.login');
});
