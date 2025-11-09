<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*  sanju
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
    return view('index');
})->name('index');

Route::get('admin/login', function () {
    return view('admin-panel.login');
})->name('admin.login');


Route::get('admin/logout',[LoginController::class,'logout'])->name('admin.logout');
Route::post('admin/login',[LoginController::class,'login'])->name('admin.login');
Route::get('admin/register',[RegisterController::class,'create'])->name('admin.register');
Route::post('admin/store',[RegisterController::class,'register'])->name('admin.store');

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin-panel.dashboard');
    })->name('admin.dashboard');

    Route::post('users/store',[UserController::class,'store'])->name('users.store');
    Route::get('users/list',[UserController::class,'index'])->name('users.list');
    Route::get('users/create',[UserController::class,'create']);

    Route::post('product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('products/create',[ProductController::class,'create']);
    Route::get('products/list',[ProductController::class,'index'])->name('product.list');;
});



Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/404', function () {
    return view('404');
})->name('404');


Route::get('/product-details', function () {
    return view('product-details');
})->name('shop.details');
