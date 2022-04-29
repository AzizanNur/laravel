{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <article class="mb-5 mt-4">
        <h1>{{ $post->title }}</h1>

        <p>By. <a class='text-decoration-none' href="/user/{{ $post->user->slug }}">{{ $post->user->name }}</a> in <a class='text-decoration-none' href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!} <!-- this not doing excaping htlm sintax / or this exclude from template engine blade -->
    </article>

    <a class='text-decoration-none' href="/blog">Back To Posts</a>
@endsection