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
Route::get('/reset', [MobileController::class, 'reset_password'])->name('reset_password');

Route::get('/pub', [MobileController::class, 'annonce'])->name('interface.pub_annonce');
Route::get('/annonce-product', [MobileController::class, 'annonce_product'])->name('annonce-product');
Route::get('/all-category-product', [MobileController::class, 'catergory_product'])->name('all-category-product');
Route::get('/mediatheque_aide', [MobileController::class, 'media_help'])->name('interface.mediatheque_aide');
Route::get('/communes', [MobileController::class, 'commune'])->name('interface.commune');
Route::get('/annonce_vip', [MobileController::class, 'annonce_vip'])->name('interface.annonce_vip');
Route::get('/credits', [MobileController::class, 'buycredit'])->name('interface.buy_credit');
Route::get('/annonce-categorie', [MobileController::class, 'annonce_categorie'])->name('interface.annonce_category');
Route::get('/annonce-commune', [MobileController::class, 'commune_annonce'])->name('interface.commune_annonce');
Route::get('/detail', [MobileController::class, 'detail_annonce'])->name('interface.detail_annonce');
Route::get('/contact', [MobileController::class, 'contact'])->name('interface.contact');