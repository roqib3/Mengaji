<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ngaji;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DataMengajiController;

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
    return view('master');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/registrasi', [RegistrasiController::class, 'showForm'])->name('registrasi');
Route::post('/registrasi', [RegistrasiController::class, 'register'])->name('registrasi.submit');

Route::get('/rekap', function () {
    return view('rekap');
});

Route::get('/datamengaji', function () {
    return view('datamengaji');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

//Route::get('/datamengaji', [DataMengajiController::class, 'show']);
//->name('data-mengaji.form');
//Route::post('/datamengaji', [DataMengajiController::class, 'store'])->name('data-mengaji.store');

Route::get('/datamengaji', [DataMengajiController::class, 'showForm'])->name('datamengaji');
Route::post('/datamengaji', [DataMengajiController::class, 'store'])->name('data-mengaji.store');