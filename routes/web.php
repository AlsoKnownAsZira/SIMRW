<?php

use App\Http\Controllers\RWController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/warga', [WargaController::class, 'index']);
//Route::get('/rukun_tetangga', [RTController::class, 'index']);
//Route::get('/rukun_warga', [RWController::class, 'index']);

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login.auth');

Route::group(
    [
        'middleware' => ['auth', 'checkRole:Warga'],
        'prefix' => 'Warga'
    ],
    function () {
        Route::get('/', [DashboardController::class, 'indexWarga']);
        /**
         * route for logout process
         */
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->name('admin.logout');
    }
);

Route::get('/warga', [WargaController::class, 'index']);