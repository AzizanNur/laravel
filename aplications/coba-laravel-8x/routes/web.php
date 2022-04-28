<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\PostController;

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
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "azizan nur rohman",
        "email" => "azizan@kly.id",
        "image" => "azizan.png",
    ]);
}); 

Route::get('/blog', [PostController::class, 'index']);

//halaman singel post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});
Route::get('/categories/', function(){
    return view('posts', [
        'title' => 'Categories',
        'posts' => Category::all(),
    ]);
});

Route::get('/users/', function(){
    return view('posts', [
        'title' => 'Users',
        'posts' => User::all()
    ]);
});

Route::get('/user/{user:slug}', function(User $user){
    return view('posts', [
        'title' => $user->name,
        'posts' => $user->posts,
        'category' => $user->name,
    ]);
});