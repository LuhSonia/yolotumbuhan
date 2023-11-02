<?php
// use app\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\SmartglassesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('packages', [SmartglassesController::class, 'index'])->name('packages');
Route::post('berita', [SmartglassesController::class, 'store'])->name('berita post');
Route::get('berita', [SmartglassesController::class, 'index'])->name('berita get');
Route::post('/berita/{id}', [SmartglassesController::class, 'update'])->name('berita update');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
