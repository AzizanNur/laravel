<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // dd(Request('search')); to cactch data in request url

        return view('posts', [
            "title" => "Data Posts",
            "active" => 'posts',
            // "posts" => Post::all() //this is collection datas
            "posts" => Post::latest()->filter(request(['search', 'category']))->get() //this to show latest post and user eager load (with in model post), and filter from is scopeFilter in model post
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
