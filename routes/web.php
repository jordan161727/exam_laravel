<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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

//Route::get('/', function () {
  //  return view('index');
//});
Route::get('/', [ProductController::class, 'welcome']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('product', ProductController::class);

Route::get('products/trash', [ProductController::class, 'trash']);
Route::get('products/trash', [ProductController::class, 'trash'])->name('product.trash');
Route::get('products/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
Route::get('products/force-delete/{id}', [ProductController::class, 'forceDelete'])->name('product.force-delete');


Route::resource('category', CategoryController::class);
Route::get('categories/trash', [CategoryController::class, 'trash'])->name('category.trash');
Route::get('categories/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
Route::get('categories/force-delete/{id}', [CategoryController::class, 'forceDelete'])->name('category.force-delete');

Route::get('shop/{slug}', [ShopController::class, 'show'])->name('shop.show');


//Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/test', [ProductController::class, 'productList'])->name('products.list');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('removes', [CheckoutController::class, 'removeCart'])->name('checkout.remove');
Route::post('store', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/details', [CheckoutController::class, 'show'])->name('checkout.show');