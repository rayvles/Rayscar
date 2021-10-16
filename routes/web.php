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

// admin Route
use App\Http\Controllers\AdminPageController;

Route::prefix('/admin')->group(function(){
    Route::get('/', [AdminPageController::class, 'index']);
    Route::get('/tabledata', [AdminPageController::class, 'tabledata']);
    Route::get('/tabledatapembeli', [AdminPageController::class, 'tabledatapembeli']);
    Route::get('/formpembeli', [AdminPageController::class, 'formpembeli']);
});

// Home Route
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\CashController;
Route::resource('Mobil', MobilController::class,);
Route::resource('Pembeli', PembeliController::class,);
Route::get('/transaksi/cash/beli-baru', [CashController::class, 'create']);
Route::resource('/transaksi/cash',CashController::class)->except(['delete', 'show', 'edit']);
Route::get('/admin/tabledata', [MobilController::class, 'index']);
Route::get('/admin/cashtable', [CashController::class, 'index']);
Route::get('/admin/formcash', [CashController::class, 'create']);
Route::get('/admin/tabledatapembeli', [PembeliController::class, 'index']);
Route::get('/home', [HomePageController::class, 'index']);
Route::get('/transaksi/cash/{cash}/cetak-nota', [CashController::class, 'cetak_nota'])->name('cash.cetak_nota');

