<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);
Route::get('/produk', [\App\Http\Controllers\ProdukController::class,'produk']);
Route::get('/about', [\App\Http\Controllers\HomepageController::class,'about']);
Route::get('/kategori', [\App\Http\Controllers\HomepageController::class,'kategori']);
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'index']);
Route::get('/login', [\App\Http\Controllers\DashboardController::class,'login']);
Route::get('/register', [\App\Http\Controllers\DashboardController::class,'register']);
Route::get('/detail', [\App\Http\Controllers\HomepageController::class,'desc']);

Route::group(['prefix' => 'admin'] , function(){
    Route::get('/' ,[\App\Http\Controllers\DashboardController::class,'index']);
    Route::resource('customer',\App\Http\Controllers\CustomerController::class);
    Route::resource('transaksi',\App\Http\Controllers\TransaksiController::class);
    Route::get('profil',[\App\Http\Controllers\UserController::class,'index']);
    Route::get('setting',[\App\Http\Controllers\UserController::class,'setting']);
    Route::get('laporan',[\App\Http\Controllers\LaporanController::class,'index']);
    Route::get('proseslaporan',[\App\Http\Controllers\LaporanController::class,'proses']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

