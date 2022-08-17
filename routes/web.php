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

Route::get('/about', function () {
    return view('backend.pages.dashboard');
});


Route::group([ 'prefix' => 'admin' ], function(){

    Route::get('/dashboard', "App\Http\Controllers\Backend\DashboardController@dashboard")->name('admin.dashboard');

     // This Route Are For Branch Management
     Route::prefix('/brands')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\BrandController@index') ->name('brand.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BrandController@create') ->name('brand.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BrandController@store') ->name('brand.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BrandController@edit') ->name('brand.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\BrandController@update') ->name('brand.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\BrandController@destroy') ->name('brand.destroy');
    });

     // This Route Are For category Management
     Route::prefix('/categories')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\CategoryController@index') ->name('category.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CategoryController@create') ->name('category.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CategoryController@store') ->name('category.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CategoryController@edit') ->name('category.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CategoryController@update') ->name('category.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CategoryController@destroy') ->name('category.destroy');
    });

    // This Route Are For Product Management
    Route::prefix('/products')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\ProductController@index') ->name('product.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\ProductController@create') ->name('product.create');
        Route::post('/store', 'App\Http\Controllers\Backend\ProductController@store') ->name('product.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ProductController@edit') ->name('product.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\ProductController@update') ->name('product.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\ProductController@destroy') ->name('product.destroy');
    });

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
