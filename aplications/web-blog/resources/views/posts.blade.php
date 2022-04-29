@extends('layouts.main')

@section('container')

<h1>{{ $title }}</h1>

@foreach ($posts as $item)

<article class="mb-5 mt-4 border-bottom pb-4">
    <h2>
        <a class='text-decoration-none' href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
    </h2>
    <p>By. <a class='text-decoration-none' href="/user/{{ $item->user->slug }}">{{ $item->user->name }}</a> in <a class='text-decoration-none' href="/categories/{{ $item->category->slug }}">{{ $item->category->name }}</a></p>
    <p>{{ $item->excerpt }}</p>
    <a class='text-decoration-none' href="/posts/{{ $item->slug }}">Read More...</a>
</article>
@endforeach
    
@endsection