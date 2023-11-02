<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GalleryController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/home',[HomeController::class,'index'])->middleware(['auth:sanctum','verified']);
Route::get('/dashboard',[HomeController::class,'dasboard'])->name('dashboard')->middleware(['auth:sanctum','verified']);
Route::resource('berita',BeritaController::class);
Route::get('/kontak', [KontakController::class,'kontak'])->name('kontak')->middleware(['auth:sanctum','verified']);
Route::get('/gallery', [GalleryController::class,'gallery'])->name('gallery')->middleware(['auth:sanctum','verified']);
