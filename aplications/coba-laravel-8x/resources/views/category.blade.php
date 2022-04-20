@extends('layouts.main')

@section('container')

<h1>Data <a href="/categories/">Category</a> {{ $title }}</h1>

@forelse ($posts as $item)
    <article class="mb-5 mt-4">
        <h2>
            <a href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
        </h2>
        <p>{{ $item->excerpt }}</p>
    </article>
@empty
    <p>Data belum ada</p>    
@endforelse 
    
@endsection