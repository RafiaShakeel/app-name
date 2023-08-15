<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\categoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('category', 'App\Http\Controllers\Admin\categoryController@index');
    
    Route::get('add-category', 'App\Http\Controllers\Admin\categoryController@add');

    Route::post('insert-category', 'App\Http\Controllers\Admin\categoryController@insert');
    

    Route::get('edit-prod/{id}', [categoryController::class,'edit']);

    Route::put('update-category/{id}',[categoryController::class,'update']);
});