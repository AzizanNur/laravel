<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Data Posts",
            "active" => 'posts',
            // "posts" => Post::all() //this is collection datas
            "posts" => Post::latest()->get() //this to show latest post and user eager load
        ]); 
    }

    public function show(Post $post){
        return view('post', [
            "title" => 'post',
            "active" => 'posts',
            'post' => $post,
        ]);
    }
}
