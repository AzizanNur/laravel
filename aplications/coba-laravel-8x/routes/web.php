<?php

use App\Providers\RouteServiceProvider;
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

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul Pertama",
            "slug" => "judul-pertama",
            "author" => "azizan",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            "
        ],
        [
            "title" => "judul kedua",
            "slug" => "judul-kedua",
            "author" => "azhar",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            "
        ],
        [
            "title" => "judul ketiga",
            "slug" => "judul-ketiga",
            "author" => "zeline",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            "
        ]
    ];
    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

//halaman singel post
Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "title" => "judul Pertama",
            "slug" => "judul-pertama",
            "author" => "azizan",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            "
        ],
        [
            "title" => "judul kedua",
            "slug" => "judul-kedua",
            "author" => "azhar",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            "
        ],
        [
            "title" => "judul ketiga",
            "slug" => "judul-ketiga",
            "author" => "zeline",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laboriosam aperiam blanditiis quam inventore deserunt vel impedit distinctio nam corporis veritatis fuga, molestias et, magni delectus perferendis nostrum non recusandae.
            "
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => 'post',
        'post' => $new_post
    ]);
});
