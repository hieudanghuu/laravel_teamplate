<?php

use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SessionController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('webview.home');
// })->name('web.index');
// Route::group('/admin', function () {
//     Route::get('',[HomeController::class,'index'])->name('dashboard');
// })->middleware('auth');
// Route::prefix('')->group(function () {
    Route::get('',[HomeController::class,'index'])->name('web.home');
    Route::get('/mens',[HomeController::class,'showMens'])->name('web.showMens');
    Route::get('/womens',[HomeController::class,'showWomens'])->name('web.showWomens');
    Route::get('{id}/view',[HomeController::class,'view'])->name('web.view');
    
    Route::post('{id}/add_cart',[HomeController::class,'addCart'])->name('web.cart.add');
    Route::post('{id}/update_cart',[HomeController::class,'updateCart'])->name('web.cart.update');
    Route::get('/shopping_cart',[HomeController::class,'showCart'])->name('web.cart.show');
    Route::get('/shopping_cart/delete/{id}',[HomeController::class,'delete'])->name('web.cart.delete');
    Route::post('/checkout',[HomeController::class,'checkout'])->middleware('auth')->name('web.cart.checkout');

    
// });


Route::middleware('auth','admin')->prefix('admin')->group(function () {
    Route::get('',[App\Http\Controllers\Dashboard\HomeController::class,'index'])->name('dashboard.home');
    Route::prefix('user')->group(function(){
        // Route::get('/create'.[UserController::class,'create'])->name('dashboard.create');
        // Route::post('/store'.[UserController::class,'store'])->name('dashboard.store');
        Route::get('/list',[UserController::class,'index'])->name('dashboard.user.list');
        Route::get('/{id}/edit',[UserController::class,'edit'])->name('dashboard.user.edit');
        Route::post('{id}/update',[UserController::class,'update'])->name('dashboard.user.update');
        Route::get('/{id}/delete',[UserController::class,'delete'])->name('dashboard.user.delete');

    }); 
    
    Route::prefix('product')->group(function(){
        Route::get('/create',[ProductController::class,'create'])->name('dashboard.product.create');
        Route::post('/store',[ProductController::class,'store'])->name('dashboard.product.store');
        Route::get('/list',[ProductController::class,'list'])->name('dashboard.product.list');
        Route::get('/{id}/edit',[ProductController::class,'edit'])->name('dashboard.product.edit');
        Route::post('/{id}/update',[ProductController::class,'update'])->name('dashboard.product.update');
        Route::get('/{id}/delete',[ProductController::class,'delete'])->name('dashboard.product.delete');
        Route::get('/{id}/view',[ProductController::class,'view'])->name('dashboard.product.view');
        Route::get('/search',[ProductController::class,'search'])->name('dashboard.product.search');


        Route::get('/{id}/image',[ProductController::class,'image'])->name('dashboard.product.image');
        Route::post('/{id}/image/update',[ProductController::class,'imageUpdate'])->name('dashboard.product.image.update');
        Route::post('/image/delete',[ProductController::class,'deleteImage'])->name('dashboard.product.image.delete');
        Route::get('/{id_product}/image/create',[ProductController::class,'imageCreate'])->name('dashboard.product.image.create');
        Route::post('/image/store',[ProductController::class,'imageStore'])->name('dashboard.product.image.store');
    });  
    Route::prefix('category')->group(function(){
        Route::get('/create',[CategoryController::class,'create'])->name('dashboard.category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('dashboard.category.store');
        Route::get('/list',[CategoryController::class,'list'])->name('dashboard.category.list');
        Route::get('/{id}/edit',[CategoryController::class,'edit'])->name('dashboard.category.edit');
        Route::post('{id}/update',[CategoryController::class,'update'])->name('dashboard.category.update');
        Route::get('/{id}/delete',[CategoryController::class,'delete'])->name('dashboard.category.delete');

    }); 
}); 