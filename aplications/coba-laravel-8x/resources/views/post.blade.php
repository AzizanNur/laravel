{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <article class="mb-5 mt-4">
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!} <!-- this not doing excaping htlm sintax / or this exclude from template engine blade -->
    </article>

    <a href="/blog">Back To Posts</a>
@endsection