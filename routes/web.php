<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SubscribeController;

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

Route::controller(FrontController::class)->name('front.')->group(function(){
    
    Route::get('/', 'index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/products','products')->name('products');
    Route::get('/products/laptops/{id?}','labtops')->name('products.laptops');
    Route::get('/products/phones/{id?}','phones')->name('products.phones');
    Route::get('/products/foods/{id?}','foods')->name('products.foods');
    Route::get('/products/singleproduct/{id?}','singleproduct')->name('singleproduct');
    Route::get('/contact','contact')->name('contact');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::post('/order', 'store')->name('store');


});


Route::controller(CartController::class)->name('cart.')->group(function(){
    
    Route::get('/cart','index')->name('index');
    Route::get('/cart/add/{id}','addToCart')->name('add');
    Route::delete('/cart/remove/{id}','removeFromCart')->name('remove');
    Route::put('/cart/{id}','update')->name('update');

});

Route::name('admin.')->prefix('admin')->group(function(){

Route::middleware('auth')->group(function(){

Route::view('/','admin.index')->name('index');
Route::controller(MessageController::class)->group(function(){

Route::resource('messages', MessageController::class);
});
Route::controller(ProductController::class)->group(function(){

Route::resource('products', ProductController::class);
});
Route::controller(OrderController::class)->group(function(){

Route::resource('orders', OrderController::class);
});



});

require __DIR__.'/auth.php';

});



