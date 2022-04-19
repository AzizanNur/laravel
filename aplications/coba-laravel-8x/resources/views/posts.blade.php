@extends('layouts.main')

@section('container')

<h1>Data Post</h1>

@foreach ($posts as $item)

<article class="mb-5 mt-4">
    <h2>
        <a href="/posts/{{ $item->id }}">{{ $item->title }}</a>
    </h2>
    <p>{{ $item->excerpt }}</p>
</article>
@endforeach
    
@endsection