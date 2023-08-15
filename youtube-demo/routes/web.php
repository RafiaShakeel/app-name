<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\postController;
use App\Models\Post;


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
    $posts = Post::paginate(2); // Change the number (10) to the desired number of posts per page
    return view('home', ['posts' => $posts]);
});

Route::post('/register',[UserController::class ,'register']);
Route::post('/logout',[UserController::class , 'logout']);
Route::post('/login',[UserController::class , 'login']);
//blog post routes
Route::post('/create-post',[postController::class ,'createPost']);
// Soft delete a post
Route::delete('/delete-post/{id}', [postController::class, 'softDelete']);

Route::get('/edit-post/{post}', [postController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [postController::class, 'actuallyUpdatePost']);


?>

