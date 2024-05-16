<?php

use App\Http\Controllers\RWController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/welcome', [DashboardController::class, 'index']);

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');

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

Route::group(
    [
        'middleware' => ['auth', 'checkRole:RW'],
        'prefix' => 'RW'
    ],
    function () {
        Route::get('/', [DashboardController::class, 'indexRW']);
        /**
         * route for logout process
         */
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->name('admin.logout');
    }
);

Route::group(
    [
        'middleware' => ['auth', 'checkRole:RT'],
        'prefix' => 'RT'
    ],
    function () {
        Route::get('/', [DashboardController::class, 'indexRT']);
        /**
         * route for logout process
         */
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->name('admin.logout');
    }
);

Route::get('/register', [RegisterController::class, 'index'])->name('register');

use App\Http\Controllers\AduanController;

Route::resource('aduan', AduanController::class);
