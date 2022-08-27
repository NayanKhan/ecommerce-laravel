<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/', "App\Http\Controllers\Frontend\PagesController@index")->name('home');
    Route::get('/about', "App\Http\Controllers\Frontend\PagesController@about")->name('about');
    Route::get('/blog', "App\Http\Controllers\Frontend\PagesController@blog")->name('blog');
    Route::get('/contact', "App\Http\Controllers\Frontend\PagesController@contact")->name('contact');
    // Route::post('/send-message', "App\Http\Controllers\Frontend\PagesController@sendMail")->name('contact.send');

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('backend.pages.dashboard');
// });


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

    
    // This Route Are For Division Management
    Route::prefix('/divisions')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\DivisionController@index') ->name('division.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\DivisionController@create') ->name('division.create');
        Route::post('/store', 'App\Http\Controllers\Backend\DivisionController@store') ->name('division.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\DivisionController@edit') ->name('division.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\DivisionController@update') ->name('division.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\DivisionController@destroy') ->name('division.destroy');
    });

    
    // This Route Are For District Management
    Route::prefix('/districts')->group(function () {
        Route::get('/manage', 'App\Http\Controllers\Backend\DistrictController@index') ->name('district.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\DistrictController@create') ->name('district.create');
        Route::post('/store', 'App\Http\Controllers\Backend\DistrictController@store') ->name('district.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\DistrictController@edit') ->name('district.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\DistrictController@update') ->name('district.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\DistrictController@destroy') ->name('district.destroy');
    });

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
