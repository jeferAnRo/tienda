<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CartController;
 
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


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detalles/{product}', [App\Http\Controllers\HomeController::class, 'detalles'])->name('detalles');
Route::get('/products/{category}', [App\Http\Controllers\HomeController::class, 'ProductsByCategory'])->name('products.category');



//categorias
Route::get('/admin/categories', [App\Http\Controllers\CategoriesController::class,'index'])->name('admin.categories.index');
Route::POST('/admin/categories/store', [App\Http\Controllers\CategoriesController::class,'store'])->name('admin.categories.store');
Route::POST('/admin/categories/{caategoryid}updtae', [App\Http\Controllers\CategoriesController::class,'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', [App\Http\Controllers\CategoriesController::class,'delete'])->name('admin.categories.delete');



//products
Route::get('/admin/products', [App\Http\Controllers\ProductsController::class,'index'])->name('admin.products.index');
Route::POST('/admin/products/store', [App\Http\Controllers\ProductsController::class,'store'])->name('admin.products.store');
Route::POST('/admin/products/{productsid}update', [App\Http\Controllers\ProductsController::class,'update'])->name('admin.products.update');
Route::delete('/admin/products/{productsid}/delete', [App\Http\Controllers\ProductsController::class,'delete'])->name('admin.products.delete');

//carrito
Route::get('/carrito', [App\Http\Controllers\CartController::class, 'index'])->name('carrito');
