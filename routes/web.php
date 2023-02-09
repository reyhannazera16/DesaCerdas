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

Route::get('/list', function () {
    return view('pages.UMKM_LIST');
});

Route::get('/umkm', function () {
    return view('pages.UMKM_Potensi');
});

Route::get('/resi', function () {
    return view('pages.resi');
});

Route::get('/detail', function () {
    return view('pages.detail');
});

Route::get('/ajukan', function () {
    return view('pages.ajukan');
});
Route::get('/payment', function () {
    return view('pages.Payment');
});

Route::get('/finish', function () {
    return view('pages.finish');
});
Route::get('/register', [RegisterController::class, 'index']);

Route::resource('/form', UploadShapefileController::class);

Route::get('/contact', function () {
    return view('pages.contact');
});



Route::get('/login', function () {
    return view('pages.login');
});
