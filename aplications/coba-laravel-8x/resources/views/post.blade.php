{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <article class="mb-5 mt-4">
        <h1>{{ $post->title }}</h1>

        <p>By. Azizan in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!} <!-- this not doing excaping htlm sintax / or this exclude from template engine blade -->
    </article>

    <a href="/blog">Back To Posts</a>
@endsection