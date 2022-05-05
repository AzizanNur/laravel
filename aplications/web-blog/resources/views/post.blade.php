{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                    <p>By. <a class='text-decoration-none' href="/user/{{ $post->user->slug }}">{{ $post->user->name }}</a> in <a class='text-decoration-none' href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="">
                    
                    <article class="my-3 fs-5">
                        {!! $post->body !!} <!-- this not doing excaping htlm sintax / or this exclude from template engine blade -->
                    </article>
                <a class='text-decoration-none d-block mt-3 mb-5' href="/blog">Back To Posts</a>
            </div>
        </div>
    </div>

    
@endsection