<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // dd(Request('search')); to cactch data in request url

        //this example to get data from controller
        $posts = Post::latest();
        if(request('search')){
            $posts->where('title', 'like', '%'.request('search').'%')
            ->orWhere('body', 'like', '%'.request('search').'%');
        }

        return view('posts', [
            "title" => "Data Posts",
            "active" => 'posts',
            // "posts" => Post::all() //this is collection datas
            "posts" => $posts->get() //this to show latest post and user eager load
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
