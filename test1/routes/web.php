<?php

use Illuminate\Support\Facades\Route;

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
<?php
Route::get('/hello-world', function(Request $request) {
   $name = $request->name;
   return response()->make("<h1>Hello World! This is ".$name, 200);
});
Route::get('/hello-world', 'HelloWorldController@index')->name('hello-world');
?>