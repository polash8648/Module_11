<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::group(['prefix'=>'product','as'=>'product.'], function(){
    Route::get('', [ProductController::class, 'index'])->name('index');
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('store', [ProductController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
    Route::get('delete1/{id}', [ProductController::class, 'delete'])->name('delete1');
});



//Route::get('/', 'DashboardController@index')->name('dashboard');
//Route::get('/product', 'ProductController@create')->name('products.create');
//Route::get('/product', [ProductController::class, 'create'])->name('product.create');
//Route::post('/product', [ProductController::class, 'store'])->name('product.store');

//Route::post('/product', 'ProductController@store')->name('product.store');
//Route::get('/transactions', 'TransactionController@index')->name('transactions.index');
