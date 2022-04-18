@extends('layouts.main')

@section('container')

<h1>Data Post</h1>

@foreach ($posts as $item)

<article class="mb-5 mt-4">
    <h2>
        <a href="/posts/{{ $item["slug"] }}">{{ $item["title"] }}</a>
    </h2>
    <h5>By: {{ $item["author"] }}</h5>
    <p>{{ $item["body"] }}</p>
</article>
@endforeach
    
@endsection