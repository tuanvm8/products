<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\CategoryController;

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
//     return view('welcome');
// });

// Route::group(['prefix' => 'master'], function () {
//     Route::get('getDataMaster', [MasterController::class, 'getMasterData']);
//     Route::get('getCourse', [MasterController::class, 'getCourse']);
//     Route::get('getMasterDataForAdmin', [MasterController::class, 'getMasterDataForAdmin']);

//     Route::resource('task', MasterTaskController::class);

     Route::group(['prefix' => '/'], function () {
    
        Route::get('', [ BackEndController::class , 'index' ])->name('home');
    });  

    Route::group(['prefix' => 'category'], function () {
    
        Route::get('/', [ CategoryController::class , 'index' ])->name('category.index');
        Route::get('create', [ CategoryController::class , 'create' ])->name('category.create');
        Route::post('store', [ CategoryController::class , 'store' ])->name('category.store');
    });    

