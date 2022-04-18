<?php

use App\Models\Post;
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
Route::get('posts/{slug}', [PostController::class, 'show']);
