<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PDFController;

use Illuminate\Support\Facades\Auth;
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

//--------------------------------------------------------
Route::get('/', [HomeController::class,'getHome']);
//--------------------------------------------------------
/*Route::get('login', function () {
    return view('auth.login');
});
//--------------------------------------------------------
Route::get('logout', function () {
    echo('Logout Usuario');
});*/

Route:: group(['middleware' => 'auth'], function(){
    Route::get('catalog', [CatalogController::class,'getIndex']);
    Route::get('catalog/show/{id}',[CatalogController::class,'getShow']);
    Route::get('catalog/create', [CatalogController::class,'getCreate']);
    Route::get('catalog/edit/{id}',[CatalogController::class,'getEdit']);
    Route::get('catalog/delete/{id}', [CatalogController::class,'getDelete']);
    Route::get('catalog/download/{id}', [CatalogController::class, 'PDF']);

    
    Route::post('catalog/create', [CatalogController::class,'postCreate']);
    Route::post('catalog/edit/{id}',[CatalogController::class,'putEdit']);
    Route::post('catalog', [CatalogController::class,'postIndex']);
});
//--------------------------------------------------------

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

