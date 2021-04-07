<?php
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CategoryController;
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

// client
Route::namespace('Client')->group(function () {
    Route::get('/',[HomeController::class,'index']);
    Route::get('/single',[HomeController::class,'single']);
    Route::get('/categogy',[HomeController::class,'categogy']);
});

// admin
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function () {
    Route::get('login',[LoginController::class,'index']);
    Route::post('login',[LoginController::class,'login']);
    Route::get('/',[AdminController::class,'index']);
    Route::group(['prefix' => 'blog'], function () {
        Route::get('', [BlogController::class,'idnex']);
        Route::get('create',[BlogController::class,'create']);
        Route::post('create', [BlogController::class,'store']);
        Route::get('{blog}/edit', [BlogController::class,'edit']);
        // Route::put('{Hotel}', 'HotelController@update');
        // Route::delete('{Hotel}', 'HotelController@destroy');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('',[CategoryController::class,'index']);
        Route::get('create',[CategoryController::class,'create']);
        Route::post('create', [CategoryController::class,'store']);
    });
});
