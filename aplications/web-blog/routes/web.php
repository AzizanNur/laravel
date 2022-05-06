<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => 'about',
        "name" => "azizan nur rohman",
        "email" => "azizan@kly.id",
        "image" => "azizan.png",
    ]);
}); 

Route::get('/blog', [PostController::class, 'index']);

//halaman singel post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post By Category: $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('user', 'category'), //ini menggunakan lazy eager loading,
//     ]);
// });
Route::get('/categories/', function(){
    return view('user', [
        'title' => 'Post By Categories',
        'posts' => Category::all(),
        "active" => 'categories',
    ]);
});

// Route::get('/user/', function(){
//     return view('user', [
//         'title' => 'Users',
//         'posts' => User::all(),
//         "active" => 'blog',
//     ]);
// });

// Route::get('/user/{user:slug}', function(User $user){
//     return view('posts', [
//         'title' => "Post By Author: $user->name",
//         'posts' => $user->posts->load('user', 'category'), //ini menggunakan lazy eager loading
//     ]);
// });

//=======================================//
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// LoginController