{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <article class="mb-5 mt-4">
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">Back To Posts</a>
@endsection