<?php

use App\Http\Controllers\MobileController;
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

// interface mobile
Route::get('/index', [MobileController::class, 'index'])->name('interface.index');
Route::get('/register', [MobileController::class, 'register'])->name('interface.register');
Route::get('/login', [MobileController::class, 'login'])->name('interface.login');
Route::get('/pub', [MobileController::class, 'annonce'])->name('interface.pub_annonce');
Route::get('/annonce-product', [MobileController::class, 'annonce_product'])->name('annonce-product');
Route::get('/categorie-product', [MobileController::class, 'catergory_product'])->name('catergorie-product');